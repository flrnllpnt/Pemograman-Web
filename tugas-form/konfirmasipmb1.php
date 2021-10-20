<!DOCTYPE html>
<html lang="en">
<body>

<?php
    include "koneksi.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $jalur_penerimaan = $nama_mahasiswa = $ttl = $nik = $jk = $agama = $status = $kode_pos = $no_hp = $email = $asal_sklh = "";
        $kota_sklh = $provinsi = $jurusan_sklh = $tahun_lls = $biaya = $nama_ayah = $nama_ibu = $alamat_ortu = $kode_posortu = $no_hportu = "";
        $pendidikan_ayah = $pendidikan_ibu = $status_ayah = $status_ibu = $pekerjaan_ayah = $pekerjaan_ibu = $penghasilan_ayah = $penghasilan_ibu = $program_studi = "";

        $sql="insert into pendaftaran (jalur_penerimaan,nama,ttl,nik,jk,agama,status,alamat,kode_pos,no_hp,email,asal_sklh,kota_sklh,provinsi,jurusan_sklh,tahun_lls,biaya,nama_ayah,nama_ibu,alamat_ortu,kode_posortu,no_hportu,pendidikan_ayah,pendidikan_ibu,status_ayah,status_ibu,pekerjaan_ayah,pekerjaan_ibu,penghasilan_ayah,penghasilan_ibu,program_studi) values
		('$jalur_penerimaan','$nama_mahasiswa','$ttl','$nik,'$jk','$agama','$status','$kode_pos','$no_hp','$email','$asal_sklh',
        '$kota_sklh','$provinsi','$jurusan_sklh','$tahun_lls','$biaya','$nama_ayah','$nama_ibu','$alamat_ortu','$kode_posortu','$no_hportu',
        '$pendidikan_ayah','$pendidikan_ibu','$status_ayah','$status_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$penghasilan_ayah','$penghasilan_ibu','$program_studi'
        )";
    //Mengeksekusi/menjalankan query diatas
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
    if ($hasil) { 
        echo "<div class='alert alert-success'> Selamat $nama_mahasiswa anda telah berhasil mendaftar.</div>"; 
    }
    else {
        echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
    }
}
    ?>

</body>