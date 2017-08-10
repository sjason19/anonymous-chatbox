<?php include 'database.php'; ?>
<?php
//Create Select Query
$query = "SELECT * FROM messages ORDER BY id ASC";
$messages = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Anonymous Chatbox</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <h1>Anonymous Chatbox</h1>
      </header>
      <div id="messages">
        <ul>
          <?php while($row = mysqli_fetch_assoc($messages)) : ?>
            <li class ="username"><strong><?php echo $row['user'] ?></strong> <span style="font-size: 10px"><?php echo $row['time'] ?> </span> </li>
            <li class ="message"><?php echo $row['message'] ?></li>
          <?php endwhile; ?>
        </ul>
    </div>
    <div id="input">
      <?php if(isset($_GET['error'])) : ?>
        <div class="error"><?php echo $_GET['error']; ?></div>
      <?php endif; ?>
      <form method="post" action="process.php">
        <input type="text" name="user" placeholder="Enter Your Name"/>
        <input type="text" name="message" placeholder="Enter A Message"/>
        <br/>
        <input class="message-btn" type="submit" name="submit" value="Send Message"/>
      </form>
    </div>
  </body>
</html>
