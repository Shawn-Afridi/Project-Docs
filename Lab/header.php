<?php
	require_once("connection.php");

?>
<!DOCTYPE
<html>
<head>
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" >
</head>

<body>
<table width="100%" border="0" bgcolor="	#DE3163">
  <tr>
    <th width="17%" scope="col"><img src="kyau logo only.png" width="213" height="138" /></th> <br>
    <th colspan="5" scope="col"><span class="style1">Exam Management Systems (EMS) </span></th>
  </tr>
  <tr>
    <td><div align="center"><a href="index.php">Home</a></div></td>
    <td width="19%"><div align="center"><strong><span class="style9">Exams</span></strong></div></td>
    <td width="18%"><div align="center"><strong><span class="style9">Exam Schedule </span></strong></div></td>
    <td width="19%"><div align="center"></div></td>
    <td width="14%"><div align="center">Profile Update </div></td>
    <td width="13%"><div align="center"><?php	
	{	
		if(isset($_SESSION['login']))	
			echo "<a href='logout.php' target='_self'>Logout</a>";  
		else	
			echo "<a href='login.php' target='_self'>Login</a>";		
		
	}	?></div></td>
	
  
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>

</html>
