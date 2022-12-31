<?php 
$m1 = ['nim'=>'0110219019' , 'nama'=>'Jungkook', 'nilai'=>90];
$m2 = ['nim'=>'0110219018' , 'nama'=>'V', 'nilai'=>95];
$m3 = ['nim'=>'0110219017' , 'nama'=>'Jimin', 'nilai'=>60];
$m4 = ['nim'=>'0110219016' , 'nama'=>'RM', 'nilai'=>85];
$m5 = ['nim'=>'0110219015' , 'nama'=>'Agust D', 'nilai'=>80];
$m6 = ['nim'=>'0110219014' , 'nama'=>'Jin', 'nilai'=>70];
$m7 = ['nim'=>'0110219013' , 'nama'=>'Jhope', 'nilai'=>75];
$m8 = ['nim'=>'0110219012' , 'nama'=>'Adam', 'nilai'=>35];
$m9 = ['nim'=>'0110219011' , 'nama'=>'Angga', 'nilai'=>50];
$m10 = ['nim'=>'0110219110' , 'nama'=>'Arin', 'nilai'=>80];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$jumlah_mahasiswa = count($mahasiswa);
$ar_nilai = array_column($mahasiswa, 'nilai');
$nilai_max = max($ar_nilai);
$nilai_min = min($ar_nilai);
$nilai_rata2 = (array_sum($ar_nilai)) / $jumlah_mahasiswa;
$aggregate = [
  'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
  'Nilai Tertinggi'=>$nilai_max,
  'Nilai Terendah'=>$nilai_min,
  'Nilai Rata-rata'=>$nilai_rata2
];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3 Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <header class="py-3 mb-4 border-bottom">
      <div class="container d-flex flex-wrap justify-content-center align-items-center">
        <a href="tugas3.php" class=" text-dark text-decoration-none text-center">
          <span class="fs-4">Daftar Nilai Mahasiswa</span>
        </a>
      </div>
    </header>

    <main>
      <div class="container py-5">
        <table class="table table-bordered">
          <thead class="table-info text-center">
            <tr>
              <?php 
                $ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
                foreach($ar_judul as $judul) {
              ?>
              <th><?= $judul ?></th>
              <?php } ?>
            </tr>
          </thead>
          <tbody class="text-center table-succes">
            <?php 
              $no = 1;
              foreach($mahasiswa as $m) {
                $keterangan = ($m['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                // grade
                if ($m['nilai'] >= 90 && $m['nilai'] <= 100) $grade = 'A';
                else if ($m['nilai'] >= 80 && $m['nilai'] <= 89) $grade = 'B';
                else if ($m['nilai'] >= 70 && $m['nilai'] <= 79) $grade = 'C';
                else if ($m['nilai'] >= 60 && $m['nilai'] <= 69) $grade = 'D';
                else if ($m['nilai'] >= 0 && $m['nilai'] <= 59) $grade = 'E';
                else $grade = 0;
                // predikat
                switch ($grade) {
                  case 'A': $predikat = 'Memuaskan'; break;
                  case 'B': $predikat = 'Bagus'; break;
                  case 'C': $predikat = 'Cukup'; break;
                  case 'D': $predikat = 'Kurang'; break;
                  case 'E': $predikat = 'Buruk'; break;
                  default: break;
                }
            ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $m['nim'] ?></td>
              <td><?= $m['nama'] ?></td>
              <td><?= $m['nilai'] ?></td>
              <td><?= $keterangan ?></td>
              <td><?= $grade ?></td>
              <td><?= $predikat ?></td>
            </tr>
            <?php $no++; } ?>
          </tbody>
          <tfoot class="table-danger">
            <?php 
              foreach($aggregate as $agg => $hasil) {
            ?>
            <tr>
              <th colspan="6"><?= $agg ?></th>
              <th><?= $hasil ?></th>
            </tr>
            <?php } ?>
          </tfoot>
        </table>
      </div>
    </main>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>