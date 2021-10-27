<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compaible" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas praktikum 3</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<?php
    $data_barang = [
        [
            'nama' => 'Jagung',
            'berat(kg)' => 1,
            'stok' => 0
        ],
        [
            'nama' => 'Gula',
            'berat(kg)' => 0.25,
            'stok' => 2
        ],
        [
            'nama' => 'Kopi',
            'berat(kg)' => 2,
            'stok' => 8
        ],
        [
            'nama' => 'Garam',
            'berat(kg)' => 2,
            'stok' => 0
        ],
        [
            'nama' => 'Beras',
            'berat(kg)' =>5 ,
            'stok' => 10
        ],    
    ];
?>
<body>
    <h1>DATA SEMBAKO PAK JOY</h1>
    <table id="table_barang">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Berat(Kg)</th>
          <th>Berat(gram)</th>
          <th>Berat(miligram)</th>
          <th>Stok</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data_barang as $index => $data) { ?>
        <tr>
          <td><?= $index + 1?></td>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['berat(kg)'] ?></td>
          <td><?= $data['berat(kg)']*1000 ?></td>
          <td><?= $data['berat(kg)']*1000000 ?></td>
          <td class="<?= $data['stok'] == 0 ? 'Nilaikosong' : '' ?>"><?= $data['stok'] == 0 ? 'Kosong' : $data['stok'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
