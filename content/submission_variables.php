<!-- VARIABLE NAMES -->
<?php
  date_default_timezone_set('America/Denver');
  $dateStamp = date('d/m/Y');
  $seperator = "-------------------------------";
  $fname = $_POST['firstName'];
  $lname = $_POST['lastName'] ;
  $title = $_POST['titleName'];
  $company = $_POST['comName'];
  $orgSize = $_POST['orgSize'];
  $phone = $_POST['comTel'];
  $email =$_POST['comEmail'];
  $site = $_POST['comSite'];
  $address1 = $_POST['comAdd1'];
  $address2 = $_POST['comAdd2'];
  $city = $_POST['comCity'];
  $state= $_POST['states'];
  $country = $_POST['countries'];
  $code = $_POST['comZip'];
  $details = $_POST['text'];
?>