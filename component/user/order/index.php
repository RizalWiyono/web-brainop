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
    <script type="text/javascript" src="../../../src/ckeditor/ckeditor.js"></script>

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
                    <a class="nav-link" href="#">Order now</a>
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
    <div class="container">
        <div class="flex">
            <div class="w-100 py-4">
                <div class="header flex justify-content-between align-items-center">
                    <h1>Fill in the form to order easily.</h1>
                </div>
                <form action="fetch/inputOrder.php" method="post">
                    <input type="hidden" name="iduser" value="<?=$idUser?>">
                    <div class="content mt-4">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Project Name</label>
                                        <input type="text" class="form-control" name="project_name" placeholder="e.g “Mobile Dev Gucci”" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company Name</label>
                                        <input type="text" class="form-control" name="company_name" placeholder="e.g “Gucci”" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Project Package</label>
                                        <select name="project_package" class="form-control" id="">
                                            <option value="">Select package</option>
                                            <?php
                                            $queryService  = mysqli_query($connect, "SELECT * FROM serviceprice");
                                            while($row = mysqli_fetch_array($queryService)){
                                                if($row['name'] == $_GET['pk']){ ?>
                                                    <option selected value="<?=$row['name']?>"><?=$row['name']?></option>
                                                <?php }else{ ?>
                                                    <option value="<?=$row['name']?>"><?=$row['name']?></option>
                                                <?php }
                                            ?>
                                            <?php } ?>
                                            <option value="Custom">Custom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Deadline</label>
                                        <input type="date" name="deadline" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">App Category</label>
                                        <select name="app_category" class="form-control" id="">
                                            <option value="">Select Category</option>
                                            <?php
                                            $queryAppCategory  = mysqli_query($connect, "SELECT * FROM appcategory");
                                            while($row = mysqli_fetch_array($queryAppCategory)){
                                            ?>
                                            <option value="<?=$row['idappCategory']?>"><?=$row['name']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Resource</label>
                                        <textarea name="resource" class="form-control" placeholder="Add resource link" id="" rows="5"></textarea>
                                        <span style="font-size: 13px;">*if you enter more than one resource, separate them with a comma ","</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12" style="padding: 0;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea   class="ckeditor" id="ckedtor" placeholder="A brief description of your project. Like writing app features." name="description" id="" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-light" style="background-color: #98ACF8;">Konsultasikan</button>
                </form>
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
