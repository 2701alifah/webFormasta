<!DOCTYPE html>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
<title>Login Admin</title>



<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/bootstrap-responsive.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/prettyPhoto.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/flexslider.css")?>">
<link rel="stylesheet" href="<?php echo base_url("css/custom-styles.css")?>">

<link rel="shortcut icon" href=<?php echo base_url("img/favicon.ico")?>">
  
</head>

<body>

<style type="text/css">
table{
position: absolute;
height: 100px;
top: 50%;
left: 50%;
margin: -100px 0 0 -150px;
}
</style>
</head>
<body>
<form method="post" action="<?php echo site_url('MyControllerAdmin/loginAdmin')?>">
<table>
<tr>
<td>Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="LOGIN"></td>
</tr>

</table>
</form>
</body>
</html>