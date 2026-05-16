<?php
$krs = [
    ["nama" => "Ridho", "matkul" => [
        ["mk" => "Pemrograman I", "sks" => 2],
        ["mk" => "Praktikum Pemrograman I", "sks" => 1],
        ["mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
        ["mk" => "Arsitektur Komputer", "sks" => 3]
    ]],
    ["nama" => "Ratna", "matkul" => [
        ["mk" => "Basis Data I", "sks" => 2],
        ["mk" => "Praktikum Basis Data I", "sks" => 1],
        ["mk" => "Kalkulus", "sks" => 3]
    ]],
    ["nama" => "Tono", "matkul" => [
        ["mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
        ["mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
        ["mk" => "Komputasi Awan", "sks" => 3],
        ["mk" => "Kecerdasan Bisnis", "sks" => 3]
    ]]
];

foreach ($krs as $key => $val) {
    $totalSKS = 0;
    foreach ($val['matkul'] as $m) { $totalSKS += $m['sks']; }
    $krs[$key]['total'] = $totalSKS;
    $krs[$key]['ket'] = ($totalSKS < 7) ? "Revisi KRS" : "Tidak Revisi";
}
?>

<html>
<body>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr bgcolor="#D3D3D3">
            <th>No</th><th>Nama</th><th>Mata Kuliah diambil</th><th>SKS</th><th>Total SKS</th><th>Keterangan</th>
        </tr>
        <?php foreach ($krs as $i => $m): ?>
            <?php foreach ($m['matkul'] as $j => $mk): ?>
                <tr>
                    <td><?= ($j == 0) ? $i + 1 : "" ?></td>
                    <td><?= ($j == 0) ? $m['nama'] : "" ?></td>
                    <td><?= $mk['mk'] ?></td>
                    <td><?= $mk['sks'] ?></td>
                    <td><?= ($j == 0) ? $m['total'] : "" ?></td>
                    <?php if ($j == 0): ?>
                        <td style="background-color: <?= ($m['total'] < 7) ? 'red' : '#03AC0E' ?>;">
                            <?= $m['ket'] ?>
                        </td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>