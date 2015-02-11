<!DOCTYPE html>
<html>
	<head>
		<title>PurdueLoL - Events</title>
		<link rel="stylesheet" type="text/css" href="/cam/css/style.css">
		<link rel="stylesheet" tpye="text/css" href="/cam/css/events.css">
	</head>
	<body>
		
<?php 
	require_once('navbar.php'); 
	createNavbar();
	
	echo <<< _HEADING
		<h1 id="title">Upcoming Events</h1>
_HEADING;

	$servername = "localhost";
	$username = "purduelo";
	$password = "flux-lux29";
	$dbname = "purduelo_main";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT name, date, location, info FROM tournaments ORDER BY date";
	$result = $conn->query($sql);
	
	echo <<< _TOURNAMENTS
		<div class="table-container">
			<div class="table-inner">
			<h1>Tournaments</h1>
			<table class="tournaments">
				<thead>
					<tr>
						<th class="name-column">Name</th>
						<th class="date-column">Date</th>
						<th class="location-column">Location</th>
						<th class="info-column">Info</th>
					</tr>
				</thead>
				<tbody>
_TOURNAMENTS;

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo "<tr>";
	    	echo "<td>" . $row["name"] . "</td>";
	        echo "<td>" . date("l F j, Y", strtotime($row["date"])) . "</td>";
	        echo "<td>" . $row["location"] . "</td>";
	        echo "<td>" . $row["info"] . "</td>";
	        echo "</tr>";
	    }
	}
	
	echo "</tbody>";
	echo "</table>";
	echo "</div>";
	echo "</div>";

	$sql = "SELECT date, location, time FROM meetings ORDER BY date";
	$result = $conn->query($sql);

	echo <<< _MEETINGS
		<div class="table-container">
			<div class="table-inner">
			<h1>Meetings</h1>
			<table class="meetings">
				<thead>
					<tr>
						<th class="date-column">Date</th>
						<th class="location-column">Location</th>
						<th class="time-column">Time</th>
					</tr>
				</thead>
				<tbody>
_MEETINGS;

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo "<tr>";
	        echo "<td>" . date("l F j, Y", strtotime($row["date"])) . "</td>";
	        echo "<td>" . $row["location"] . "</td>";
	        echo "<td>" . $row["time"] . "</td>";
	        echo "</tr>";
	    }
	}

	echo "</tbody>";
	echo "</table>";
	echo "</div>";
	echo "</div>";

	$conn->close();
?>

	</body>
</html>