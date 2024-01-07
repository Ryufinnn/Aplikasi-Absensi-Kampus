
<?php
	$host	 = "localhost";
	$user	 = "root";
	$pass	 = "";
	$dabname = "absenkampusdb";
	
	$foldername="absenkampus";
	$conn = mysqli_connect( $host, $user, $pass, $dabname) or die('Could not connect to mysql server.' );
	$baseurl="http://localhost/".$foldername."/";
	
	$nama_usaha="UNIVERSITAS";
	$nama_aplikasi="APLIKASI ABSENSI BERBASIS WEB";
	$path_web=$_SERVER['DOCUMENT_ROOT']."/".$foldername."/";
	$label_footer="Copyright &copy; Bonsai Teknologi Informasi ".date("Y");
?>