<?php include 'database.php';?>
<?php
  //create select query
  $query = "SELECT * FROM shouts ORDER BY id";
  $shouts = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SHOUT IT!</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
  </head>
  <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>

                  <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                  <li class="shout">
                    <span><?php echo $row['time'] ?> - </span>
                        <strong><?php echo $row['user'].':' ?></strong>
                    <?php echo $row['message'] ?>
                  </li>
                <?php endwhile; ?>

                </ul>
            </div>

            <div id="input">
              <?php if(isset($_GET['error'])) : ?>
                  <div class="error">
                    <?php echo $_GET['error'];  ?>
                  </div>
              <?php endif; ?>
                <form class="" action="process.php" method="post">
                    <input type="text" name="user" value="" placeholder="Enter your name">
                    <input type="text" name="message" value="" placeholder="Enter A Message">
                    <br/>
                    <input class="shout-btn" type="submit" name="submit" value="Shout It Out">

                </form>
            </div>
        </div>
  </body>
</html>
