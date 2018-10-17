<form action="koneksi.php" method="POST">
  <center><h1> Pendataan Mahasiswa</h1>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="nama" name="nama" maxlength="35" placeholder="Nama" required="silahkan mengsisi nama"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td><input type="number" name="nim" maxlength="10" placeholder="Masukkan NIM" required="silahkan mengsisi nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki<br>
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
			</td>
		</tr>
    <tr>
      <td>Program Studi</td>
      <td><select name="programstudi" id="programstudi">
            <option value="D3 MI">D3 MI</option>
            <option value="D3 IF">D3 IF</option>
            <option value="D3 Perhotelan">D3 PERHOTELAN</option>
            <option value="D3 KA">D3 KA</option>  
            <option value="D3 SISMUL">D4 SISMUL</option>  
        </select>
		<tr>
			<td>Fakultas</td>
			<td><select name="fakultas" id="fakultas">
					<option value="FKB">FKB</option>
  					<option value="FIT">FIT</option>
  					<option value="FIK">FIK</option>
  					<option value="FEB">FEB</option>
  					<option value="FTE">FTE</option>	
  			</select>
  		</tr>
    <tr>
      <td>Asal</td>
      <td><input type="text" name="asal">
    <tr>
  		<tr>
  			<td>Motto</td>
  			<td><textarea name="motto" rows="5" cols="40"></textarea></td>
  		</tr>
    <td><input type="submit" name="submit" value="send">
  	


<?php
if (isset($_POST['submit'])) {
   $nama					 =$_POST['nama'];
   $nim				     =$_POST['nim'];
   $jeniskelamin	 =$_POST['jeniskelamin'];
   $programstudi	 =$_POST['programstudi'];
   $fakultas			 =$_POST['fakultas'];
   $asal				   =$_POST['asal'];
   $motto			     =$_POST['motto'];
   $Error = array();
   if (strlen($_POST['nama'])<=35) {
    $error['nama']=="nama harus max 35";
   }if(strlen($_POST['nim'])<=10){
    $error['nim']=="nim max 10";
   }if (empty($jeniskelamin)) {
    $error['jeniskelamin']=="jeniskelamin tidak boleh kosong";
   }if (empty($programstudi)) {
    $error['programstudi']=="programstudi tidak boleh kosong";
   }if (empty($fakultas)) {
    $error['fakultas']=="fakultas tidak boleh kosong";
   }if (empty($asal)) {
    $error['asal']=="asal tidak boleh kosong";
   }if (empty($motto)) {
    $error['motto']=="motto tidak boleh kosong";
   
}
}
?>  