<?php
   $nama = $_POST['nama'];
   $nim = $_POST['nim'];
   $ttl = $_POST['ttl'];
   $prodi = $_POST['prodi'];
   $minatstudi = $_POST['minatstudi'];
   $file = $_POST['file'];
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Minggu 4</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <h2>Element Form - HTML</h2>

    <form name="fmhs" method="POST" action="proses.php">
        <table class="table-container" border =5>

            <tr>
                <td>Nama :</td>
                <td>:</td>
                <td><?php echo $nama;?> </td>
            </tr>
            <tr>
                <td>NIM :</td>
                <td>:</td>
                <td><?php echo $nim;?> 

                </td>
            </tr>
            <tr>
                <td>Tgl lahir :</td>
                <td>:</td>
                <td><?php echo $ttl;?>  </td>
            </tr>
            <tr>
                <td>Program studi</td>
                <td>:</td>
                <td>
                    <?php echo $prodi;?> 
                </td>
            </tr>
            <tr>
                <td> Bidang minat :</td>
                <td>:</td>
                <td><?php echo $minatstudi;?>  
                </td>
            </tr>
            <tr>
                <td>Berkas CV :</td>
                <td>:</td>
                <td>
                <?php echo $file;?>

                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
        </table>




    </form>
</body>

</html>