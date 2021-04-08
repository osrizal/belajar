<?php
$conn= mysqli_connect("localhost", "root", "", "belajar");

if(isset($_POST["kirim"])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $jurusan = $_POST['jurusan'];
    $biografi = $_POST['biografi'];

    $query = "INSERT INTO siswa(nama, jk, jurusan, biografi) value ('$nama', '$jk', '$jurusan', '$biografi')";
    $result = mysqli_query($conn, $query);

}
$tampil= "SELECT * FROM siswa";
$rows=[];
$result = mysqli_query($conn, $tampil);

while($row= mysqli_fetch_assoc($result)){
    $rows[] = $row;

}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post"> 
<label for="">nama</label>
<input type="text" nama ="nama">
<br/>

<label for="">jenis kelamin</label>
<input type="text" >
<label for="">laki-laki</label>
<input type="radio" name="jk" id="" value = "laki-laki">
<label for="">perempuan</label>
<input type="radio" name="jk" id="" value = "perempuan">
</br>

<label for="">Jurusan</label>
<label for="">AKUNTANSI</label>
<input type="radio" name="jurusan" id="" value = "akuntansi">
<label for="manajemen">Manajemen</label>
<input type="radio" name="jurusan" id="" value = "manajemen">
<label for="">Ekonoi Pembangunan</label>
<input type="radio" name="jurusan" id="" value = "ekonomi pembangunan">
</br>



<label for="">Biografi</label>
<textarea name="" id="" cols="30" rows="10"></textarea>
<br/>

<button type="submit" name ="kirim">kirim</button>
</form>
<table>
<thead>
<tr>
<th>nama</th>
<th>jurusan</th>
<th>jenis kelamin</th>
<th>biografi</th>
<tr>
</thead>
<tbody>
<?php foreach($rows as $r) :?>
    <tr>
    <td> <?php echo $r['nama'] ?></td>
    <td> <?php echo $r['jurusan'] ?></td>
    <td> <?php echo $r['jk'] ?></td>
    <td> <?php echo $r['biografi'] ?></td>

</tr>

</th>
</tr>
<?php endforeach?>
</tbody>

</table>
</body>
</html>
