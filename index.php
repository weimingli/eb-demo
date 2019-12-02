<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>AWS Test Web Server Application</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />

</head>

<?php
  # Get the instance ID from meta-data and store it in the $instance_id variable
  $url = "http://169.254.169.254/latest/meta-data/instance-id";
  $instance_id = file_get_contents($url);
  
  # Get the instance's availability zone from metadata and store it in the $zone variable
  $url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
  $zone = file_get_contents($url);
  
  # Get the AMI ID.
  $url = "http://169.254.169.254/latest/meta-data/ami-id";
  $ami_id = file_get_contents($url);  
  
  # Obtain the user data used to launch this instance.
  $url = "http://169.254.169.254/latest/user-data";
  $userdata = file_get_contents($url);
?>

<body> 

<!-- start content -->
<center>
<div id="content">
			<center>
				<img src="images/AWS_Logo_Web_200px.png">
				<br/>
				<br/>
			<h2>Instance Metadata<h2>
			<p style="font-style"italic;">(From the locally installed metadata service http://169.254.169.254/latest)</p>

	<table border="1" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th>Metadata Path</th>
		<th>Metadata Value</th>
	</tr>
	<tr>
		<td>/meta-data/instance-id</td>
		<td><?php echo $instance_id; ?></td>
	</tr>
	<tr>
		<td>/meta-data/placement/availability-zone</td>
		<td><?php echo  $zone; ?></td>
	</tr>
	<tr>
		<td>/meta-data/ami-id</td>
		<td><pre><?php echo  $ami_id; ?></pre></td>
	</tr>
	<tr>
		<td>/user-data</td>
		<td><pre><?php echo  $userdata; ?></pre></td>
	</tr>

	</table>

</center>
<!--  end content -->
</div>
 
</body>
</html>
