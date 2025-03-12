<!DOCTYPE html>
<html>
<head>
<title>Unit 7 In-Class Exercise YourUCID</title>
</head>
<body>
<h1>My Golfing Team</h1>
<h4>Name: Chris Thayil</h4>
<h4>UCID: cjt66</h4>
<h4>Course and Section: IT-202-004 Internet Applications</h4>
<form name="games" action="Unit07Exercise_action_cjt66.php" method="get">
   <label>Golfer ID: </label>
   <input type="100" name="golferid">
   <br>
   <br>
   <input type="submit">
</form>
<br>
<?php
date_default_timezone_set("America/New_York");
echo "The date and time is " . date("D M j h:i:sa T Y");
?>
</body>
</html>