<?php

echo "<h4>SOFTWARE KARAOKE / KEY GENERATOR</h4>";

echo "<form action='' method='post'>";
echo "Silahkan Mbak lucinta luna dipencet tombol dibawah ";
echo "<input name='qty' type='hidden' placeholder='Inputkan Jumlah Digenerate' value='250'>";
echo "<br>";
echo "<br>";
echo "<button type='submit'>Generate 250 Serial Key</button>";

echo "</form>";

function generateRandomString($length = 4) { //function untuk generate random string degan digit sebanyak 4
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; //kasih tahu apa aja yg bisa dirandom
    $charactersLength = strlen($characters); //panjang variable characters
    $randomString = ''; //inialisasi random string kosong
    for ($i = 0; $i < $length; $i++) { //perulangan 4 kali
        $randomString .= $characters[rand(0, $charactersLength - 1)]; //sambung menyambung merandom string dari variable chracters hingga 0
    }
    return $randomString; //return hasil
}

function tes(){
   return generateRandomString().'-'.generateRandomString().'-'.generateRandomString().'-'.generateRandomString(); //format aja
}

function generate($jumlah){ //perulangan sejumlah berapa banyak digenerate | krn soal katanya harus 250 jadi udah static value di input name qty
  for($i = 0; $i < $jumlah; $i++){
    echo tes().'<br>';  
  } 
}


if (!empty($_POST)){ //validasi untuk cek ada post dan qty
$jumlah = $_POST['qty'];

}
else{
  $jumlah = 0;
}


echo generate($jumlah); //hasil serial number yang diharapkan
