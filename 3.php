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

function cetak_gambar($n){   //function dijalankan berdasrkan parameter jumlah yang dikirim 
    for ((int) $i = 1; $i <= $n; $i++) { //lakukan perulangan sebanyak n untuk variable i
            for ((int) $j = 1; $j <= $n; $j++) { //lakukan perulangan sebanyak n untuk variable j
                if ($i === $j || $j === ($n - $i) + 1) { //jika variable i dan j sama atau variabel j sama dengan (jumlah - i [sekarang]) + 1 maka
                    echo '*'; //tampilkan bintang
                } else {
                    echo '='; //tampilkan =
                }
                echo ' '; //spasi aja
            }
            echo ' <Br>'; //jika udah loop sebanyak jumlah pindah ke baris baru
        }
}

if (!empty($_POST)){ //ngecek ada request post atau tidak
$jumlah = $_POST['qty']; //jika ada ambil value dari requst qty
	if ($jumlah % 2 !== 0){ //cek ganjil
    echo cetak_gambar($jumlah);
	}else { //genap
		echo "$jumlah Merupakan Bilangan Ganjil / Sorry gak bisa gambar"; 
	}
}
else{
  $jumlah = 0; //0
}
