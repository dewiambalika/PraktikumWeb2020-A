<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"> <!-- digunakan untuk menghubungkan html dengan halaman css -->
    <title>Data Mahasiswa</title>
</head>
<body>
	<form action="output.php" method="GET"> <!-- digunakan untuk menghubungkan input.php dengan output.php -->
    <h2 align="center">Data Nilai Mahasiswa</h2>
        <table style="margin-left:auto;margin-right:auto" class="input">
            <!-- digunakan untuk menerima inputan untuk variabel nama -->
            <tr>
                <td><label for="nama">Nama </label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <!-- digunakan untuk menerima inputan untuk variabel nim -->
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input type="number" name="nim" id="nim"></td>
            </tr>
            <!-- digunakan untuk menerima inputan untuk variabel jkelamin -->
            <td><label for="jkelamin">Jenis Kelamin</label></td>
                <td><select name="jkelamin" id="input">
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Non-binary">Non-binary</option>
                </select></td>
            <!-- digunakan untuk menerima inputan untuk variabel tugas -->
            <tr>
                <td><label for="tugas">Nilai Tugas</label></td>
                <td><input type="number" name="tugas" id="tugas"></td>
            </tr>
            <!-- digunakan untuk menerima inputan untuk variabel uts -->
            <tr>
                <td><label for="uts">Nilai UTS</label></td>
                <td><input type="number" name="uts" id="uts"></td>
            </tr>
            <!-- digunakan untuk menerima inputan untuk variabel uas -->
            <tr>
                <td><label for="uas">Nilai UAS</label></td>
                <td><input type="number" name="uas" id="uas"></td>
            </tr>
            <tr>
                <td><button  type="submit" name="submit" >Submit</button></td> <!-- digunakan untuk tombol submit -->
            </tr>
        </table>
    </form>
    <br><hr>
    </body>
</html> <!--Tag penutup pada HTML-->