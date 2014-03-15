<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   if (empty($_POST["firstName"])) {
   		$nameErr = "First Name is required";
   	} else {
   		$name = test_input($_POST["firstName"]);
     	// check if name only contains letters and whitespace
     	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    		$nameErr = "Only letters and white space allowed"; 
     	}
   	}
  
 	if (empty($_POST["lastName"])) {
 		$nameErr2 = "Last Name is required";
 	} else {
 		$lname = test_input($_POST["lastName"]);
     	// check if name only contains letters and whitespace
     	if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
    		$nameErr2 = "Only letters and white space allowed"; 
     	}
 	}
 
   if (empty($_POST["comEmail"])) {
   		$emailErr = "Email is required";
   	} else {
   		$email = test_input($_POST["comEmail"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format"; 
       }
   	}
  
   if (empty($_POST["comTel"])) {
   		$phoneErr = "Phone Number is required";
   	}

   	if (empty($_POST["comSite"])) {
   		$website = "";
   	} else {
		$website = test_input($_POST["website"]);
		// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
		{
			$websiteErr = "Invalid URL"; 
		}
    }

    if (empty($_POST["titleName"]))
     {$titleErr = "Title is required";}
   else
     {$title = test_input($_POST["titleName"]);}
}
function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>

