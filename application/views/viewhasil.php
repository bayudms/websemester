<html>

<head>
    <title>Tampil Data Siswa</title>
</head>

<body>
    <center>
        <table>
                <tr>
                    <th colspan="8" style="background-color:red;">
                        Tampil Data Siswa   
                    </th> 
                </tr>
            <tr>
                <td colspan="8">
                    <hr>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Nama Siswa</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">NIS</td>
                <td>:</td>
                <td>
                    <?= $NIS; ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tgl_lahir; ?> 
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tmpt_lahir; ?> 
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <?= $kelamin; ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">Agama</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <a href="<?= base_url('Siswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
</center>
</body>
</html>