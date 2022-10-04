<?php
    require_once 'Lingkaran.php';
    require_once 'PersegiPanjang.php';
    require_once 'Segitiga.php';

    $lingkaran = new Lingkaran('10');
    $persegiPanjang = new PersegiPanjang('20', '40');
    $segitiga = new Segitiga('20', '9', '14', '10', '18');
    $bidang = [$lingkaran, $persegiPanjang, $segitiga];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>tugas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center" id="h3">Daftar Bidang 2D</h3>
        <table class="table table-striped">
        <thead>
                <tr>
                    <?php
                    $judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
                    foreach($judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                foreach($bidang as $bgd){
                    switch ($bgd->namaBidang()) {
                        case 'Lingkaran': $keterangan = 'Jari-jari: '.$bgd->jari_jari; break;
                        case 'Persegi Panjang': $keterangan = 'Panjang: '.$bgd->panjang.'<br/>Lebar: '.$bgd->lebar; break;
                        case 'Segitiga': $keterangan = 'Alas: '.$bgd->alas.'<br/>Tinggi: '.$bgd->tinggi.'<br/>Sisi A: '.$bidang->sisiA.'<br/>Sisi B: '.$bidang->sisiB.'<br/>Sisi C: '.$bidang->sisiC ; break;
                    } 
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $bgd->namaBidang();?></td>
                    <td><?=$keterangan?></td>
                    <td><?= $bgd->LuasBidang();?></td>
                    <td><?= $bgd->KelilingBidang();?></td>
                </tr>
                <?php $no++;} ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>