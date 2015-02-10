<?php
	function createNavbar() {
		echo <<< _NAVBAR
			<div class="navbar-container">
				<ul class="navbar">
					<li class="navbar-logo">
						<a href="http://www.purduelol.com/cam/index.php">
							<img src="/cam/img/navlogo_gold.png">
						</a>
					</li>
					<!-- <li class="navbar-item"><a href="#">Contact</a></li> -->
					<!-- <li class="navbar-item"><a href="#">Officers</a></li> -->
					<li class="navbar-item"><a href="http://www.facebook.com/groups/purduelol" target="_blank">Facebook</a></li>
					<li class="navbar-item"><a href="http://www.purduelol.com/cam/php/events.php">Events</a></li>
					<!-- <li class="navbar-item"><a href="#">About</a></li> -->
					<li class="navbar-item"><a href="http://www.purduelol.com/cam/index.php">Home</a></li>
				</ul>
			</div>
_NAVBAR;
	}
?>