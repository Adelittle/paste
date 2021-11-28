<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<script type="text/javascript" src="nicEdit.js"></script>
 <?php  
 $nama       = substr( str_shuffle("ASDFGHJKLZXCVBNMQWERTYUIOP0123456789asdfghjklzxcvbnmqwertyuiop"), 0, 6 ); 
 $namafile = "./s/$nama.txt";  
 $isi      = trim($_POST[isi]);  
 $file = fopen($namafile,"w");  
 fwrite($file,$isi);  
 fclose($file);  
 echo "<h2>Hasil Penyimpanan Data</h2>";  
 echo "<hr>";  
 echo "Hasil : <a href='$namafile'> $namafile </a>";  
 ?> 