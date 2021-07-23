<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Program 7</title>
      <link rel="stylesheet" href="styles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <script src="script.js"></script>
   </head>
   <body onload="startTime()">
      <div>
         <h1> The time from the local system is :
            <span id= "txt"></span>
         </h1>
         <?php
            date_default_timezone_set('Asia/kolkata');
            $today = date("H:i:s"); 
            ?>
         </br>
         </br></br></br>
        </div>
        <div>
         <h1>
            <?php echo "The time from the server is : " . $today;?>
         </h1>
      </div>
   </body>
</html>