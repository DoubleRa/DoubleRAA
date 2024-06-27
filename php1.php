<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Process form submission
        $nilai = isset($_POST['nilai']) ? (int)$_POST['nilai'] : 0;
        $hasil = "";

        if ($nilai >= 80 && $nilai <= 100) {
            $hasil = "A";
        } else if ($nilai >= 70 && $nilai <= 79) {
            $hasil = "B";
        } else if ($nilai >= 60 && $nilai <= 69) {
            $hasil = "C";
        } else if ($nilai >= 50 && $nilai <= 59) {
            $hasil = "D";
        } else if ($nilai >= 0 && $nilai <= 49) {
            $hasil = "E";
        } else {
            $hasil = "Nilai tidak valid";
        }

        echo "<h2>Hasil konversi:</h2>";
        echo "<p>Nilai Anda: $nilai</p>";
        echo "<p>Hasil konversi: $hasil</p>";
    }
    ?>
    <h2>Program Konversi Nilai</h2>
    <form method="post">
        <label for="nilai">Masukkan nilai Anda:</label><br>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>
        <button type="submit">Konversi</button><br><br>
    </form>
</body>
</html>