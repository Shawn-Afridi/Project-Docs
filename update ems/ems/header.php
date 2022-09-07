<?php
	require_once("conection.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 60px;
	color: #FF00FF;
}
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16; color: #0000FF; }
-->
</style>
</head>

<body>
<table width="100%" border="0" bgcolor="#FFFF66">
  <tr>
    <th width="16%" scope="col"><img src="images/ems_logo.png" width="213" height="138" /></th>
    <th colspan="6" scope="col"><span class="style1">Exam Management Systems (EMS) </span></th>
  </tr>
  <tr>
    <td><div align="center"><a href="index.php">Home</a></div></td>
    <td width="18%"><div align="center"><strong><span class="style9">Exams</span></strong></div></td>
    <td width="18%"><div align="center"><strong><span class="style9">Exam Schedule </span></strong></div></td>
    <td width="8%"><div align="center"></div></td>
    <td width="14%"><div align="center">Profile Update </div></td>
    <td width="7%"><div align="center"><?php	
	{	
		if(isset($_SESSION['login']))	
			echo "<a href='logout.php' target='_self'>Logout</a>";  
		else	
			echo "<a href='login.php' target='_self'>Login</a>";		
		
	}	?></div></td>
	
    <td width="19%"><div align="right" class="style9">
      <?php		
	
		if(isset($_SESSION['login']))	
			echo $_SESSION['user_name']."(".$_SESSION['user_type'].")";  
		
		?>
    </div></td><td width="0%"></td>
  </tr>
</table>
</body>

</html>
