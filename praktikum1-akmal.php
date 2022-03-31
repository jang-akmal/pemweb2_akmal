<?php
$ns1 = ['id'=>1,'NIM'=>'0110112','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'NIM'=>'0112123','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'NIM'=>'0113034','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'NIM'=>'0113445','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <table class="table">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">UTS</th>
        <th scope="col">UAS</th>
        <th scope="col">Tugas</th>
        <th scope="col">Nilai Akhir</th>

    </tr>
    </thead>
    <tbody>
    

    <?php
        $nomor = 1;
        foreach($ar_nilai as $ns){
            echo '<tr><td>'.$nomor.'</td>';
            echo '<td>'.$ns['NIM'].'</td>';
            echo '<td>'.$ns['uts'].'</td>';
            echo '<td>'.$ns['uas'].'</td>';
            echo '<td>'.$ns['tugas'].'</td>';
            $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
            echo '<tr/>';
            $nomor++;
        }
    ?>

    </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>