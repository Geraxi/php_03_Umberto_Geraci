<?php


$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
  [
    'oscura',
    'era',
    89,
    [
    'mezzo',
     'E'
    ],
  'ritrovai',
  'per'
  ],
  'diritta'
  ];
  
  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
      'Virgilio',
      'Favore',
      'favore',
      ['fortuna']
    ],
   'fine' => '!'
  ];

  $words1[]= 'Nel';
  $words2[]='cammin';
  $words1[]='selva';
  $words1[]='di';
  $words1[]='una';
  $words1[]='che';
  $words1[]='la';
  $words1[]='via';
  $words1[]='nostra';
  $words1[]='vita';
  $words1[]='chè'; 
  $words1[]='smarrita';

  print_r($words1);
  print_r($words2);

  $results= $words1[8] . " " . $words1[6][3][0] . " " . $words1[10] . " " . $words2[0] . " " . $words1[10]  . " " . $words1[15] . " " . $words1[16] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[11] . " " . $words1[9] . " " . $words1[6][0] . " " . $words1[17] . " " . $words1[13] . " " .                $words1[7] . " " . $words1[14] . " " . $words1[6][1] . " " . $words1[18] . "\n";
  
  echo $results;
