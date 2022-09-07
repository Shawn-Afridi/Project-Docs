
<?php require_once("connection.php");   ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style>
.style1{
	font-size:30px;
	text-transform:uppercase;
	color:#F00;
	border:2px solid #0F0;		
}
.style9{
	
	alignment-adjust:auto;
	}
.style9 a{
	text-decoration:none;
	font-size:19px;
	font-weight:bold;
	color:#F00;
	}
.style9 a:hover{
	border:1px solid #0C9;
	}

</style>

</head>

<body bgcolor="#FFF3E8">

<table width="100%" border="0">
  <tr>
    <th width="46%" height="107" scope="col"><img src="logo.png" width="550" height="51"  alt=""/></th>
    <th colspan="5" scope="col"><span class="style1">exam managment system (ems)</span></th>
  </tr>
  <tr>
    <td width="46%" height="65"><div align="right"><strong><span class="style9"><a href="index.php">Home</a></span></strong></div></td>
    <td width="10%"><div align="center"><strong><span class="style9"><a href="#">Exam</a></span></strong></div></td>
    <td width="16%"><div align="center"><strong><span class="style9"><a href="#">Exam Schedule</a></span></strong></div></td>
    <td width="12%"><div align="center"><strong><span class="style9"><a href="#">Profile Update</a></span></strong></div></td>
    <td width="16%"><div align="center">
    <?php	
	{	
		if(isset($_SESSION['login']))	
			echo "<a  href='logout.php'  target='_self'>Logout</a>";  
		else	
			echo "<a href='login.php'   target='_self'>Login</a>";		
		
	}?>
    </div></td>
  </tr>
</table>


</body>
</html>