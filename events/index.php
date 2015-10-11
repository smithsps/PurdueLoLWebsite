<!DOCTYPE html>
<html lang="en">
<head>
    <title>PurdueLoL - Events</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
  </head>
  <body>
  <?php require_once($_SERVER['DOCUMENT_ROOT'].'/nav.php'); ?>

	<div class="container">
	  <div class="page-header">
	    <h1>Upcoming Events</h1>
	  </div>
	  
	  <h3>Tournaments</h3>
	  <table id="tourneyTable" class="table table-condensed">
	    <thead>
	      <tr>
		<th>Date</th>
		<th>Event</th>
		<th>Location</th>
		<th>Details</th>
	      </tr>
	    </thead>
	    <tbody>      
	      <tr href="/events/ChampionshipVII.php">
		<td>November 7, 2015</td>
		<td>PurdueLoL Championship VII</td>
		<td>STEW 214</td>
		<td>Details</td>
	      </tr>
	    </tbody>
	  </table>
	  
	  <h3>Meetings</h3>
	  <table class="table table-condensed">
	    <thead>
	      <tr>
		<th>Date</th>
		<th>Meeting</th>
		<th>Location</th>
		<th>Details</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	      	<td>October 17, 2015</td>
	      	<td>Weekly Meeting</td>
	      	<td>STEW 214</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>October 24, 2015</td>
	      	<td>Weekly Meeting</td>
	      	<td>STEW 214</td>
	      	<td></td>
	      </tr>
	    </tbody>
	  </table>
	</div>
    <script>
      jQuery(document).ready(function($) {
	    $("#tourneyTable tbody tr").click(function() {
		  window.document.location = $(this).attr("href");
	    });
      });
    </script>

  <?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>    
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
