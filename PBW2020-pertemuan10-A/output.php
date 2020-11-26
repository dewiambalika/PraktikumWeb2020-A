<?php 

    if(isset($_GET['submit']))
    {
    	// line 6-15 digunakan untuk mendeklarasikan variabel
    	$nama = $_GET['nama'];
	    $nim = $_GET['nim'];
	    $jkelamin = $_GET['jkelamin'];
	    $tugas = $_GET['tugas'];
	    $uts = $_GET['uts'];
	    $uas = $_GET['uas'];
	    $rata2 = NULL;
	    $jumlahNilai = NULL;
	    $grade = NULL;
	    $keterangan = NULL;

	    // proses dibawah digunakan untuk menghitung jumlah nilai dan rata-rata nilai
        $jumlahNilai = $_GET["tugas"] + $_GET["uts"] + $_GET["uas"];
        $rata2 = ($_GET["tugas"] + $_GET["uts"] + $_GET["uas"]) / 3;

        // proses dibawah digunakan untuk mengklasifikasi grade berdasarkan nilai rata-rata
        if ($rata2>=80) {
            $grade = "A";
        }elseif ($rata2>=71) {
            $grade = "B";
        }elseif($rata2>=61) {
            $grade = "C";
        }elseif ($rata2>=51) {
            $grade = "D";
        }else {
            $grade = "E";
        }

        // proses dibawah digunakan untuk memberi keterangan berdasarkan nilai rata-rata
        if ($rata2<62)
	   {
	        $keterangan="TIDAK LULUS";
	   }
	   else
	   {
	        $keterangan="LULUS";
	   }
	    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"> <!-- digunakan untuk menghubungkan html dengan halaman css -->
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2 align ="center">Data Nilai Mahasiswa</h2>
    <form action="input.php" method="GET"> <!-- digunakan untuk menghubungkan output.php dengan input.php -->
        <table  style="margin-left:auto;margin-right:auto" class="output" border = "0" cellpadding="10" >
            <!-- digunakan untuk mengambil nilai dari masing-masing variabel unntuk ditampilkan kembali -->
            <tr>
                <td>Nama Mahasiswa</td>
                <td><?php echo ("$nama"); ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><?php echo ("$nim"); ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo ("$jkelamin"); ?></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><?php echo ("$tugas"); ?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><?php echo ("$uts"); ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><?php echo ("$uas"); ?></td>
            </tr>
            	<td>Jumlah Nilai</td>
                <td><?php echo ("$jumlahNilai"); ?></td>
            <tr>
                <td>Nilai Rata-rata</td>
                <td><?php echo ("$rata2"); ?></td>
            </tr>
            <tr>
                <td>Nilai Berdasarkan Grade</td>
                <td><?php echo ("$grade"); ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><?php echo ("$keterangan"); ?></td>
            </tr>
            <tr>
                <td><a href=""><button>Reset</button></a></td> <!-- digunakan untuk tombol reset -->
            </tr>
        </table>
    </body>
</html> <!--Tag penutup pada HTML-->