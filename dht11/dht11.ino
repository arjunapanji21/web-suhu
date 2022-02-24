#include <WiFi.h>
#include <HTTPClient.h>
#include "DHT.h"
#define DHTPIN 15
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);

String ruangan = "Server";
String ip_server = "10.102.5.128";

const char *ssid = "IPC JAMBI";  //Nama Wifi
const char *password = ""; // pass wifi

float h, t, old_h, old_t, suhu, kelembaban;

void setup() {
  delay(1000);
  pinMode(DHTPIN, INPUT);
  Serial.begin(115200);
  WiFi.mode(WIFI_OFF);
  delay(1000);
  WiFi.mode(WIFI_STA);

  WiFi.begin(ssid, password);
  Serial.println("");

  Serial.print("Connecting");
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());  //IP address assigned to your ESP
  dht.begin();
  read_dht();
  kirim_data();
}

void loop() {
  static unsigned long sendToWeb = millis();
  if (millis() - sendToWeb > 3600000U)  //every 60 minutes
  {
    kirim_data();
    sendToWeb = millis();
  }

  static unsigned long readSensor = millis();
  if (millis() - readSensor > 1000U)  //every 1000 milliseconds,read the analog value from the ADC
  {
    read_dht();
    readSensor = millis();
  }
}

void read_dht() {
  h = dht.readHumidity();
  t = dht.readTemperature();

  // Check if any reads failed and exit early (to try again).
  if (isnan(h) || isnan(t)) {
    Serial.println(F("Failed to read from DHT sensor!"));
    return;
  }
  Serial.print(F("Humidity: "));
  Serial.print(h);
  Serial.print(F("%  Temperature: "));
  Serial.print(t);
  Serial.println(F("°C "));
  delay(100);
}

void kirim_data() {
  suhu = t;
  kelembaban = h;

  String postData = (String)"ruangan=" + ruangan + "&suhu=" + suhu + "&kelembaban=" + kelembaban;

  HTTPClient http;
  http.begin("http://" + ip_server + "/suhu/api.php");
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");

  auto httpCode = http.POST(postData);
  String payload = http.getString();

  Serial.println(postData);
  Serial.println(payload);

  http.end();
  delay(100);
}
