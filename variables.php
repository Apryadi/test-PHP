<?php
$nama = "Apryadi";
$segs = "Male";
$GPA = 76.60;
$isStudent = TRUE;

if (isset($_POST['submit'])) {
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];

    // Mendapatkan tanggal saat ini
    $tanggal_sekarang = date("d");
    $bulan_sekarang = date("m");
    $tahun_sekarang = date("Y");

    // Menghitung umur
    $umur = $tahun_sekarang - $tahun;

    // Menyesuaikan umur jika bulan dan hari lahir belum tercapai di tahun ini
    if ($bulan_sekarang < $bulan || ($bulan_sekarang == $bulan && $tanggal_sekarang < $tanggal)) {
        $umur--;
    }
    echo "$nama $umur $segs $GPA $isStudent";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hitung Umur</title>
</head>
<body>
    <h2>Hitung Umur Anda</h2>
    <form method="post" action="">
        <label for="tanggal">Tanggal Lahir:</label>
        <input type="number" id="tanggal" name="tanggal" min="1" max="31" required><br><br>

        <label for="bulan">Bulan Lahir:</label>
        <input type="number" id="bulan" name="bulan" min="1" max="12" required><br><br>

        <label for="tahun">Tahun Lahir:</label>
        <input type="number" id="tahun" name="tahun" min="1900" max="<?php echo date('Y'); ?>" required><br><br>

        <input type="submit" name="submit" value="Hitung Umur">
    </form>