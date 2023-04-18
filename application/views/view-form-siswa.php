<html>

<head>
     <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="8">
                         Form Input Data Mata Siswa
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
                    <input type="text" name="nama" id="nama">
                    </td>
                </tr>

                <tr>
                <th>NIS</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="nis" id="nis">
                    </td>
                </tr>

                <tr>
                <th>KELAS</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>

                <tr>
                <th>TANGGAL LAHIR</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="tanggal lahir" id="tanggallahir">
                    </td>
                </tr>

                <tr>
                <th>TEMPAT LAHIR</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="tempat lahir" id="tempatlahir">
                    </td>
                </tr>

                <tr>
                <th>ALAMAT</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>

                <tr>
                <th>JENIS KELAMIN</th>
                    <td>:</td>
                    <td>
                        <button name="jenis kelamin" id="jeniskelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="2">Perempuan</option>
                            <option value="3">Laki-Laki</option>
                        </button>
                    </td>
                </tr>

                <tr>
                <th>AGAMA</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="2">Islam</option>
                            <option value="3">Kristen</option>
                            <option value="4">Katolik</option>
                            <option value="5">Budha</option>
                            <option value="6">Hindu</option>
                            <option value="7">Protestan</option>
                            <option value="8">Khonghucu</option>  
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