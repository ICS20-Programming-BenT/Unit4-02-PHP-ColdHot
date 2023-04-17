<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Temperature Webpage with PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
  
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-deep_purple.min.css" />
  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
  
    <!-- Web page title -->
    <title>Temperature Evaluation with JavaScript</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Container for web page content -->
    <main style = "padding-left:20px; padding-right:20px;">
      
    <!-- Header -->
    <?php echo "<h1>Temperature Evalutaion</h1>"; ?>

    <!-- Image -->
    <center>
      <img src="./images/hot-or-cold.png" alt="Hot vs cold">
    </center>

    <!-- Body text -->
    <?php
      echo "<h3>Is it hot or cold?</h3>";
      echo "<p>It can be difficult to judge whether the temperature outside is cold or hot. As such, I have created this web page that will tell you which it is, and will provide suggestions for what to wear.</p>";
    ?>

    <!-- User Input form -->
    <?php echo "<h3>Your Input:</h3>"; ?>
    <form action="./results.php" method="post" target="results">
      <label for="temp-input">Enter the temperature in degrees Celsius:</label>
      <input type="number" step="0.01" name="temp-input" placeholder="Degrees"><br><br>
      <input type="submit" id="button" value="Evaluate temperature!" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    </form>
    
    <!-- iFrame -->
    <iframe name="results" id="results"></iframe>
  </body>
</html>