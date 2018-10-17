<?php
 $hostname   = "localhost";
 $username = "root";
 $pass     = "";
 $db       = "inputanmahasiswa";
 $con     = new mysqli($hostname, $username, $pass, $db);
 if($con==false){
  die("koneksi gagal". $con->connect_error);
 }
  if (isset($_POST['submit'])) {
   $nama           =$_POST['nama'];
   $nim            =$_POST['nim'];
   $jeniskelamin   =$_POST['jeniskelamin'];
   $programstudi   =$_POST['programstudi'];
   $fakultas       =$_POST['fakultas'];
   $asal           =$_POST['asal'];
   $motto          =$_POST['motto'];
 
 $sql="INSERT INTO inputanmahasiswa(nama,nim,jeniskelamin,programstudi,fakultas,asal,motto) VALUES ('$nama','$nim','$jeniskelamin','$programstudi','$fakultas','$asal
 ','$motto')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk <a href = delete.php></a>";
   }else{
    echo "Database Gagal";
   }
   }
 ?>

