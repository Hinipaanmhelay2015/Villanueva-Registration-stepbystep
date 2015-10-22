<link rel="stylesheet" type="text/css" href="set.css">

<?php

$firstName = $_POST[“f_sname”];
$middleName = $_POST[“m_name”];
$lastName = $_POST[“l_name”];
$gender = $_POST[“gender”];

// Birthday
$month = $_POST[“month”];
$day= $_POST[“day”];
$year= $_POST[“year”];

// Program and student type
$program = $_POST[“program”];
$studentType= $_POST[“student_type”];
$address = $_POST[“address”];
?>

First Name: <strong><?php echo $firstName; ?></strong><br />
Middle Name: <strong><?php echo $middleName; ?></strong><br />
Last Name: <strong><?php echo $lastName; ?></strong><br />
Gender: <strong><?php echo $gender; ?></strong><br />
Birthday: <strong><?php echo $birthday; ?></strong><br />
Program: <strong><?php echo $program; ?></strong><br />
Student Type: <strong><?php echo $studentType; ?></strong><br />
Address: <pre><?php echo $address; ?></pre><br />
