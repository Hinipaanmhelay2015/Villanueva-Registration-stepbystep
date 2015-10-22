<html>
<head><center>
	<title>StudentRegistration</title>
 <link rel="stylesheet" type="text/css" href="set.css">
 
 <h1>Student Register Form<h1>
	<table  border = "1">
</center></head>
<body bgcolor="#64ebb5"><center>
	
	<div> 
    </center>
	<form name = method ="POST" action = "Reg3.php">
		<table border ="10" cellpadding = "15">

	<tr>
	<td>Month<select name = "month">
		<option value=""></option>
		<option value="January">January</option>
	    <option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
	</select>
	</td>
	<td>Day <select name = "day">
		<option value=""></option>
		<?php 
			for ($s=1; $s <= 31 ; $s++):
		?>
		<option value="<?php echo $s; ?>"><?php echo $s; ?></option>

		<?php endfor; ?>
		</select>
	</td>
	

		<td>Year <select name = "year">
		<option value=""></option>
		<?php 
			for ($i=2016; $i >= 1920 ; $i--):
		?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>

		<?php endfor; ?>
		</select>
	</td>


</table>
	<button = "submit" value = "Registerform submit">BACK</button></td>
	<button type="reset" value ="Reset">NEXT</button>
	