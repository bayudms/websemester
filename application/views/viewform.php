<!DOCTYPE html>
<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="8" style="background-color:red;">
                    Form Input Data Siswa 
                </th>
            </tr>
            <tr>
                <td colspan="8">
                    <hr>
                </td>
            </tr>
            <tr>
                <th style="text-align:left;">Nama Siswa</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th style="text-align:left;">NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="NIS" id="NIS">
                </td>
            </tr>
            <tr>
                <th style="text-align:left;">Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="kelas" id="kelas">
                </td>
            </tr>
            <tr>
                <th style="text-align:left;">Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_lahir" id="tanggal lahir">
                </td>
            </tr>
            <tr>
                <th style="text-align:left;">Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="tmpt_lahir" id="tempat lahir">
                </td>
            </tr>
            <tr>
                <th style="text-align:left;">Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>
            <tr>
                <th style="text-align:left;">Jenis Kelamin</th>
                <td>:</td>
                    <td>
                        <input type="radio" name="kelamin" value="Laki-laki">Laki-Laki
                        <input type="radio" name="kelamin" value="Perempuan">Perempuan
                    </td>
            </tr>
            <tr>
                <th style="text-align:left;">Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">-- Pilih Agama --</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="8" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>

</html>