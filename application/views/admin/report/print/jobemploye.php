<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p style="text-align: center;">Laporan Data Pendaftar</p>
    <p style="text-align: center;">RS Mitra Husada Pringsewu Lampung</p>
    <hr />
    <p>Tanggal Cetak : <?= date('d M Y') ?></p>
    <p>&nbsp;</p>
    <table style="border-collapse: collapse; width: 100%;" border="1">
        <tbody>
            <tr>
                <td style="width: 25%; text-align: center;"><strong>No</strong></td>
                <td style="width: 25%; text-align: center;"><strong>Nama Job</strong></td>
                <td style="width: 25%; text-align: center;"><strong>Nama Pendaftar</strong></td>
            </tr>
            <?php $i = 1;
            foreach ($allData as $data) : ?>
                <tr>
                    <td style="width: 25%; text-align: center;"><?= $i++; ?></td>
                    <td style="width: 25%; text-align: center;"><?= $data->name; ?></td>
                    <td style="width: 25%; text-align: center;"><?= $data->fullname; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p style="text-align: left; padding-left: 480px;">&nbsp;</p>
    <p style="text-align: left; padding-left: 480px;">Mengetahui</p>
    <p style="text-align: left; padding-left: 480px;">Direktur Utama</p>
    <p style="text-align: left; padding-left: 480px;">&nbsp;</p>
    <p style="text-align: left; padding-left: 480px;">&nbsp;</p>
    <p style="text-align: left; padding-left: 480px;"><strong>Nama Direktur Utama</strong></p>
    <p style="text-align: left; padding-left: 480px;">&nbsp;</p>
    <p style="text-align: left; padding-left: 480px;">&nbsp;</p>
    <p style="text-align: left; padding-left: 480px;">&nbsp;</p>
</body>

</html>