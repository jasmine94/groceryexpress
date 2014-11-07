<?php
session_start();   
?>

<?php
    function checker($field)
	{
	    $field = filter_var($field,FILTER_SANITIZE_EMAIL);
	    if(filter_var($field,FILTER_VALIDATE_EMAIL))
	    {
	        return TRUE;
	    }
	    else
	    {
	    	return FALSE;
	    }
	}

	if(isset($_POST['submit']))
	{

		$name = $_POST['name'];
	    $email = checker($_POST['email']);
	    $subject = $_POST['subj'];
	    $message = $_POST['message1'];
		
		if(isset($name) && isset($email) && isset($subject) 
	    	&& isset($message)){
		                            		
			//if ($securimage->check($_POST['captcha_code']) == true) {

			if(exist($domain) == 'false')
			{
				$query = "INSERT INTO feedback(id,name,email_add,subject,message) VALUES('','".$name."','".$email."','".$subject."','".$message."')";
				mysql_query($query) or die(mysql_error());
				header('Location: index.php');
			}
			else
				alert("Existing domain.");
			//}
			/*else{
				echo "The security code entered was incorrect.<br /><br />";
				echo "Please try again.";
			}*/
	    }
	    else
	    {
	    	echo "Invalid";
	    
	    }
    }
?>
