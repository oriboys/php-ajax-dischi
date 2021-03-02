<?php
include 'dir/db.php';

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>

   <?php foreach ($dischi as $disco) {?>
        <img src="<?php echo $disco['copertina'] ?>" alt="">
        <p><?php echo $disco['titolo'] ?></p>
        <p><?php echo $disco['anno'] ?></p>
        <p><?php echo $disco['genere'] ?></p>
   <?php } ?>

 </body>
 </html>
