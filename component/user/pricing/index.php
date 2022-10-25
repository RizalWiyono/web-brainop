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
                    <a class="nav-link" href="#">Pricing</a>
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
                    <!-- <a class="dropdown-item" href="#">Cart and pay</a> -->
                    <a class="dropdown-item" href="../../auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="title-section">Pay once, get premium service.</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $queryService  = mysqli_query($connect, "SELECT * FROM serviceprice");
                    while($row = mysqli_fetch_array($queryService)){
                    ?>
                    <div class="col-md-3">
                        <div class="place-pricing">
                            <h2><?=$row["name"]?></h2>
                            <p>Rp. <?=$row["nominal"]?></p>
                            <ul>
                                <?php
                                $idService = $row["idservicePrice"];
                                $queryFeatureService  = mysqli_query($connect, "SELECT * FROM featuresservice WHERE idservicePrice=$idService");
                                while($rowFeature = mysqli_fetch_array($queryFeatureService)){
                                ?>
                                <li>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.43751 11C3.43731 9.67241 3.78659 8.36815 4.45025 7.21834C5.11392 6.06853 6.06857 5.11369 7.21825 4.4498C8.36793 3.78591 9.67212 3.43637 10.9997 3.43632C12.3273 3.43627 13.6315 3.7857 14.7813 4.4495C14.9391 4.53923 15.126 4.5629 15.3012 4.51533C15.4764 4.46776 15.6257 4.35283 15.7165 4.1956C15.8072 4.03838 15.8321 3.85164 15.7857 3.67612C15.7393 3.5006 15.6254 3.35057 15.4688 3.25875C13.7649 2.27505 11.7842 1.88103 9.83358 2.1378C7.88301 2.39456 6.07166 3.28777 4.68045 4.67888C3.28924 6.07 2.39592 7.88129 2.13903 9.83185C1.88214 11.7824 2.27603 13.7632 3.25962 15.4671C4.24322 17.171 5.76154 18.5027 7.57912 19.2558C9.3967 20.0088 11.412 20.1411 13.3124 19.632C15.2128 19.123 16.8921 18.0012 18.09 16.4405C19.2879 14.8797 19.9373 12.9674 19.9375 11C19.9375 10.8177 19.8651 10.6428 19.7362 10.5139C19.6072 10.3849 19.4324 10.3125 19.25 10.3125C19.0677 10.3125 18.8928 10.3849 18.7639 10.5139C18.635 10.6428 18.5625 10.8177 18.5625 11C18.5625 13.0057 17.7658 14.9293 16.3475 16.3475C14.9293 17.7657 13.0057 18.5625 11 18.5625C8.99431 18.5625 7.07076 17.7657 5.65252 16.3475C4.23427 14.9293 3.43751 13.0057 3.43751 11Z" fill="#B088F9"/>
                                        <path d="M21.1118 4.61175C21.1757 4.54783 21.2264 4.47194 21.261 4.38843C21.2956 4.30491 21.3134 4.2154 21.3134 4.125C21.3134 4.0346 21.2956 3.94509 21.261 3.86157C21.2264 3.77805 21.1757 3.70217 21.1118 3.63825C21.0478 3.57433 20.972 3.52362 20.8884 3.48903C20.8049 3.45444 20.7154 3.43663 20.625 3.43663C20.5346 3.43663 20.4451 3.45444 20.3616 3.48903C20.2781 3.52362 20.2022 3.57433 20.1383 3.63825L11 12.7779L7.36176 9.13825C7.29784 9.07433 7.22196 9.02362 7.13844 8.98903C7.05492 8.95443 6.96541 8.93663 6.87501 8.93663C6.78462 8.93663 6.6951 8.95443 6.61159 8.98903C6.52807 9.02362 6.45218 9.07433 6.38826 9.13825C6.32434 9.20217 6.27364 9.27805 6.23904 9.36157C6.20445 9.44509 6.18665 9.5346 6.18665 9.625C6.18665 9.71539 6.20445 9.80491 6.23904 9.88842C6.27364 9.97194 6.32434 10.0478 6.38826 10.1117L10.5133 14.2367C10.5771 14.3008 10.653 14.3516 10.7365 14.3862C10.82 14.4209 10.9096 14.4387 11 14.4387C11.0904 14.4387 11.18 14.4209 11.2635 14.3862C11.347 14.3516 11.4229 14.3008 11.4868 14.2367L21.1118 4.61175Z" fill="#B088F9"/>
                                    </svg>
                                    <span><?=$rowFeature["contents"]?></span>
                                </li>
                                <?php } ?>
                            </ul>
                            <a href="../order/index.php?pk=<?=$row["name"]?>">
                                <button class="btn-primer">Order now</button>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-3">
                        <div class="place-pricing">
                            <h2>Custom</h2>
                            <h5 class="text-center">Please, contact and consult the project and the price you want</h5>
                            <button class="btn-primer">Order now</button>
                        </div>
                    </div>
                </div>
            </div>
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
