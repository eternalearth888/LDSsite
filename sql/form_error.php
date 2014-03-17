<!--ERROR CHECKING-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
      if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
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
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL"; 
      }
    }

    if (empty($_POST["titleName"])) {
      $titleErr = "Title is required";
    } else {
      $title = test_input($_POST["titleName"]);
    }
} else {
  if((!empty($nameErr)) || (!empty($nameErr2)) || (!empty($emailErr)) || (!empty($phoneErr)) || (!empty($websiteErr)) || (!empty($titleErr))) {
?>
  <form action="contact.php" method="POST" name="errorForm">
<?php
  foreach ($_POST as $a => $b) {
    echo "<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."'>";
  }
  if(!empty($nameErr)) {
    echo "<input type='hidden' name='nameErr' value='".htmlentities($nameErr)."'>";
  }
  if (!empty($nameErr2)) {
    echo "<input type='hidden' name='nameErr2' value='".htmlentities($nameErr2)."'>";
  }
  if (!empty($emailErr)) {
    echo "<input type='hidden' name='emailErr' value='".htmlentities($emailErr)."'>";
  }
  if (!empty($phoneErr)) {
    echo "<input type='hidden' name='phoneErr' value='".htmlentities($phoneErr)."'>";
  }
  if (!empty($websiteErr)) {
    echo "<input type='hidden' name='websiteErr' value='".htmlentities($websiteErr)."'>";
  }
  if (!empty($titleErr)) {
    echo "<input type='hidden' name='titleErr' value='".htmlentities($titleErr)."'>";
  }
?>
  </form>
  <script language="JavaScript">
    document.errorForm.submit();
  </script>
<?php
  } else {
    echo '<h2>'."Thank you for your submission!".'</h2>';
  }
?>
<?php
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>