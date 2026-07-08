<!DOCTYPE html>
<html>
<head>
    <title>Pengolahan Nilai Mahasiswa</title>
</head>

<body>

<h1>DATA NILAI MAHASISWA</h1>

<?php

$mahasiswa = array(
    array("nama" => "Andi", "nilai" => 80),
    array("nama" => "Budi", "nilai" => 65),
    array("nama" => "Citra", "nilai" => 90),
    array("nama" => "Dina", "nilai" => 70)
);

function hitungRataRata($data)
{
    $total = 0;

    foreach ($data as $mhs)
    {
        $total = $total + $mhs["nilai"];
    }

    return $total / count($data);
}

function cariNilaiTertinggi($data)
{
    $tertinggi = $data[0]["nilai"];

    foreach ($data as $mhs)
    {
        if ($mhs["nilai"] > $tertinggi)
        {
            $tertinggi = $mhs["nilai"];
        }
    }

    return $tertinggi;
}

function tentukanStatus($nilai)
{
    if ($nilai >= 70)
    {
        return "Lulus";
    }
    else
    {
        return "Tidak Lulus";
    }
}

?>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Nilai</th>
    <th>Status</th>
</tr>

<?php

$no = 1;

foreach ($mahasiswa as $mhs)
{
?>

<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $mhs["nama"]; ?></td>
    <td><?php echo $mhs["nilai"]; ?></td>
    <td><?php echo tentukanStatus($mhs["nilai"]); ?></td>
</tr>

<?php

    $no++;
}

?>

</table>

<h3>
Rata-rata Nilai :
<?php echo hitungRataRata($mahasiswa); ?>
</h3>

<h3>
Nilai Tertinggi :
<?php echo cariNilaiTertinggi($mahasiswa); ?>
</h3>

</body>
</html>
