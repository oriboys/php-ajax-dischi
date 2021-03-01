<?php
  $dischi = [
    [
      'titolo' => 'film Uno',
      'anno' => '1992',
      'genere' => 'azione',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film due',
      'anno' => '1990',
      'genere' => 'thriller',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film tre',
      'anno' => '1987',
      'genere' => 'azione',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film quattro',
      'anno' => '1980',
      'genere' => 'avventura',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film cinque',
      'anno' => '2000',
      'genere' => 'azione',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film sei',
      'anno' => '2003',
      'genere' => 'romantico',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film sette',
      'anno' => '2005',
      'genere' => 'romantico',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film otto',
      'anno' => '2008',
      'genere' => 'thriller',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film nove',
      'anno' => '1999',
      'genere' => 'azione',
      'copertina' => "https://pbs.twimg.com/profile_images/841918322954362881/iHwiVw5Q.jpg"
    ],
    [
      'titolo' => 'film dieci',
      'anno' => '1963',
      'genere' => 'thriller',
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
