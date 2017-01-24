<?
date_default_timezone_set('America/Chicago');
$display_name = 'Ben Johnson'
?>
<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title>PHP Basics at Treehouse by <?php echo $display_name?></title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div id="wrap">
        <section class="sidebar text-center">
          <div class="avatar">
            <img src="img/logo.png" alt="Alt For Image">
          </div>
          <h1><?php echo $display_name;?></h1>
          <p>Contact:<br />
          <a href="mailto:">EMAIL</a></p>
          <hr />
          <ul class="social">
            <li><a href=""><span class="icon twitter"></span></a></li>
          </ul>
          <hr />
          <p>Today: D, d M Y</p>
        </section>
        <section class="main">
          <h1>My First PHP Page</h1>

          <h2>Unit Conversion</h2>

          <hr />

          <h2>Daily Exercise</h2>
        </section>
    </div>
    <section class="footer text-center">
      &copy; <?php echo date('Y')?><?php echo $display_name ?>
    </section>
  </body>
</html>
