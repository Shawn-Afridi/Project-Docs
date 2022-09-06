<?php
	require_once("connection.php");
 	
	if(isset($_POST['login']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		
		if(!empty($user_id) and !empty($user_password))
		{
			$sql = "Select * from registration_form where user_id = '$user_id' and user_password = '$user_password'";
			if($res = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($res) > 0)
				{
					$rows = mysqli_fetch_assoc($res);
					$_SESSION['login'] = 1;
					$_SESSION['user_id'] = $rows["user_id"];
					$_SESSION['user_name'] = $rows["user_name"];
					$_SESSION['user_type'] = $rows["user_type"];
					header("Location:index.php");
				}
				else
					echo "<script>	alert('Your ID and Password incorrect');		</script>";
			
			}
			
		}
	}	

?>		
<!DOCTYPE
<html>
<head>
<title>Log in Page</title>
<style type="text/css">
<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
-->
</style>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <th scope="col"><?php		require_once("header.php");		?></th>
  </tr>
  <tr>  </tr>
  <tr>
    <td align="center">
	<form action="" method="post">
      <table width="200" border="0">
      <tr>
        <th width="62" scope="col"></th>
        <th width="128" scope="col"></th>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><span class="style2">Login Form</span> </div></td>
        </tr>
      <tr>
        <td><div align="right">User ID </div></td>
        <td><div align="center"><input type="text" size="30" name="user_id" autocomplete="off"  /></div></td>
      </tr>
      <tr>
        <td><div align="right">Password</div></td>
        <td><div align="center"><input type="password" size="30" name="user_password" autocomplete="off" /></div></td>
      </tr>
      <tr>
      <td><div align="center"></div></td>
        <td>
          
            <div align="left">
              <input class="btn" type="submit" name="login" value="Sign In" >
          </div></td>
      </tr>
      <tr>
      <td><div align="center"></div></td>
        <td><div align="left" ><a href="signup.php" target="_self">Sign Up</a></div></td>
        
      </tr>
    </table>
	</form>
    </td>
  </tr>
  <tr>
    <td><div align="center"><?php		require_once("footer.php");		?></div></td>
  </tr>
</table>
</body>
</html>
