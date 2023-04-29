<html>

<head>
     <title>Form Input Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="8">
                         FORM INPUT DATA SISWA
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <th>NAMA SISWA</th>
                    <td>:</td>
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
                    <input type="text" name="tanggal lahir" id="tanggal_lahir">
                    </td>
                </tr>

                <tr>
                <th>TEMPAT LAHIR</th>
                    <td>:</td>
                    <td>
                    <input type="text" name="tempat lahir" id="tempat_lahir">
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

                        
                            <form action=""
                            method="post">
                        <br>
                            <input type="radio" 
                            name="jeniskelamin" value="Perempuan"checked>Perempuan
                        </br>
                            <input type="radio" 
                            name="jeniskelamin" value="Laki-laki"checked>Laki-laki
                                
                    </td>
                </tr>

                <tr>
                <th>AGAMA</th>
                    <td>:</td>
                    <td>
                            <select name="agama" id="agama">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="3Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Khonghucu">Khonghucu</option>  
                            </select>
                    </td>
                </tr>

                
                <tr>
                    <td colspan="8" align="center">
                        <br>
                            <input type="submit" value="Submit">
                        </br>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>