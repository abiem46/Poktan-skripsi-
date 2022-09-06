<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Surat</title>
</head>

<body>
    <table align="center">
        <tr>
            <td width="100">
                <img width="80px" height="80px" src="<?= base_url(); ?>/ds/assets/img/logo.png">
            </td>
            <td width="500" align="center">
                <font size="5"><b>KELOMPOK TAN I UMA BERINGIN<b></font><BR>
                <font size="5"><b>KECAMATAN ALAS<b></font><BR>
                <font size="6"><b>DESA JURANALAS</b></font><BR>
                <font size="3"><i>Jln.Garuda No.1 Alas Telp. (+62)87766647792</i></font>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="635" align="center">
                <img src="<?= base_url(); ?>/ds/assets/img/garis.png">
            </td>
        </tr>
    </table>
    <table align="right">
        <tr>
            <td align="center">
                <font size="6"><b><u><?= $anggota['jenis_surat']; ?></u><b></font>
            </td>
        </tr>
        <tr>
            <td width="635" align="center">
                <font size="4">Nomor : <?= $anggota['no_surat']; ?>/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ <?= date('Y'); ?></font>
            </td>
        </tr>
        <tr>
            <td height="30">
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td height="10"></td>
        </tr>
        <td width="635">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah in Ketua Kelompok Tani Uma Beringin Kecamatan Alas Kabupaten Sumbawa dengan ini menerangkan:
            </p>
        </td>
        </tr>
        
    </table>
    <table align="center">
        <tr>
            <td height="10"></td>
        </tr>
    </table>
    <table align="center">

        <tr>
            <td width="200">
                Nama
            </td>
            <td width="300">
                : <?= $anggota['anggota']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Alamat
            </td>
            <td>
                : RT&nbsp;<?= $anggota['rt']; ?>&nbsp;/&nbsp;RW&nbsp;<?= $anggota['rw']; ?>
            </td>
        </tr>
        <tr>
            <td>
                Keperluan
            </td>
            <td>
                : <?= $anggota['jenis_surat'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Jumlah
            </td>
            <td>
                : <?= $anggota['jumlah'] ?> Kg
            </td>
        </tr>
        <tr>
            <td>
                Luas Tanah
            </td>
            <td>
                : <?= $anggota['luas_tanah'] ?> H
            </td>
        </tr>
    </table>

    <table>
        <tr>
            <td height="10">

            </td>
        </tr>
        <tr>
            <td height="20">

            </td>
        </tr>
        <tr>
            <td>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.
                </p>
            </td>
        </tr>
    </table>
    <table align="right">
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td width="300" align="left" class="col-ml-1">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALAS, <?= date('d-m-Y'); ?>
            </td>
        </tr>
        <tr>
            <td align="center">
                <font size="4"><b>KETUA POKTAN UMA BERINGIN</b></font>
            </td>
        </tr>
        <tr>
            <td width="300" height="50" >
            </td>
        </tr>
        <tr>
            <td align="center">
                <font size="3"><b><u> ZULKARNAIN HA</u></b></font>
            </td>
        </tr>

    </table>
</body>

</html>