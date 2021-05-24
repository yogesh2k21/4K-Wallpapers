<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
  </head>
  <body>
    <div class="infobox">
      <img src="../Images\message.png" class="png">
      <h1>Contact Us</h1>
      <form method="POST" action="../PHP/contactus.php">
        <input type="name" name="name" placeholder="Enter your name" required>
        <br><br>
        <input type="email" name="email" placeholder="Enter your email" required>
        <br><br>
        <input type="text" name="msg" placeholder="Text message" required>
        <br><br>
        <input type="submit" name="contactus" value="Submit">
        <br>
      </form>
    </div>
  </body>
</html>
