<?php
    require 'function.php';

    // Variable untuk menampung id dari database
    $id = $_GET["id"];

    if(hapusData($id) > 0){
        echo "<script>
                alert('Data berhasil dihapus');
                document.location.href='index.php';
                </script>";

    } else {
        echo "<script>
                alert('Data gagal dihapus');
                document.location.href='index.php';
                </script>";
    }
?>