<!DOCTYPE html>
<html>
<head>
<title>Unit 7 Exercise cjt66</title>
</head>
<body>
<h1>My Golfing Team</h1>
<h4>Name: Chris Thayil</h4>
<h4>UCID: cjt66</h4>
<h4>Course and Section: IT-202-004 Internet Applications</h4>
<?php
error_log("\$_GET" . print_r($_method, true));
$db = new mysqli("sql1.njit.edu",'cjt66','cj#NJIT2&27','cjt66', 3306);
$golferid = isset($_GET['golferid']) ? intval($_GET ['golferid']) : 0;

$query = "SELECT golferid, name, address, phone FROM golfers WHERE golferid = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("i", $golferid);
$stmt->execute();
$result = $db->query($query);

if ($result == false) {
   echo "ERROR:" . $db->errno . ' ' . $db->error;
}
if (mysqli_num_rows($result) > 0) {
   $row = $result->fetch_array(MYSQLI_ASSOC);
 ?>
   <p><u><b>Golfer Information</b></u><br>
     ID: <?php echo $row['golferid']; ?><br>
     Name: <?php echo $row['name']; ?><br>
     Address: <?php echo $row['address']; ?><br>
     Phone Number: <?php echo $row['phone']; ?></p>
   <table>
     <caption style="white-space: nowrap;"><u><b>Game Information</b></u></caption>
     <tr>
       <th>Game</th>
       <th>Score</th>
     </tr>
     <?php
     do {
     ?>
       <tr>
         <td><?php echo $row['game']; ?></td>
         <td><?php echo $row['score']; ?></td>
       </tr>
     <?php
     } while ($row = $result->fetch_array(MYSQLI_ASSOC));
     ?>
   </table>
 <?php
 } else {
   echo "<h2>There are no scores for this golferid</h2>\n";
 }
if ($result) {
   echo "<h2>New game's score successfully displayed</h2>\n";
} else {
   echo "<h2>Sorry, there was a problem displaying that golfer's games</h2>\n";
}
date_default_timezone_set("America/New_York");
echo "The date and time is " . date("D M j h:i:sa T Y");
?>
</body>
</html>