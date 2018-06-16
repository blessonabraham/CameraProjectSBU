
	
	
	<?php include_once('header.php'); ?>
	
	
	
	
		<br/><br/>
	<br/><br/>


	<center>
	
		<?php
if (!empty($_POST["infile"])) {

    //be sure to validate and clean your variables
    $infile= htmlentities($_POST['infile']);

$file = 'password.json';
$content = json_encode($infile);
file_put_contents($file, $content);


$contentnew = json_decode(file_get_contents($file), TRUE);


?>
<p style="color: #5a5a5a;text-align: center;" class="lead">Current Password: <?php echo $contentnew; ?></p>
<?php

}
else
	
	{
		
		$file = 'password.json';
$contentnew = json_decode(file_get_contents($file), TRUE);



?>
<p style="color: #5a5a5a;text-align: center;" class="lead">Current Password: <?php echo $contentnew; ?></p>
<?php


}
?>		
					
					
					
					
					
					
					
		  
					
					<form action="password.php" method="post">
   <h4 style="color: #5a5a5a;text-align: center;" class="lead">Update Password:</h4>
    <input class="form-control" placeholder="Type the password here" style="width: 40%;" type="text" name="infile" id="infile"></input>

    <br>

    <input class="btn btn-success btn-lg" type="submit" name="submit"  value="Update Password"></input> &nbsp; <a href="dashboard.php" class="btn btn-info btn-lg" role="button">Back to Home</a>

</form>
					
					
					
					
				

	



		</center>

	

	<br/>
	<br/>
	<br/>
	<br/>
	
	
		<br/><br/>
	
  	

		 </div>
	

  </body>
  
  	<?php include_once('footer.php'); ?>

  	<br/>
	<br/>
	<br/>
	<br/>
		
</html>