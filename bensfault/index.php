<html>
  <head>
    <title>Ben's Fault Counter</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <style>
      body {
        margin:0px;
        overflow: hidden;
      }
      
      #container {
          font-family: 'Oswald', sans-serif;
          text-align:right;
          padding-right:2%;
          padding-top:1%;
          position:relative;
          height:97.9%;
          width:100%;
      }
      
      h1 {
        font-weight:bold;
        font-size:14em;
        margin:0px;

        position:absolute;
        bottom:0;
        right:5%;
      }
      
      header {
        padding-right:3%;
      }
      
      h2 {
        margin:0px;
        margin-top: -1.5%;
        font-size:6em;

      }
      
      h3 {
        margin:0px;
        font-size:3em;
      }
      
      #sorry {
        position:absolute;
        left:0;
        bottom:0;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <header>
        <h3>It has been</h3>
        <h2>Ben's fault</h2>
      </header>
      <h1 id="count"></h1>
      <div id="sorry">Sorry, Ben.</div>
    </div>
    <script>
      jQuery(document).ready(function() {
        get_faults();
        setInterval(get_faults, 5000);
      });
      
      jQuery("body").mousedown(function(e){ 
        e.preventDefault();
      });
      
      $("body").click(function(e) {
         send_fault();
      });
      
      function get_faults() {
		$.ajax( {
			type: "POST",
			url: "faults.txt",
			context: document.body,
			cache: false,
			success: function(data) {
				update(data);
			}
		}).fail(function() {});
      }
      
      function send_fault() {
        $.get( "fault.php", function(data){
            //update(data)
        }).fail(function() {
            $( "#count" ).html( parseInt($("#count").text(), 10) + 1)
        });
        get_faults();
      }
      
      function update( count ) {
          $( "#count" ).html( count.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " shits");
      }
    </script>
  </body>
</html>