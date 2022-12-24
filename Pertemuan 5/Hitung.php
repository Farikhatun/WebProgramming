<center>
	<h1>Kalkulator Sederhana</h1>
    <hr>
<?php  
if(isset($_POST['submit'])){
	$bil1 = $_POST['bilangan1'];
  	$bil2 = $_POST['bilangan2'];
  	$operasi = $_POST['operasi'];
	
	if($operasi){
		if($bil1 == "" || $bil2 == ""){
			?> <script>alert("Nilai nya belum diisi!"); </script> <?php
		}elseif($operasi == '+'){
			$hasil = $bil1 + $bil2;
			echo "$bil1 + $bil2 = ".$hasil;
   		}elseif($operasi == '-'){
			$hasil = $bil1 - $bil2;
			echo "$bil1 - $bil2 = ".$hasil;
		}elseif($operasi == '*'){
			$hasil = $bil1 * $bil2;
			echo "$bil1 x $bil2 = ".$hasil;
		}elseif($operasi == '/'){
			$hasil = $bil1 / $bil2;
			echo "$bil1 / $bil2 = ".$hasil;
		}
		elseif($operasi == '^'){
			$hasil = $bil1 ** $bil2;
			echo "$bil1 ^ $bil2 = ".$hasil;
		}
	}
}
?>
</center>