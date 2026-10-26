<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nilai = $_POST["nilai"];

    if ($nilai > 70) {
        $hasil = "Lulus";
    } else {
        $hasil = "Remedial";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Nilai Ujian</title>
</head>

<body>

    <h2>Form Nilai Ujian</h2>

    <form method="post">

        Nama:
        <input type="text" name="nama">
        <br><br>

        Email:
        <input type="email" name="email">
        <br><br>

        Nilai Ujian:
        <input type="number" name="nilai">
        <br><br>

        <input type="submit" value="Kirim" name="proses">

    </form>

    <?php

    if (isset($hasil)) {
        echo "<h3>Hasil Ujian</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Nilai Ujian: $nilai <br>";
        echo "Hasil: $hasil";
    }

    ?>

</body>
</html>