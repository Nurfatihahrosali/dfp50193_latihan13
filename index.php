 <!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Form Validation</title> 
    <style> 
        * { 
            font-family: Verdana, Geneva, Tahoma, sans-serif; 
        } 
    </style> 
</head> 
<body> 
    <h1>Borang Permohonan (A)</h1> 
    <p>validate guna HTML</p> 
 
    <form action="semak.php" method="post"> 
        <table> 
            <tr> 
                <td>Nama</td> 
                <td><input type="text" name="nama" required 
                minlength="2"></td> 
            </tr> 
            <tr> 
                <td>Umur</td> 
                <td><input type="number" name="
    <form action="semak.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" id="umur"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
 <?php
$nama = $_POST['nama'];
$umur = $_POST['umur'];

if ($name == ''){
    ?>
    <script>
        alert('Sila isi nama anda.');
        window.location = 'index.php';
        </script>

        <?php
} elseif(strlen($nama) < 2){
    ?>

    <script>
        alert('Sila isi nama panjang');
        window.loation = 'index.php';
        </script>

        <?php
} elseif (strlen($umur) < 18 or $umur > 45 ) {
    ?>
    <script>
        alert('Umur anda tidak layak.');
        window.location = 'index.php';
        </script>

        <?php
}else {
    echo 'Nama: '. $nama . '<br>Umur: ' . $umur . 'tahun';
}