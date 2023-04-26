<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Museum Pass Webpage in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>Museum Pass</title>
  </head>
  <body>

    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  
    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">
   
      <!-- Heading -->
      <?php echo "<h1>Museum Pass</h1>" ?>

      <!-- Image -->
      <img src="./images/the-louvre.jpg" alt="The Louvre Museum in Paris, France">
      <br><br>

      <!-- Body text -->
      <?php echo "<p>Welcome to the museum! This web page will help you determine if you can get a discount for the price to enter the museum. Please enter the following information below:</p>" ?>
      <br>
   
      <!-- Form for user input -->
      <form action="./results.php" method="post" target="results">
        <label for="age">What is your age?</label>
        <input type="number" step="1" max="122" name="user-age" placeholder="Your age..."><br><br>
        <label for="day">What day of the week will you visit the museum?</label>
        <select id="day" name="day">
          <option value="Day of week">Day of week</option>
          <option value="Sunday">Sunday</option>
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
        </select><br><br>
        <input type="submit" id="button" value="Check!" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      </form>
      <br>
       
      <!-- iFrame -->
      <iframe name="results" id="results"></iframe>
      <br>
      <br>
    </main>
  </body>
</html>