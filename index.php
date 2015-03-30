<!DOCTYPE html>
<html lang="en">
	<head>
    <title>PurdueLoL - Home</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
  </head>
  <body>
  <?php require_once($_SERVER['DOCUMENT_ROOT'].'/nav.php'); ?>

    <div id="carousel-front" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/images/frontpage/teambuilder-wallpaper.jpg" alt="1st">

        </div>
        <div class="item">
          <img style="margin-top:-20%;" src="/images/frontpage/signups.jpg" alt="2nd image">
        </div>
        <div class="item">
          <img src="/images/frontpage/akali_vs_baron.jpg" alt="2nd image">
        </div>
      </div>

      <!-- Controls 
      <a class="left carousel-control" href="#carousel-front" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-front" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>--> 
    </div>
    <script>
      $(document).ready(function(){
           $("#carousel-front").carousel({
               interval : 6000,
               pause: false
           });
      });
    </script>

    <div class="container">
      <div class="row" class="page-header" style="text-align:center">
        <h1 id="heading">Purdue League of Legends Group<br/>
          <small>The Offical League of Legends Club of Purdue University</small>
        </h1>      
      </div>
      <br/>

      <div class="row">
        <div class="col-md-4">
          <img class="img-responsive" src="/images/frontpage/pro_riven_tshirts.jpg"/>
          <h2>Ordering T-Shirts</h2>
          <p>
            We are currently taking orders for T-Shirts! Stop by at one of the meetings
            to place your order. Awesome design by Alethia Jong, see more of her stuff at her 
            <a href="http://chiroyo.deviantart.com/">DeviantArt</a>!                          
          </p>
        </div>
        <div class="col-md-4">
          <img class="img-responsive" src="/images/frontpage/meetings.jpg"/>
          <h2>Community Focused</h2>
          <p>We are always looking to improve! We are always looking for a the
          community's response. Don't hesitate, email us today!</p>
          <p><a class="btn btn-default" href="/contact.html" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <img class="img-responsive" alt="Created by Nestkeeper" src="/images/frontpage/boards-wallpaper.jpg"/>
          <h2>Join Us on Facebook!</h2>
          <p>Join the community on Facebook!, as we discuss various League topics 
          and answer questions. Share that recent game you had,
          that new theory you thought of, or perhaps you drew something awesome,
          we would love to see it there.</p>
		      <p>
            <a class="btn btn-default" href="https://www.facebook.com/groups/purduelol/" role="button">Check Us Here.</a>
          </p>
       </div>
      </div>
    </div> 

    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php'); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
