<?php
    session_start();
    include '../../../src/connection/connection.php';
    error_reporting(0);
    $idAccount = $_SESSION['idaccount'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pricing | User</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../../../src/images/favicon.png">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="../../../src/css/style.css">

</head>
<body style="padding: 50px 0; height: 100vh; background: #434343;">
    <div class="shadow-lg container" style="max-width: 700px; background: #FFF; border-radius: 10px; padding: 10px 40px;">
        <img src="../../../src/images/logo.png" height="30" class="d-inline-block align-top mt-4" alt="" loading="lazy">
        <h1 style="font-size: 20px;
        font-weight: 700;
        margin-top: 20px;">
            #BrainNota
        </h1> 
        <hr>
        <h2 style="font-size: 20px;
        margin-bottom: 20px;
        font-weight: 700;">
            <span class="badge badge-primary">Rincian Project:</span>
        </h2>
        <style>
            h3,h4 {
                margin: 0 !important;
            }
        </style>
        <?php
            $id = $_GET['id'];
            $queryJob  = mysqli_query($connect, "SELECT * FROM `detailorder` INNER JOIN transaction ON detailorder.iddetailOrder=transaction.iddetailOrder WHERE detailorder.iddetailOrder=$id;");
            while($row = mysqli_fetch_array($queryJob)){ ?>
            <div class="d-flex justify-content-between">
                <h3 style="font-size: 15px;
                font-weight: 700;">
                    Nama Project:
                </h3>
                <h4 style="font-size: 15px;
                font-weight: 700;">
                    <?=$row['project_name']?>
                </h4>
            </div>
            <hr style="margin: 10px 0;">
            <div class="d-flex justify-content-between">
                <h3 style="font-size: 15px;
                font-weight: 700;">
                    Nama Organisasi:
                </h3>
                <h4 style="font-size: 15px;
                font-weight: 700;">
                    <?=$row['company_name']?>
                </h4>
            </div>
            <hr style="margin: 10px 0;">
            <div class="d-flex justify-content-between">
                <h3 style="font-size: 15px;
                font-weight: 700;">
                    Deskripsi:
                </h3>
                <h4 style="font-size: 15px;
                font-weight: 700;">
                    <?=$row['description']?>
                </h4>
            </div>
            <hr style="margin: 10px 0;">
            <div class="d-flex justify-content-between">
                <h3 style="font-size: 15px;
                font-weight: 700;">
                    Paket Project:
                </h3>
                <h4 style="font-size: 15px;
                font-weight: 700;">
                    <?=$row['project_package']?>
                </h4>
            </div>
            <h2 style="font-size: 20px;
            margin-bottom: 20px;
            font-weight: 700;
            margin-top: 20px;">
                <span class="badge badge-primary">Total Pembayaran:</span>
            </h2>
            <div class="d-flex justify-content-between">
                <h3 style="font-size: 15px;
                font-weight: 700;">
                    Status Pembayaran:
                </h3>
                <h4 style="font-size: 15px;
                font-weight: 700;">
                    <?php
                    if($row['status'] === 'Lunas'){
                        echo '<span class="badge badge-success">Lunas</span>';
                    }elseif($row['status'] === 'Unpaid'){
                        echo '<span class="badge badge-warning">Belum Bayar</span>';
                    }else{
                        echo '<span class="badge badge-light">Sedang Dikonsultasikan</span>';
                    }
                    ?>
                </h4>
            </div>
            <hr style="margin: 10px 0;">
            <div class="d-flex justify-content-between">
                <h3 style="font-size: 15px;
                font-weight: 700;">
                    Total:
                </h3>
                <h4 style="font-size: 15px;
                font-weight: 700;">
                    Rp. <?=$row['price_order']?>
                </h4>
            </div>
            <hr>
        <?php } ?>
        <?php
        $id = $_SESSION['idaccount'];
        $queryName  = mysqli_query($connect, "SELECT * FROM datauser WHERE idaccount=$id");
        while($row = mysqli_fetch_array($queryName)){
        ?>
        <h1 style="font-size: 20px;
        font-weight: 700;
        margin-top: 20px;
        padding-bottom: 20px;">
            Terima kasih atas orderannya Kak. <?=$row["name"]?>
        </h1>
        <?php } ?>   
    </div>
</body>
<script>
		window.print();
	</script>
</html>
