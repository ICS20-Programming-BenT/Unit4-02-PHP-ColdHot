<?php

  // Define temperature and message variables & temperature limit constant
  $temperature = floatval($_POST["temp-input"]);
  define ("TEMP_LIMIT", 15);
  $message = "";

  //if: if temperature is 15 degrees or under
  if ($temperature <= TEMP_LIMIT) {
    $message = "It is chilly out! I suggest you wear some kind of jacket to stay warm.";
  }
    
  //else: if temperature is more than 15 degrees
  else {
    $message = "It is pretty hot out! You might want to wear sunscreen or a baseball cap.";
  }

  //displaying the correct message to the screen
  echo "$message";
?>
