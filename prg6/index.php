<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Program 6</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div>
         <?php 
            $file = 'count.txt'; 
            $count = strval(file_get_contents($file)); 
            file_put_contents($file, $count + 1); ?>
         <h1>
            <?php
               echo("You are visitor number :".$count); 
               ?>
         </h1>
      </div>
   </body>
</html>