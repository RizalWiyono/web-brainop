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
	<title>Dashboard | User</title>

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
                    <!-- <a class="dropdown-item" href="#">Cart and pay</a> -->
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
                        <a href="#" class="active">
                            <svg width="17" height="17" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 11C11.8924 11 13.2277 10.4469 14.2123 9.46231C15.1969 8.47774 15.75 7.14239 15.75 5.75C15.75 4.35761 15.1969 3.02226 14.2123 2.03769C13.2277 1.05312 11.8924 0.5 10.5 0.5C9.10761 0.5 7.77226 1.05312 6.78769 2.03769C5.80312 3.02226 5.25 4.35761 5.25 5.75C5.25 7.14239 5.80312 8.47774 6.78769 9.46231C7.77226 10.4469 9.10761 11 10.5 11V11ZM14 5.75C14 6.67826 13.6313 7.5685 12.9749 8.22487C12.3185 8.88125 11.4283 9.25 10.5 9.25C9.57174 9.25 8.6815 8.88125 8.02513 8.22487C7.36875 7.5685 7 6.67826 7 5.75C7 4.82174 7.36875 3.9315 8.02513 3.27513C8.6815 2.61875 9.57174 2.25 10.5 2.25C11.4283 2.25 12.3185 2.61875 12.9749 3.27513C13.6313 3.9315 14 4.82174 14 5.75V5.75ZM21 19.75C21 21.5 19.25 21.5 19.25 21.5H1.75C1.75 21.5 0 21.5 0 19.75C0 18 1.75 12.75 10.5 12.75C19.25 12.75 21 18 21 19.75ZM19.25 19.743C19.2482 19.3125 18.9805 18.0175 17.794 16.831C16.653 15.69 14.5058 14.5 10.5 14.5C6.4925 14.5 4.347 15.69 3.206 16.831C2.0195 18.0175 1.7535 19.3125 1.75 19.743H19.25Z" fill="#2D2D2D"/>
                            </svg>
                            <span>
                                Personal data
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
                <h1>Profile</h1>
            </div>
            <?php
            $queryBiodata  = mysqli_query($connect, "SELECT * FROM datauser WHERE idaccount=$idAccount");
            if(mysqli_num_rows($queryBiodata) > 0){ 
            while($row = mysqli_fetch_array($queryBiodata)){ ?>
            <form action="fetch/updateData.php" method="post">
                <input type="hidden" name="id" value="<?=$idAccount?>">
                <div class="content mt-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" value="<?=$row['name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- <div class="col-md-6" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" name="first_name" value="<?=$row['first_name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="last_name" value="<?=$row['last_name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-4" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Telephone</label>
                                    <input type="number" name="telp" value="<?=$row['no_telp']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birth Date</label>
                                    <input type="date" name="birth_date" value="<?=$row['birth_date']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birth Place</label>
                                    <input type="text" name="birth_place" value="<?=$row['birth_place']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                    <select name="gender" class="form-control" id="">
                                        <option value="<?=$row['gender']?>"><?=$row['gender']?></option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Religious</label>
                                    <input type="text" name="religous" value="<?=$row['religious']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header flex justify-content-between align-items-center">
                <h1>Address</h1>
            </div>
            <div class="content mt-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6" style="padding-left: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Street</label>
                                <input type="text" name="street" value="<?=$row['street']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" name="city" value="<?=$row['city']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6" style="padding-left: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country</label>
                                <input type="text" name="country" value="<?=$row['country']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Zip Code</label>
                                <input type="number" name="zip_code" value="<?=$row['zip_code']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="header flex justify-content-between align-items-center">
                <h1>Change password</h1>
            </div>
            <div class="content mt-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6" style="padding-left: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password Now</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <button type="submit" class="btn btn-light" style="background-color: #98ACF8;">Save All</button>
            </form>
            <?php } 
            }else{ ?>
            <form action="fetch/inputData.php" method="post">
                <input type="hidden" name="id" value="<?=$idAccount?>">
                <div class="content mt-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <!-- <div class="col-md-6" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-4" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Telephone</label>
                                    <input type="number" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birth Date</label>
                                    <input type="date" name="birth_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birth Place</label>
                                    <input type="text" name="birth_place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6" style="padding-left: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>
                                    <select name="gender" class="form-control" id="">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding-right: 0;">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Religious</label>
                                    <input type="text" name="religous" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="header flex justify-content-between align-items-center">
                <h1>Address</h1>
            </div>
            <div class="content mt-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6" style="padding-left: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Street</label>
                                <input type="text" name="street" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6" style="padding-left: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country</label>
                                <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Zip Code</label>
                                <input type="number" name="zip_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="header flex justify-content-between align-items-center">
                <h1>Change password</h1>
            </div>
            <div class="content mt-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6" style="padding-left: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password Now</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right: 0;">
                            <div class="form-group">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <button type="submit" class="btn btn-light" style="background-color: #98ACF8;">Save All</button>
            </form>
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
			title: 'Data Berhasil Disimpan  !',
			showConfirmButton: false,
			timer: 1500
		})
	}else if(param === "up-success"){
        Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: 'Perubahan Berhasil!',
			showConfirmButton: false,
			timer: 1500
		})
    }
</script>
</html>
