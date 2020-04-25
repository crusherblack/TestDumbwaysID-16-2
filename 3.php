<?php

echo "<h4>APLIKASI GAMBAR PATTERN PERSEGI</h4>";
echo "<form action='' method='post'>";
echo "Yukk generate pattern persegi yang ada silangnya";
echo "<br>";
echo "<input name='qty' type='number' placeholder='Inputkan Angka'>";
echo "<br>";
echo "Kami hanya menerima bilangan ganjil, meski dikasih genap ya maaf ditolak";
echo "<br>";
echo "<button type='submit'>Submit</button>";

echo "</form>";

function cetak_gambar($n){    
    for ((int) $i = 1; $i <= $n; $i++) {
            for ((int) $j = 1; $j <= $n; $j++) {
                if ($i === $j || $j === ($n - $i) + 1) {
                    echo '*';
                } else {
                    echo '=';
                }
                echo ' ';
            }
            echo ' <Br>';
        }
}

if (!empty($_POST)){
$jumlah = $_POST['qty'];
	if ($jumlah % 2 !== 0){
    echo cetak_gambar($jumlah);
	}else {
		echo "$jumlah Merupakan Bilangan Ganjil / Sorry gak bisa gambar"; 
	}

}
else{
  $jumlah = 0;
}