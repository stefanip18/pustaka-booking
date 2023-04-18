<html>

<head>
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="8">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="8">
                    <hr>
                </td>
            </tr>

            <tr>
                <th>NAMA SISWA</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>

            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>

            <tr>
                <td>KELAS</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>   
            </tr>

            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td>
                    <?= $tanggal; ?>
                </td>   
            </tr>

            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td>
                    <?= $tempatlahir; ?>
                </td>   
            </tr>

            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>   
            </tr>

            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td>
                    <?= $jeniskelamin; ?>
                </td>   
            </tr>

            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                    <?= $agama; ?>
                </td>   
            </tr>

            <tr>
            <td colspan="8" align="center">
            <a href="<?= base_url('siswa');
            ?>">Kembali</a>
            </td>
        </tr>
    </table>
</center>
</body>

</html>
