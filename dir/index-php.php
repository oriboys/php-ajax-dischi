<?php
  $dischi = [
    [
      'titolo' => 'disco Uno',
      'anno' => '1992',
      'genere' => 'rock',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco due',
      'anno' => '1990',
      'genere' => 'pop',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco tre',
      'anno' => '1987',
      'genere' => 'rock',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco quattro',
      'anno' => '1980',
      'genere' => 'classica',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco cinque',
      'anno' => '2000',
      'genere' => 'rock',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco sei',
      'anno' => '2003',
      'genere' => 'indie',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco sette',
      'anno' => '2005',
      'genere' => 'indie',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco otto',
      'anno' => '2008',
      'genere' => 'pop',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco nove',
      'anno' => '1999',
      'genere' => 'rock',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'disco dieci',
      'anno' => '1963',
      'genere' => 'pop',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
  ];


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
