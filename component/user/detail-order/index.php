<?php
    session_start();
    include '../../../src/connection/connection.php';
    error_reporting(0);

    $idAccount = $_SESSION['idaccount'];
    $queryIdUser  = mysqli_query($connect, "SELECT * FROM datauser WHERE idaccount=$idAccount");
    while($row = mysqli_fetch_array($queryIdUser)){
        $idUser = $row["iddataUser"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order | User</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../../../src/images/favicon.png">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="../../../src/css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #FFF !important; box-shadow: 0px 1px 1px rgba(106, 106, 106, 0.15);">
        <a class="navbar-brand" href="../home/">
            <img src="../../../src/images/logo.png" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../pricing/">Pricing</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="../order/">Order now</a>
                </li>
            </ul>
            <div class="dropdown nav-menu-profile">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                    $id = $_SESSION['idaccount'];
                    $queryName  = mysqli_query($connect, "SELECT * FROM datauser WHERE idaccount=$id");
                    while($row = mysqli_fetch_array($queryName)){
                    ?>
                    <?=$row["name"]?>
                    <?php } ?>    
                    <svg class="ml-2" width="15" height="15" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 13C14.6908 13 16.3123 12.3284 17.5078 11.1328C18.7034 9.93726 19.375 8.31575 19.375 6.625C19.375 4.93425 18.7034 3.31274 17.5078 2.11719C16.3123 0.92165 14.6908 0.25 13 0.25C11.3092 0.25 9.68774 0.92165 8.49219 2.11719C7.29665 3.31274 6.625 4.93425 6.625 6.625C6.625 8.31575 7.29665 9.93726 8.49219 11.1328C9.68774 12.3284 11.3092 13 13 13ZM17.25 6.625C17.25 7.75217 16.8022 8.83317 16.0052 9.6302C15.2082 10.4272 14.1272 10.875 13 10.875C11.8728 10.875 10.7918 10.4272 9.9948 9.6302C9.19777 8.83317 8.75 7.75217 8.75 6.625C8.75 5.49783 9.19777 4.41683 9.9948 3.6198C10.7918 2.82277 11.8728 2.375 13 2.375C14.1272 2.375 15.2082 2.82277 16.0052 3.6198C16.8022 4.41683 17.25 5.49783 17.25 6.625ZM25.75 23.625C25.75 25.75 23.625 25.75 23.625 25.75H2.375C2.375 25.75 0.25 25.75 0.25 23.625C0.25 21.5 2.375 15.125 13 15.125C23.625 15.125 25.75 21.5 25.75 23.625ZM23.625 23.6165C23.6229 23.0938 23.2978 21.5212 21.857 20.0805C20.4715 18.695 17.8641 17.25 13 17.25C8.13375 17.25 5.5285 18.695 4.143 20.0805C2.70225 21.5212 2.37925 23.0938 2.375 23.6165H23.625Z" fill="#B088F9"/>
                    </svg>
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="../profile/">Personal data</a>
                    <a class="dropdown-item" href="../chat/">Chat</a>
                    <a class="dropdown-item" href="../detail-order/?pr=unpaid">Cart and pay</a>
                    <a class="dropdown-item" href="../../auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex">
        <div class="left-section" style="height: auto;">
            <div class="nav-dashboard">
                <div class="header">
                    <center>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                    </center>
                    <h1><?=$_SESSION["email"]?></h1>
                </div>

                <ul>
                    <li>
                        <a href="../chat/">
                            <svg width="17" height="17" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_149_581)">
                                <path d="M24.5 1.75C24.9641 1.75 25.4092 1.93437 25.7374 2.26256C26.0656 2.59075 26.25 3.03587 26.25 3.5V17.5C26.25 17.9641 26.0656 18.4092 25.7374 18.7374C25.4092 19.0656 24.9641 19.25 24.5 19.25H7.7245C6.79632 19.2502 5.90622 19.6191 5.25 20.2755L1.75 23.7755V3.5C1.75 3.03587 1.93437 2.59075 2.26256 2.26256C2.59075 1.93437 3.03587 1.75 3.5 1.75H24.5ZM3.5 0C2.57174 0 1.6815 0.368749 1.02513 1.02513C0.368749 1.6815 0 2.57174 0 3.5L0 25.8878C3.6776e-05 26.0609 0.051437 26.2301 0.147695 26.374C0.243953 26.5179 0.380742 26.6301 0.540749 26.6962C0.700755 26.7623 0.876787 26.7795 1.04656 26.7456C1.21634 26.7116 1.37223 26.6281 1.4945 26.5055L6.48725 21.5128C6.81536 21.1845 7.26041 21.0001 7.7245 21H24.5C25.4283 21 26.3185 20.6313 26.9749 19.9749C27.6313 19.3185 28 18.4283 28 17.5V3.5C28 2.57174 27.6313 1.6815 26.9749 1.02513C26.3185 0.368749 25.4283 0 24.5 0L3.5 0Z" fill="#2D2D2D"/>
                                <path d="M8.75 10.5C8.75 10.9641 8.56563 11.4092 8.23744 11.7374C7.90925 12.0656 7.46413 12.25 7 12.25C6.53587 12.25 6.09075 12.0656 5.76256 11.7374C5.43437 11.4092 5.25 10.9641 5.25 10.5C5.25 10.0359 5.43437 9.59075 5.76256 9.26256C6.09075 8.93437 6.53587 8.75 7 8.75C7.46413 8.75 7.90925 8.93437 8.23744 9.26256C8.56563 9.59075 8.75 10.0359 8.75 10.5ZM15.75 10.5C15.75 10.9641 15.5656 11.4092 15.2374 11.7374C14.9092 12.0656 14.4641 12.25 14 12.25C13.5359 12.25 13.0908 12.0656 12.7626 11.7374C12.4344 11.4092 12.25 10.9641 12.25 10.5C12.25 10.0359 12.4344 9.59075 12.7626 9.26256C13.0908 8.93437 13.5359 8.75 14 8.75C14.4641 8.75 14.9092 8.93437 15.2374 9.26256C15.5656 9.59075 15.75 10.0359 15.75 10.5ZM22.75 10.5C22.75 10.9641 22.5656 11.4092 22.2374 11.7374C21.9092 12.0656 21.4641 12.25 21 12.25C20.5359 12.25 20.0908 12.0656 19.7626 11.7374C19.4344 11.4092 19.25 10.9641 19.25 10.5C19.25 10.0359 19.4344 9.59075 19.7626 9.26256C20.0908 8.93437 20.5359 8.75 21 8.75C21.4641 8.75 21.9092 8.93437 22.2374 9.26256C22.5656 9.59075 22.75 10.0359 22.75 10.5Z" fill="#2D2D2D"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_149_581">
                                <rect width="28" height="28" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <span>
                                Chat
                            </span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="#" class="active">
                            <svg width="17" height="17" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 4.375C0 4.14294 0.0921872 3.92038 0.256282 3.75628C0.420376 3.59219 0.642936 3.5 0.875 3.5H3.5C3.69518 3.50005 3.88474 3.56536 4.03853 3.68554C4.19232 3.80572 4.30152 3.97387 4.34875 4.16325L5.0575 7H25.375C25.5079 7.00004 25.6391 7.03035 25.7585 7.08864C25.878 7.14693 25.9826 7.23167 26.0644 7.33642C26.1462 7.44117 26.203 7.56318 26.2307 7.69319C26.2583 7.8232 26.2559 7.95779 26.2237 8.08675L23.5987 18.5868C23.5515 18.7761 23.4423 18.9443 23.2885 19.0645C23.1347 19.1846 22.9452 19.2499 22.75 19.25H7C6.80482 19.2499 6.61526 19.1846 6.46147 19.0645C6.30768 18.9443 6.19848 18.7761 6.15125 18.5868L2.8175 5.25H0.875C0.642936 5.25 0.420376 5.15781 0.256282 4.99372C0.0921872 4.82962 0 4.60706 0 4.375ZM5.495 8.75L7.6825 17.5H22.0675L24.255 8.75H5.495ZM8.75 22.75C8.28587 22.75 7.84075 22.9344 7.51256 23.2626C7.18437 23.5908 7 24.0359 7 24.5C7 24.9641 7.18437 25.4092 7.51256 25.7374C7.84075 26.0656 8.28587 26.25 8.75 26.25C9.21413 26.25 9.65925 26.0656 9.98744 25.7374C10.3156 25.4092 10.5 24.9641 10.5 24.5C10.5 24.0359 10.3156 23.5908 9.98744 23.2626C9.65925 22.9344 9.21413 22.75 8.75 22.75ZM5.25 24.5C5.25 23.5717 5.61875 22.6815 6.27513 22.0251C6.9315 21.3687 7.82174 21 8.75 21C9.67826 21 10.5685 21.3687 11.2249 22.0251C11.8813 22.6815 12.25 23.5717 12.25 24.5C12.25 25.4283 11.8813 26.3185 11.2249 26.9749C10.5685 27.6313 9.67826 28 8.75 28C7.82174 28 6.9315 27.6313 6.27513 26.9749C5.61875 26.3185 5.25 25.4283 5.25 24.5ZM21 22.75C20.5359 22.75 20.0908 22.9344 19.7626 23.2626C19.4344 23.5908 19.25 24.0359 19.25 24.5C19.25 24.9641 19.4344 25.4092 19.7626 25.7374C20.0908 26.0656 20.5359 26.25 21 26.25C21.4641 26.25 21.9092 26.0656 22.2374 25.7374C22.5656 25.4092 22.75 24.9641 22.75 24.5C22.75 24.0359 22.5656 23.5908 22.2374 23.2626C21.9092 22.9344 21.4641 22.75 21 22.75ZM17.5 24.5C17.5 23.5717 17.8687 22.6815 18.5251 22.0251C19.1815 21.3687 20.0717 21 21 21C21.9283 21 22.8185 21.3687 23.4749 22.0251C24.1313 22.6815 24.5 23.5717 24.5 24.5C24.5 25.4283 24.1313 26.3185 23.4749 26.9749C22.8185 27.6313 21.9283 28 21 28C20.0717 28 19.1815 27.6313 18.5251 26.9749C17.8687 26.3185 17.5 25.4283 17.5 24.5Z" fill="white"/>
                            </svg>
                            <span>
                                Cart and pay
                            </span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="../../auth/logout.php">
                            <svg width="17" height="17" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_317_1648)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 21.875C17.5 22.1071 17.4078 22.3296 17.2437 22.4937C17.0796 22.6578 16.8571 22.75 16.625 22.75H2.625C2.39294 22.75 2.17038 22.6578 2.00628 22.4937C1.84219 22.3296 1.75 22.1071 1.75 21.875V6.125C1.75 5.89294 1.84219 5.67038 2.00628 5.50628C2.17038 5.34219 2.39294 5.25 2.625 5.25H16.625C16.8571 5.25 17.0796 5.34219 17.2437 5.50628C17.4078 5.67038 17.5 5.89294 17.5 6.125V9.625C17.5 9.85706 17.5922 10.0796 17.7563 10.2437C17.9204 10.4078 18.1429 10.5 18.375 10.5C18.6071 10.5 18.8296 10.4078 18.9937 10.2437C19.1578 10.0796 19.25 9.85706 19.25 9.625V6.125C19.25 5.42881 18.9734 4.76113 18.4812 4.26884C17.9889 3.77656 17.3212 3.5 16.625 3.5H2.625C1.92881 3.5 1.26113 3.77656 0.768845 4.26884C0.276562 4.76113 0 5.42881 0 6.125L0 21.875C0 22.5712 0.276562 23.2389 0.768845 23.7312C1.26113 24.2234 1.92881 24.5 2.625 24.5H16.625C17.3212 24.5 17.9889 24.2234 18.4812 23.7312C18.9734 23.2389 19.25 22.5712 19.25 21.875V18.375C19.25 18.1429 19.1578 17.9204 18.9937 17.7563C18.8296 17.5922 18.6071 17.5 18.375 17.5C18.1429 17.5 17.9204 17.5922 17.7563 17.7563C17.5922 17.9204 17.5 18.1429 17.5 18.375V21.875Z" fill="#2D2D2D"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.7445 14.6196C27.826 14.5384 27.8906 14.4418 27.9347 14.3355C27.9789 14.2292 28.0016 14.1152 28.0016 14.0001C28.0016 13.885 27.9789 13.7711 27.9347 13.6648C27.8906 13.5585 27.826 13.4619 27.7445 13.3806L22.4945 8.13063C22.3302 7.96633 22.1074 7.87402 21.875 7.87402C21.6426 7.87402 21.4198 7.96633 21.2555 8.13063C21.0912 8.29493 20.9989 8.51777 20.9989 8.75013C20.9989 8.98249 21.0912 9.20533 21.2555 9.36963L25.0128 13.1251H9.625C9.39294 13.1251 9.17038 13.2173 9.00628 13.3814C8.84219 13.5455 8.75 13.7681 8.75 14.0001C8.75 14.2322 8.84219 14.4548 9.00628 14.6188C9.17038 14.7829 9.39294 14.8751 9.625 14.8751H25.0128L21.2555 18.6306C21.0912 18.7949 20.9989 19.0178 20.9989 19.2501C20.9989 19.4825 21.0912 19.7053 21.2555 19.8696C21.4198 20.0339 21.6426 20.1262 21.875 20.1262C22.1074 20.1262 22.3302 20.0339 22.4945 19.8696L27.7445 14.6196Z" fill="#2D2D2D"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_317_1648">
                                <rect width="28" height="28" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <span>
                                Logout
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right-section p-4">
            <div class="header flex justify-content-between align-items-center">
                <h1>Cart and pay</h1>
            </div>
            <div class="flex sub-menu-detail-order mb-3">
                <a class="mr-3" href="?pr=unpaid">
                    Unpaid
                </a>
                <a class="mr-3" href="?pr=paid">
                    Paid off
                </a>
            </div>
            <?php
            if($_GET["pr"] === "new"){ ?>
            <div class="accordion" id="accordionExample">
                <?php
                $no = 1;
                $queryChat  = mysqli_query($connect, "SELECT detailorder.company_name, detailorder.iddetailOrder, detailorder.project_name, detailorder.project_package, datauser.name, appcategory.name as name_app, detailorder.resource, detailorder.description, detailorder.deadline FROM `detailorder` INNER JOIN datauser ON detailorder.iddataUser = datauser.iddataUser INNER JOIN appcategory ON detailorder.idappCategory = appcategory.idappCategory WHERE status='Konsultasikan'");
                while($row = mysqli_fetch_array($queryChat)){ ?>
                <div class="card">
                    <div class="card-header" id="heading<?=$no?>">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?=$no?>" aria-expanded="true" aria-controls="collapseOne">
                        Project Name: <?=$row["project_name"]?> <span class="badge badge-pill badge-secondary"><?=$row["project_package"]?></span>
                        </button>
                    </h2>
                    </div>

                    <div id="collapse<?=$no?>" class="collapse show" aria-labelledby="heading<?=$no?>" data-parent="#accordionExample">
                    <div class="card-body detail-order-new">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-5">
                                    <div>
                                        <h1>Company Name</h1>
                                        <p><?=$row["company_name"]?></p>
                                    </div>
                                    <div>
                                        <h1>Nama</h1>
                                        <p><?=$row["name"]?></p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div>
                                        <h1>App Category</h1>
                                        <p><?=$row["name_app"]?></p>
                                    </div>
                                    <div>
                                        <h1>Resource</h1>
                                        <p><?=$row["resource"]?></p>
                                    </div>
                                    <div>
                                        <h1>Description</h1>
                                        <p><?=$row["description"]?></p>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div>
                                        <h1>Deadline</h1>
                                        <p><?=$row["deadline"]?></p>
                                    </div>
                                    <div>
                                        <h1>Total Price</h1>
                                        <form action="fetch/updateOrder.php" method="post">
                                            <input type="hidden" value="<?=$row['iddetailOrder']?>" class="form-control" name="idParam">
                                            <input type="number" class="form-control mt-2" name="price" style="height: 30px;">
                                            <button>Send to client</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <?php $no++; } ?>
            </div>
            <?php }elseif($_GET["pr"] === "unpaid"){?>
                <div class="accordion" id="accordionExample">
                    <?php
                    $no = 1;
                    $queryChat  = mysqli_query($connect, "SELECT detailorder.company_name, transaction.proof_of_payment, transaction.price_order, detailorder.iddetailOrder, detailorder.project_name, detailorder.project_package, datauser.name, appcategory.name as name_app, detailorder.resource, detailorder.description, detailorder.deadline FROM `detailorder` INNER JOIN datauser ON detailorder.iddataUser = datauser.iddataUser INNER JOIN appcategory ON detailorder.idappCategory = appcategory.idappCategory INNER JOIN transaction ON detailorder.iddetailOrder = transaction.iddetailOrder WHERE detailorder.iddataUser=$idUser && detailorder.status='Unpaid'");
                    while($row = mysqli_fetch_array($queryChat)){ ?>
                    <div class="card">
                        <div class="card-header" id="heading<?=$no?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?=$no?>" aria-expanded="true" aria-controls="collapseOne">
                                Project Name: <?=$row["project_name"]?> <span class="badge badge-pill badge-secondary"><?=$row["project_package"]?></span>
                                </button>
                            </h2>
                            </div>

                            <div id="collapse<?=$no?>" class="collapse show" aria-labelledby="heading<?=$no?>" data-parent="#accordionExample">
                            <div class="card-body detail-order-new">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div>
                                                <h1>Company Name</h1>
                                                <p><?=$row["company_name"]?></p>
                                            </div>
                                            <div>
                                                <h1>Nama</h1>
                                                <p><?=$row["name"]?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div>
                                                <h1>App Category</h1>
                                                <p><?=$row["name_app"]?></p>
                                            </div>
                                            <div>
                                                <h1>Resource</h1>
                                                <p><?=$row["resource"]?></p>
                                            </div>
                                            <div>
                                                <h1>Description</h1>
                                                <p><?=$row["description"]?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div>
                                                <h1>Deadline</h1>
                                                <span class="badge badge-pill badge-warning mb-3"><?=$row["deadline"]?></span>
                                            </div>
                                            <div>
                                                <h1>Total Price</h1>
                                                <span class="badge badge-pill badge-info">Rp. <?=$row["price_order"]?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if($row["proof_of_payment"] === '-'){ ?>
                                <div class="card-footer detail-order flex" style="background: #DA9FF9; align-items: center;">
                                    <button data-toggle="modal" data-target="#exampleModal<?=$row['iddetailOrder']?>" type="submit" class="ml-3 btn btn-light" style="background-color: #B088F9; border: 0; font-size: 12px; color: #FFF;">Pay project</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?=$row['iddetailOrder']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 10px;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="fetch/uploadTf.php" method="post" enctype="multipart/form-data">
                                            <input type="hidden" value="<?=$row['iddetailOrder']?>" class="form-control" name="idParam">
                                                <div class="modal-body">
                                                    <p>
                                                        Upload proof of payment (JPEG, JPG, PNG, PDF)
                                                    </p>
                                                    <input type="file" class="form-control mt-4" name="image">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Upload file</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                </div>
                <?php $no++; } ?>
            </div>    
            <?php }elseif($_GET["pr"] === "paid"){?>
                <div class="accordion" id="accordionExample">
                    <?php
                    $no = 1;
                    $queryChat  = mysqli_query($connect, "SELECT detailorder.company_name, transaction.price_order, detailorder.iddetailOrder, detailorder.project_name, detailorder.project_package, datauser.name, appcategory.name as name_app, detailorder.resource, detailorder.description, detailorder.deadline FROM `detailorder` INNER JOIN datauser ON detailorder.iddataUser = datauser.iddataUser INNER JOIN appcategory ON detailorder.idappCategory = appcategory.idappCategory INNER JOIN transaction ON detailorder.iddetailOrder = transaction.iddetailOrder WHERE detailorder.iddataUser=$idUser && detailorder.status='Lunas'");
                    while($row = mysqli_fetch_array($queryChat)){ ?>
                    <div class="card">
                        <div class="card-header" id="heading<?=$no?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?=$no?>" aria-expanded="true" aria-controls="collapseOne">
                                Project Name: <?=$row["project_name"]?> <span class="badge badge-pill badge-secondary"><?=$row["project_package"]?></span>
                                </button>
                            </h2>
                            </div>

                            <div id="collapse<?=$no?>" class="collapse show" aria-labelledby="heading<?=$no?>" data-parent="#accordionExample">
                            <div class="card-body detail-order-new">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div>
                                                <h1>Company Name</h1>
                                                <p><?=$row["company_name"]?></p>
                                            </div>
                                            <div>
                                                <h1>Nama</h1>
                                                <p><?=$row["name"]?></p>
                                            </div>
                                            <a href="../print/?id=<?=$row['iddetailOrder']?>" target="_blank" rel="noopener noreferrer">
                                                <button class="btn btn-primary">Download Nota</button>
                                            </a>
                                        </div>
                                        <div class="col-md-5">
                                            <div>
                                                <h1>App Category</h1>
                                                <p><?=$row["name_app"]?></p>
                                            </div>
                                            <div>
                                                <h1>Resource</h1>
                                                <p><?=$row["resource"]?></p>
                                            </div>
                                            <div>
                                                <h1>Description</h1>
                                                <p><?=$row["description"]?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div>
                                                <h1>Deadline</h1>
                                                <span class="badge badge-pill badge-warning mb-3"><?=$row["deadline"]?></span>
                                            </div>
                                            <div>
                                                <h1>Total Price</h1>
                                                <span class="badge badge-pill badge-info">Rp. <?=$row["price_order"]?></span>
                                            </div>
                                            <div>
                                            <?php
                                                $progid = $row['iddetailOrder'];
                                                $total  = mysqli_query($connect, "SELECT * FROM `listtask` WHERE iddetailOrder=$progid");
                                                $done  = mysqli_query($connect, "SELECT * FROM `listtask` WHERE iddetailOrder=$progid && status='Done'");
                                                // $new_width = (mysqli_num_rows($done) / 100) * mysqli_num_rows($total);

                                                $count1 = mysqli_num_rows($done) / mysqli_num_rows($total);
                                                $count2 = $count1 * 100;
                                                $new_width = number_format($count2, 0);
                                            ?>
                                                <h1 class="mt-4">Persentase Selesai</h1>
                                                <span class="badge badge-pill badge-success">
                                                    <?=$new_width?>%
                                                </span>
                                            </div>
                                            <div class="mt-4">
                                                <span class="badge badge-pill badge-danger">Paid off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <?php $no++; } ?>
            </div>    
            <?php } ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
	};

	var param = getUrlParameter('process');
	if(param === "success"){
		Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: 'Perubahan Berhasil!',
			showConfirmButton: false,
			timer: 1500
		})
	}else if(param === "dsuccess"){
        Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: 'Data Sudah Dihapus!',
			showConfirmButton: false,
			timer: 1500
		})
    }
</script>
</html>
