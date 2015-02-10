<!DOCTYPE html>
<html lang="en">
<head>
    <title>PurdueLoL - About</title>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php'); ?>
  </head>
  <body>
  <?php require_once($_SERVER['DOCUMENT_ROOT'].'/nav.php'); ?>

    <div class="container">
		<h1>About Us</h1><br>
        <!--
            0. About?
            1. Meetings
            2. Tournaments
            3. LCS Viewing Parties
        -->

        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <div class="panel-heading" id="panel-item">
                        <p style="float:left; font-size:2em;">What is the Purdue League of Legends Club?</p>
                    </div>
                </a>
		<div id="collapseOne" class="panel-collapse collapse">
			<div class="panel-body">
				<p style="font-size:1.5em;">
				<img src="images/officers.jpg" style="float:left; margin-right:1em;" width="629" height="392">
The Purdue League of Legends Club strives to create a community that involves all League of Legends players at Purdue. We work hard to provide you with everything you need so that you can get down to what you do best: Playing some League of Legends. Whether it's venturing out to our weekly meetings, battling your friends in one of our tournaments, or relaxing and watching the pros at an LCS viewing party (soon to come?!?), PurdueLoL has something to offer you.
				</p>
			</div>
		</div>
	      </div>
            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="panel-heading" id="panel-item">
                        <p style="float:left; font-size:2em;">Meetings</p>
                    </div>
                </a>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
				<p style="font-size:1.5em;">
					<img src="images/meetings.jpg" style="float:right; margin-left:0.5em;">
					We try to have a regular PurdueLoL meeting every weekend during the fall and spring semester. Our meetings are a great way to meet others on campus that play League of Legends. We supply the room, the power, and the networking, so bring your rig, play some League, and have some fun.
				</p>
			</div>
		</div>
	    </div>
	    <div class="panel panel-default">
		    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
			    <div class="panel-heading" id="panel-item">
				    <p style="float:left; font-size:2em;">Tournaments</p>
			    </div>
		    </a>
		    <div id="collapseThree" class="panel-collapse collapse">
			    <div class="panel-body">
				    <p style="font-size:1.5em;">
					    <img src="images/tournaments.jpg" style="float:left; margin-right:1em;" width="629" height="392">
					    Want to compete to be one of the best teams on campus? Not too competitive but still want some competition? No matter how ambitous you are, we have a tournament for you. Whether it's our big semester tournament or one of our smaller tournaments held at our weekly meetings, everyone has a shot to compete and win it all. Check out our Tournaments tab for information on upcoming tournaments.
				    </p>
			    </div>
		    </div>
	    </div>
	    <div class="panel panel-default">
		    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
			    <div class="panel-heading" id="panel-item">
				    <p style="float:left; font-size:2em;">LCS Viewing Parties</p>
			    </div>
		    </a>
		    <div id="collapseFour" class="panel-collapse collapse">
			    <div class="panel-body">
				    <p style="font-size:1.5em;">
					    <img src="images/lcs.jpg" style="float:right; margin:0.5em" width="629" height="392">
					    While it is still in the works, we plan on holding some LCS viewing parties throughout the fall and spring semester. We will make announcements about when they will take place as soon as possible. 
				    </p>
			    </div>
		    </div>
	    </div>
        </div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
