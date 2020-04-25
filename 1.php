<?php

echo "<h4>SOFTWARE KARAOKE / KEY GENERATOR</h4>";

echo "<form action='' method='post'>";
echo "Silahkan Mbak lucinta luna dipencet tombol dibawah ";
echo "<input name='qty' type='hidden' placeholder='Inputkan Jumlah Digenerate' value='250'>";
echo "<br>";
echo "<br>";
echo "<button type='submit'>Generate 250 Serial Key</button>";

echo "</form>";

function generateRandomString($length = 4) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString; 
}

function tes(){
   return generateRandomString().'-'.generateRandomString().'-'.generateRandomString().'-'.generateRandomString();
}

function generate($jumlah){
  for($i = 0; $i < $jumlah; $i++){
    echo tes().'<br>';  
  } 
}


if (!empty($_POST)){
$jumlah = $_POST['qty'];

}
else{
  $jumlah = 0;
}


echo generate($jumlah);