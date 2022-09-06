<?php
	require_once("connection.php");
 	
	if(isset($_POST['user_registration']))
	{
		$user_id = $_POST['user_id'];
		$user_password = $_POST['user_password'];
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		
		if(!empty($user_id) and !empty($user_name) and !empty($user_email) and !empty($user_password))
      {
            $ins = "INSERT INTO  registration_form  (`id`, `user_id`, `user_name`, `user_email`, `user_password`) VALUES ($user_id, $user_password, $user_name, $user_email)";
            mysqli_query($conn,$ins);
      }	
	 }

?>
<!DOCTYPE 
<html>
<head>
<title>Sign Up Form</title>
<link href="style.css" rel="stylesheet" >
</head>

<body>
<table width="100%" border="0">
  <tr>
    <th scope="col"><?php		require_once("header.php");		?></th>
  </tr>
  <tr>  </tr>
  <tr>
    <td align="center">
	<form action="signup.php" method="POST">
      <table width="200" border="0">
      <tr>
        <th width="62" scope="col"></th>
        <th width="128" scope="col"></th>
      </tr>
      <tr>
        <td colspan="2"><div align="center" class="style2">User Registration </div></td>
        </tr>
      <tr>
        <td><div align="right">User ID </div></td>
        <td><div align="center"><input type="text" size="30" name="user_id"  /></div></td>
      </tr>
      <tr>
        <td><div align="center">Name</div></td>
        <td><div align="left"><input type="text" size="30" name="user_name" /></div></td>
      </tr>
      <tr>
        <td><div align="center">Email</div></td>
        <td>
          
            <div align="left"><input type="text" size="30" name="user_email" /></div></td>
      </tr>
      <tr>
        <td><div align="right">Password</div></td>
        <td><div align="center"><input type="password" size="30" name="user_password" /></div></td>
      </tr>

	  <tr>
        <td><div align="center"></div></td>
        <td>
          <div align="right">
            <input type="submit" size="30" name="user_registration" value="Registration" />
            </div></td></tr>
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
