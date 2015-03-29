<!DOCTYPE html>
<html lang="en">
	<head>
    <title>PurdueLoL - Home</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
  </head>
  <body>
  <?php require_once($_SERVER['DOCUMENT_ROOT'].'/nav.php'); ?>

  <!-- Main jumbotron for a primary marketing message or call to action -->
   
        <!--h1>Purdue League of Legends Club</h1>
        <p>The Offical League of Legends Group of Purdue University</p>
      </div-->
      <div id="carousel-front" class="carousel slide" data-ride="carousel">
        <!-- Indicators 
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="/images/frontpage/teambuilder-wallpaper.jpg" alt="1st">
            <div class="carousel-caption">
              BEN SUX
            </div>
          </div>
          <div class="item">
            <img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xfa1/t31.0-8/1799945_10201726227064826_400255378_o.jpg" alt="2nd image">
            <div class="carousel-caption">
             CAM SUX
            </div>
          </div>
          <div class="item">
            <img src="/images/frontpage/3.jpg" alt="2nd image">
            <div class="carousel-caption">
             CAM SUX
            </div>
          </div>
        </div>

        <!-- Controls --> 
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Ordering T-Shirts</h2>
          <p>We host a variety of events including regular meetings, LCS Viewings, and Tournaments.
			 We welcome you to join us!</p>
          <p><a class="btn btn-default" href="/events/" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Join Us on Facebook!</h2>
          <p>Join the community on Facebook, as we discuss various League topics and answer questions.</p>
		  <p><a class="btn btn-default" href="https://www.facebook.com/groups/purduelol/" role="button">Check Us Here.</a></p>
       </div>
        <div class="col-md-4">
          <h2>Contact Us</h2>
          <p>We are always looking to improve! Contact us with ideas or suggestions to improve.</p>
          <p><a class="btn btn-default" href="/contact.html" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
