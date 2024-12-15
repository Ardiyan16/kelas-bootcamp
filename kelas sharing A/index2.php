<?php 
 // mencetak segitga bintang 1
$bintang = '';

for($a = 0; $a < 10; $a++) {
for($i = 0; $i < $a; $i++) {
  $bintang .= '*';
}
$bintang  .= "\n";
}

"<br>";
// mencetak segitga bintang 2

$bintang1 = '';

for($b = 0; $b < 10; $b++) :
  for($j = 10; $j > $b; $j--) {
    $bintang1 .= '*';
  }
  $bintang1 .= "\n";
endfor;

$bintang2 = '';

for($y = 0; $y < 16; $y++) {
  if ($y < 8) {
  for($k = 0; $k < $y; $k++) {
    $bintang2 .= '*';
  }
}else {
    for($n = 15; $n >= $y; $n--) {
    $bintang2 .= '*' ;
    }
  }
  $bintang2 .= "\n";

}


$nameKelas = [
  "Kelas 1" => [
    "Rizky",
    "Rizka",
    "Rizki",
    "Rozy"
  ],

  "Kelas 2"  => [
    "gbdff",
    "Asds",
    "Rbdb",
    "mjtgh"
  ]
  ];
$semuaNama = [];

  // foreach ( $nameKelas as $names => $key) {
  //   foreach(  $key as  $value) {
  //     $semuaNama[] = $value;
      
  //   }
  // }
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
        <td> <pre><?php echo $bintang;?> </pre></td>
        <td> <pre><?php echo $bintang1;?> </pre></td>
        <td> <pre><?= $bintang2;?> </pre></td>
      </tr>
    </tbody>
  </table>
<?php
  foreach($nameKelas as $key => $value) {
    foreach ($value as $name) {
    ?>
    <table class="table-group-divider">
  <tbody>
    <tr>
      <th scope="row">
      <td><?= $name;?></td>
      </th>
    </tr>
  </tbody>
</table>





<?php
    } }
  ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
