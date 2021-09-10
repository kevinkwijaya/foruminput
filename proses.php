<?php
    if(isset($_POST['input'])){
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        echo "Nama Saya $nama <br>";
        echo "Mengambil Program Studi $prodi";
    }
?>