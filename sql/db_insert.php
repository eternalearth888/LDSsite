<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASSWORD","");
	define("DATABASE", "ldsexecu_submissions");

	$db = new mysqli(HOST, USER, PASSWORD, DATABASE);

	if (mysqli_connect_errno()) {
		echo "ERROR: Could not connect to database. Please try again later.";
		printf("Connect failed: %s\n", $db->connect_error);
		exit;
	}

	$query = "INSERT INTO submissions (address_1,address_2,city,state,country,zipcode,paragraph,first_name,last_name,site,exec_coaching,team_develop,more_other,c_suite,hr_rep,position,company_name,company_size,email,phone,stamp,title) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$db = new mysqli(HOST, USER, PASSWORD, DATABASE);

	$prepared_stmt = $db->prepare($query);

	$prepared_stmt->bind_param("sssssissssssssssssssss",$address1,$address2,$city,$state,$country,$code,$details,$fname,$lname,$site,$coachV,$teamV,$infoV,$suiteV,$repV,$posV,$company,$orgSize,$email,$phone,$dateStamp,$title);
	$prepared_stmt->execute();
	
	$prepared_stmt->close();
	$db->close();
?>