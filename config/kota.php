<?php
require_once "koneksi.php";
$sqltampil="SELECT * FROM kota WHERE id_perusahaan='$_GET[perusahaan]' ORDER BY nama_kota";
$tampil = mysqli_query($connect, $sqltampil);
$jml=mysqli_num_rows($tampil);
if($jml > 0){
    echo"<select name='kota' class='form-control'>
     <option value='0' selected>- Pilih Kota -</option>";
     while($r=mysqli_fetch_array($tampil)){
         echo "<option value=$r[id_kota]>$r[nama_kota]</option>";
     }
     echo "</select>";
}else{
    echo "<select name='kota' class='form-control'>
     <option value=0 selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option
     </select>";
}

?>