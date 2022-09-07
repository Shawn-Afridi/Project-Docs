
<?php
	require_once("connection.php");
 	
	if(isset($_POST['user_registration']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		
		if(!empty($user_id) and !empty($user_password) and !empty($user_name) and !empty($user_email))
		{
			$sql = "Select * from user_info where user_id = '$user_id'";
			if($res  = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($res) == 0)
				{
					// Insert
					$ins = "INSERT INTO user_info(`user_id`, `user_password`, `user_name`, `user_email`) VALUES ('$user_id', '$user_password', '$user_name', '$user_email')";
					mysqli_query($conn,$ins);
				}
				else
					echo "<script>	alert('This data already used, Please try another...............');		</script>";		
			
			}			
		}	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {
	font-size: 24px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FF0000;
	font-weight: bold;
}
.set{
	width:50%;
	border:2px solid #0D0;
	border-radius:10px;
	
	}
-->
</style>
</head>

<body>
<?php require_once("header.php");    ?>

<table width="100%" height="306" border="0">
  <tr>
    <th scope="col"></th>
  </tr>
  <tr>  </tr>
  <tr>
    <td align="center">
	<form action="" method="post">
    <fieldset class="set">
      <table width="200" border="0">
      <tr>
        <th width="62" scope="col"></th>
        <th width="128" scope="col"></th>
      </tr>
      <tr>
        <td height="62" colspan="2"><div align="center" class="style2"> User<span style="color:#0F0"> Registration</span> </div></td>
        </tr>
      <tr>
        <td height="33"><div align="right">User ID </div></td>
        <td><div align="center"><input type="text" size="30" name="user_id"  /></div></td>
      </tr>
      <tr>
        <td height="33"><div align="right">Password</div></td>
        <td><div align="center"><input type="password" size="30" name="user_password" /></div></td>
      </tr>
      <tr>
        <td height="33"><div align="center">Name</div></td>
        <td><div align="left"><input type="text" size="30" name="user_name" /></div></td>
      </tr>
      <tr>
        <td height="33"><div align="center">Email</div></td>
        <td>
          
            <div align="left"><input type="text" size="30" name="user_email" /></div></td>
      </tr>
	  <tr>
        <td><div align="center"></div></td>
        <td>
          <div align="left">
            <input type="submit" size="30" name="user_registration" value="Registration" />
            </div></td></tr>
    </table>
    </fieldset>
	</form>
    </td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
</table>
<?php require_once("footer.php");    ?>

</body>
</html>