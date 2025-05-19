<?php
$jenis_kelamin = $_POST['jenis_kelamin']; // ngambil data pake method POST
$usia = $_POST['usia'];
$berat_badan = $_POST['berat_badan'];
$tinggi_badan = $_POST['tinggi_badan'];
$aktivitas = $_POST['aktivitas'];
$tujuan = $_POST['tujuan'];

// Materi If Else pertemuan 4
if ($jenis_kelamin == "pria") {
  $bmr = 88.362 + (13.397 * $berat_badan) + (4.799 * $tinggi_badan) - (5.677 * $usia);
  $rumus_bmr = "88.362 + (13.397 × $berat_badan) + (4.799 × $tinggi_badan) - (5.677 × $usia)";
  $penjelasan_rumus = "Rumus BMR Pria: 88.362 + (13.397 × Berat Badan) + (4.799 × Tinggi Badan) - (5.677 × Usia)";
} else {
  $bmr = 447.593 + (9.247 * $berat_badan) + (3.098 * $tinggi_badan) - (4.330 * $usia);
  $rumus_bmr = "447.593 + (9.247 × $berat_badan) + (3.098 × $tinggi_badan) - (4.330 × $usia)";
  $penjelasan_rumus = "Rumus BMR Wanita: 447.593 + (9.247 × Berat Badan) + (3.098 × Tinggi Badan) - (4.330 × Usia)";
}

$kalori_sebelum_tujuan = $bmr * $aktivitas;
$kalori_akhir = $kalori_sebelum_tujuan;

// Materi Switch pertemuan 4
$teks_tujuan = "Menjaga Berat Badan (tidak ada perubahan)";
switch ($tujuan) {
  case "defisit":
    $kalori_akhir -= 500;
    $teks_tujuan = "Menurunkan Berat Badan (dikurangi 500 kkal)";
    break;
  case "surplus":
    $kalori_akhir += 500;
    $teks_tujuan = "Menaikkan Berat Badan (ditambahkan 500 kkal)";
    break;
}

if ($jenis_kelamin == "pria") {
  $berat_ideal = ($tinggi_badan - 100) - (($tinggi_badan - 100) * 0.10);
} else {
  $berat_ideal = ($tinggi_badan - 100) + (($tinggi_badan - 100) * 0.15);
}

$target_kalori = round($kalori_akhir);
$menu = [];
// Materi if elseif & array
if ($target_kalori <= 1800) {
  $menu = [
    ['Sarapan', '2 telur rebus, 2 roti gandum, 1 pisang', '400 kkal'],
    ['Makan Siang', 'Dada ayam + nasi + sayur', '600 kkal'],
    ['Makan Malam', 'Sup ayam + nasi + lalapan', '500 kkal'],
    ['Camilan', 'Yogurt + buah', '200 kkal'],
  ];
} elseif ($target_kalori <= 2200) {
  $menu = [
    ['Sarapan', 'Oatmeal + susu + pisang', '500 kkal'],
    ['Makan Siang', 'Ayam + nasi merah + sayur', '700 kkal'],
    ['Makan Malam', 'Ikan + kentang + salad', '600 kkal'],
    ['Camilan', 'Smoothie buah + kacang', '300 kkal'],
  ];
} else {
  $menu = [
    ['Sarapan', 'Nasi + telur + tempe', '600 kkal'],
    ['Makan Siang', 'Ayam goreng + nasi + sayur', '800 kkal'],
    ['Makan Malam', 'Mie + telur + sayur', '600 kkal'],
    ['Camilan', 'Roti + susu', '400 kkal'],
  ];
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Hasil Kalori</title>
  <link rel="stylesheet" href="style.css">
  
</head>

<body>
  <div class="container">
    <h1>🧮 Hasil Perhitungan Kalori</h1>

    <p><strong>1. BMR (Kalori Dasar Tubuh):</strong></p>
      <p><?= $penjelasan_rumus ?></p>
        <p>Menggunakan data kamu:<br>
          <p><code><?= $rumus_bmr ?></code><br></p>
              Hasil BMR: <strong><?= round($bmr) ?> kkal</strong>
        </p>

    <p><strong>2. Penyesuaian Aktivitas:</strong></p>
    <p> Kalori × Faktor Aktivitas (<?= $aktivitas ?>) = <?= round($bmr) ?> × <?= $aktivitas ?> = <strong><?= round($kalori_sebelum_tujuan) ?> kkal</strong></p>

    <p><strong>3. Penyesuaian Tujuan:</strong></p>
    <p><?= $teks_tujuan ?> → Kalori akhir: <strong><?= round($kalori_akhir) ?> kkal</strong></p>

    <div class="info-box">
      <h3>📌 Berat Badan Ideal</h3>
        <p>Berdasarkan tinggi badan <?= $tinggi_badan ?> cm dan jenis kelamin <strong><?= $jenis_kelamin ?></strong>, berat badan ideal kamu adalah sekitar:</p>
        <p><strong><?= round($berat_ideal, 1) ?> kg</strong></p>
    </div>

    <br>

    <h2>🍽️ Contoh Menu Harian (± <?= $target_kalori ?> kkal)</h2>
    <table>
      <tr>
        <th>Waktu</th>
        <th>Menu</th>
        <th>Perkiraan Kalori</th>
      </tr>
      <?php foreach ($menu as $item): ?>
        <tr>
          <td><?= $item[0] ?></td>
          <td><?= $item[1] ?></td>
          <td><?= $item[2] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>

    <br>
    <a href="index.html"><button type="button">Kembali ke Form</button></a>

  </div>
</body>
</html>