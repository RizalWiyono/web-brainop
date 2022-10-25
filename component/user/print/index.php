<?php
    session_start();
    include '../../../src/connection/connection.php';
    error_reporting(0);
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
<body>
    <div class="container">
        <img src="../../../src/images/logo.png" height="30" class="d-inline-block align-top mt-4" alt="" loading="lazy">
    
        <table class="table mt-5">
            <thead>
                <tr>
                <th scope="col">Project Name</th>
                <th scope="col">Company Name</th>
                <th scope="col">Description</th>
                <th scope="col">Project Package</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id = $_GET['id'];
                $queryJob  = mysqli_query($connect, "SELECT * FROM `detailorder` INNER JOIN transaction ON detailorder.iddetailOrder=transaction.iddetailOrder WHERE detailorder.iddetailOrder=$id;");
                while($row = mysqli_fetch_array($queryJob)){ ?>
                <tr>
                    <td><?=$row['project_name']?></td>
                    <td><?=$row['company_name']?></td>
                    <td><?=$row['description']?></td>
                    <td><?=$row['project_package']?></td>
                    <td><?=$row['price_order']?></td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</body>
<script>
		window.print();
	</script>
</html>
