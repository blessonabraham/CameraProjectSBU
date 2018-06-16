<?php
/**
 * ****************************************************************************
 * Micro Protector
 * 
 * Version: 1.0
 * Release date: 2007-09-10
 * 
 * USAGE:
 *   Define your requested password below and inset the following code
 *   at the beginning of your page:
 *   <?php require_once("microProtector.php"); ?>
 * 
 *   See the attached example.php.
 * 
 ******************************************************************************/
$file = 'password.json';
$Password = json_decode(file_get_contents($file), TRUE);


/******************************************************************************/
   if (isset($_POST['submit_pwd'])){
      $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
      
      if ($pass != $Password) {
         showForm("That's a Wrong password");
         exit();     
      }
   } else {
      showForm();
      exit();
   }
   
function showForm($error=""){
?>


		
			<?php include_once('header.php'); ?>

				
				
		
					
							<center>
							
									<br/>	<br/>	<br/>	<br/>	<br/>
	

							
	<h3 style="color: #5a5a5a;text-align: center;">Login to Continue</h3>

					
				      <p style="color: #5a5a5a;text-align: center;" class="lead"><?php echo $error; ?></p>

				
				 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="pwd">
			

        <input style="width: 40%;" type="password" class="form-control"  name="passwd" placeholder="Type the password here" />
		<br/>
        <input class="btn btn-default btn-lg" type="submit" name="submit_pwd" value="Login Now"/>

		
      
      </form>
				
				</center>
				
				
				
				
				
						<br/>
		<br/>
		<br/>
		<br/>
		<br/>

	<br/>
		<br/>
				
				</div>
			
	<?php include_once('footer.php'); ?>

   	
</body>

</html>


<?php   
}
?>