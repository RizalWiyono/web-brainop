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
	<title>Boards | Scrum Master</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../../../src/images/favicon.png">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="../../../src/css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #FFF !important; box-shadow: 0px 1px 1px rgba(106, 106, 106, 0.15);">
        <a class="navbar-brand" href="#">
            <img src="../../../src/images/logo.png" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order now</a>
                </li> -->
            </ul>
            <div class="dropdown nav-menu-profile">
                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg class="mr-1" width="15" height="15" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 13C14.6908 13 16.3123 12.3284 17.5078 11.1328C18.7034 9.93726 19.375 8.31575 19.375 6.625C19.375 4.93425 18.7034 3.31274 17.5078 2.11719C16.3123 0.92165 14.6908 0.25 13 0.25C11.3092 0.25 9.68774 0.92165 8.49219 2.11719C7.29665 3.31274 6.625 4.93425 6.625 6.625C6.625 8.31575 7.29665 9.93726 8.49219 11.1328C9.68774 12.3284 11.3092 13 13 13ZM17.25 6.625C17.25 7.75217 16.8022 8.83317 16.0052 9.6302C15.2082 10.4272 14.1272 10.875 13 10.875C11.8728 10.875 10.7918 10.4272 9.9948 9.6302C9.19777 8.83317 8.75 7.75217 8.75 6.625C8.75 5.49783 9.19777 4.41683 9.9948 3.6198C10.7918 2.82277 11.8728 2.375 13 2.375C14.1272 2.375 15.2082 2.82277 16.0052 3.6198C16.8022 4.41683 17.25 5.49783 17.25 6.625ZM25.75 23.625C25.75 25.75 23.625 25.75 23.625 25.75H2.375C2.375 25.75 0.25 25.75 0.25 23.625C0.25 21.5 2.375 15.125 13 15.125C23.625 15.125 25.75 21.5 25.75 23.625ZM23.625 23.6165C23.6229 23.0938 23.2978 21.5212 21.857 20.0805C20.4715 18.695 17.8641 17.25 13 17.25C8.13375 17.25 5.5285 18.695 4.143 20.0805C2.70225 21.5212 2.37925 23.0938 2.375 23.6165H23.625Z" fill="#B088F9"/>
                    </svg>
                    <?php
                    $id = $_SESSION['idaccount'];
                    $queryName  = mysqli_query($connect, "SELECT * FROM dataemployee WHERE idaccount=$id");
                    while($row = mysqli_fetch_array($queryName)){
                    ?>
                    <?=$row["name"]?>
                    <?php } ?> 
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <!-- <a class="dropdown-item" href="#">Personal data</a>
                    <a class="dropdown-item" href="#">Chat</a>
                    <a class="dropdown-item" href="#">Cart and pay</a> -->
                    <a class="dropdown-item" href="../../auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div>
        <div class="main-header p-4">
            <p>List Project</p>
            <h1>Recently viewed</h1>
        </div>
        <div class="main-content p-4">
            <?php
            $queryTask  = mysqli_query($connect, "SELECT * FROM detailorder WHERE status='Lunas'");
            while($row = mysqli_fetch_array($queryTask)){ ?>
                <a href="/webBrainOp/component/sm/cards?id=<?=$row['iddetailOrder']?>">
                    <div class="br-card" style="width: 100%;">
                        <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $date = date("Y-m-d");
                        if($row['deadline'] > $date){ ?>
                            <div class="alert alert-danger" role="alert">
                                A simple danger alertócheck it out!
                            </div>
                        <?php }
                        ?>
                        <h1><?=$row["project_name"]?></h1>
                        <?php
                        $progid = $row['iddetailOrder'];
                        $total  = mysqli_query($connect, "SELECT * FROM `listtask` WHERE iddetailOrder=$progid");
                        $done  = mysqli_query($connect, "SELECT * FROM `listtask` WHERE iddetailOrder=$progid && status='Done'");
                        // $new_width = (mysqli_num_rows($done) / 100) * mysqli_num_rows($total);

                        $count1 = mysqli_num_rows($done) / mysqli_num_rows($total);
                        $count2 = $count1 * 100;
                        $new_width = number_format($count2, 0);
                        ?>
                        <p>Deadline : <strong><?=$row['deadline']?></strong></p>
                            <?php
                            if($new_width !== '100'){
                                echo '<p style="margin: 0;">'.$new_width.'%</p>';
                            }else{
                                echo '<p style="margin: 0;">Done</p>';
                            }
                            ?>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?=$new_width?>%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="1"></div>
                            </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Fungsinya hampir sama dengan $_GET
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

    // Jika processnya sama dengan sukses maka dia akan memunculkan alert dari sweetalert
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
