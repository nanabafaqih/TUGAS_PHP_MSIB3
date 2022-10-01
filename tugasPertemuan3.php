<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>1921400207,'nama'=>'DINA','nilai'=>90];
$m2 = ['nim'=>1921400208,'nama'=>'AMEL','nilai'=>96];
$m3 = ['nim'=>1921400209,'nama'=>'RIDWAN','nilai'=>78];
$m4 = ['nim'=>1921400210,'nama'=>'ROFIQ','nilai'=>98];
$m5 = ['nim'=>1921400211,'nama'=>'ANAS','nilai'=>68];
$m6 = ['nim'=>1921400212,'nama'=>'LINGGA','nilai'=>76];
$m7 = ['nim'=>1921400290,'nama'=>'endang','nilai'=>96];
$m8 = ['nim'=>1921400222,'nama'=>'nadya','nilai'=>76];
$m9 = ['nim'=>1921400215,'nama'=>'nana','nilai'=>97];
$m10 = ['nim'=>1921400219,'nama'=>'wilda','nilai'=>72];


$ar_judul = ['No','NIM','Nama','Nilai','Keterangan',
'Grade','Predikat'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
$nilai_mhs = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($nilai_mhs);
$max_nilai = max($nilai_mhs);
$min_nilai = min($nilai_mhs);
$rata2 = $total_nilai / $jumlah_mahasiswa;
//keterangan 
$result = [
    'nilai tertinggi'=>$max_nilai,
    'nilai Terendah'=>$min_nilai,
    'Rata2'=>$rata2,
    'Jumlah mahasiswa'=>$jumlah_mahasiswa
    
];

?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TUGAS ARRAY</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body >
        <h3 class="text-center">Daftar nilai mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($mahasiswa as $mhs){
                //rumus2
                 $nilai =  $mhs['nilai'];
                 $keterangan = ($nilai >= 60) ? "lulus" : "tidak lulus";
                 if ($nilai >= 85 && $nilai <= 100) $grade = 'A';
                 else if ($nilai >= 75 && $nilai < 85) $grade = 'B';
                 else if ($nilai >= 60 && $nilai < 75) $grade = 'C';
                 else if ($nilai >= 30 && $nilai < 60) $grade = 'D';
                 else if ($nilai >= 0 && $nilai < 30) $grade = 'E';
                 else $grade = '';
                 
                 switch ($grade) {
                    case 'A': $predikat = 'Memuaskan'; break;
                    case 'B': $predikat = 'Baik'; break;
                    case 'C': $predikat = 'Cukup'; break;
                    case 'D': $predikat = 'Kurang'; break;
                    case 'E': $predikat = 'Buruk'; break;
                    default: $predikat = 'Buruk';
                }
        ?>
            <tr >
                <td><?= $no++ ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
        <?php } ?>
             </tbody>
        </table>
            <!-- menampilkan hasil -->
            <tfoot>
                <?php
                foreach ($result as $keterangan_mahasiswa => $hasil) { ?>
               <ul>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $keterangan_mahasiswa ?>
                            <span class="badge rounded-pill text-bg-primary"><?= $hasil ?></span>
                        </li>
                </ul>
                <?php } ?>
            </tfoot>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>