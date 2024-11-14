<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';
    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        
        $cekAnggota = "SELECT COUNT(*) AS total FROM anggota WHERE jabatan_id = '$id'";
        $run = mysqli_query($koneksi, $cekAnggota);

        if (mysqli_num_rows($run) > 0) {
            $hapusAnggota = "DELETE FROM anggota WHERE jabatan_id = (SELECT id FROM jabatan WHERE id = '$id');";
            mysqli_query($koneksi, $hapusAnggota);
        }

        $query = "DELETE FROM jabatan WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    } else if (!empty($_GET['anggota'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM anggota WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            $query2 = "DELETE FROM user WHERE id = '$id'";
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('warning', "Data Anggota Terhapus Tetapi Login Tidak Terhapus Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Anggota Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=anggota");
    }
}
?>