<?php 
if (isset($_GET['m']))
{
	if($_GET['m'] == 'mahasiswa')
	{
		include("mhs_list.php");
	}
	if($_GET['m'] == 'mahasiswa_form')
	{
		include("mhs_form.php");
	}
}
else
	{
		include("dashboard.php");
	}
 ?>
