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
	<title>Dashboard | Admin</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../../../src/images/favicon.png">

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="../../../src/css/style.css">

</head>
<body>
    <div class="flex">
        <div class="left-section">
            <div class="nav-dashboard">
                <div class="header">
                    <center>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                    </center>
                    <h1><?=$_SESSION["email"]?></h1>
                    <p>
                        Admin
                    </p>
                </div>

                <ul>
                    <li>
                        <a href="#" class="active">
                            <svg width="17" height="17" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 11C11.8924 11 13.2277 10.4469 14.2123 9.46231C15.1969 8.47774 15.75 7.14239 15.75 5.75C15.75 4.35761 15.1969 3.02226 14.2123 2.03769C13.2277 1.05312 11.8924 0.5 10.5 0.5C9.10761 0.5 7.77226 1.05312 6.78769 2.03769C5.80312 3.02226 5.25 4.35761 5.25 5.75C5.25 7.14239 5.80312 8.47774 6.78769 9.46231C7.77226 10.4469 9.10761 11 10.5 11V11ZM14 5.75C14 6.67826 13.6313 7.5685 12.9749 8.22487C12.3185 8.88125 11.4283 9.25 10.5 9.25C9.57174 9.25 8.6815 8.88125 8.02513 8.22487C7.36875 7.5685 7 6.67826 7 5.75C7 4.82174 7.36875 3.9315 8.02513 3.27513C8.6815 2.61875 9.57174 2.25 10.5 2.25C11.4283 2.25 12.3185 2.61875 12.9749 3.27513C13.6313 3.9315 14 4.82174 14 5.75V5.75ZM21 19.75C21 21.5 19.25 21.5 19.25 21.5H1.75C1.75 21.5 0 21.5 0 19.75C0 18 1.75 12.75 10.5 12.75C19.25 12.75 21 18 21 19.75ZM19.25 19.743C19.2482 19.3125 18.9805 18.0175 17.794 16.831C16.653 15.69 14.5058 14.5 10.5 14.5C6.4925 14.5 4.347 15.69 3.206 16.831C2.0195 18.0175 1.7535 19.3125 1.75 19.743H19.25Z" fill="#2D2D2D"/>
                            </svg>
                            <span>
                                Dashboard
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
                <h1>Dashboard</h1>
                <div class="search">
                    <form action="?" method="get">
                        <button type="submit">
                            <svg width="12" height="12" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.742 10.3441C12.7103 9.02279 13.144 7.38459 12.9563 5.75725C12.7687 4.12991 11.9735 2.63344 10.7298 1.56723C9.48616 0.501022 7.88579 -0.0562959 6.24888 0.00677721C4.61197 0.0698504 3.05923 0.748663 1.90131 1.90741C0.743395 3.06615 0.0656939 4.61938 0.00379204 6.25633C-0.0581098 7.89329 0.500353 9.49326 1.56745 10.7361C2.63455 11.979 4.13159 12.7732 5.75906 12.9597C7.38654 13.1462 9.02442 12.7113 10.345 11.7421H10.344C10.374 11.7821 10.406 11.8201 10.442 11.8571L14.292 15.7071C14.4795 15.8947 14.7339 16.0002 14.9992 16.0003C15.2645 16.0004 15.5189 15.8951 15.7065 15.7076C15.8942 15.5201 15.9997 15.2657 15.9997 15.0005C15.9998 14.7352 15.8945 14.4807 15.707 14.2931L11.857 10.4431C11.8213 10.4069 11.7828 10.3735 11.742 10.3431V10.3441ZM12 6.5001C12 7.22237 11.8578 7.93757 11.5814 8.60486C11.305 9.27215 10.8999 9.87847 10.3891 10.3892C9.87841 10.8999 9.27209 11.305 8.6048 11.5814C7.93751 11.8578 7.22231 12.0001 6.50004 12.0001C5.77777 12.0001 5.06257 11.8578 4.39528 11.5814C3.72799 11.305 3.12168 10.8999 2.61096 10.3892C2.10023 9.87847 1.69511 9.27215 1.41871 8.60486C1.1423 7.93757 1.00004 7.22237 1.00004 6.5001C1.00004 5.04141 1.57951 3.64246 2.61096 2.61101C3.64241 1.57956 5.04135 1.0001 6.50004 1.0001C7.95873 1.0001 9.35768 1.57956 10.3891 2.61101C11.4206 3.64246 12 5.04141 12 6.5001Z" fill="#C0C0C0"/>
                            </svg>
                        </button>
                        <input type="text" name="s" id="" placeholder="Search employee...">
                    </form>
                </div>
            </div>
            <div class="content mt-4">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if($_GET["s"]){
                        $search = $_GET["s"];
                        $queryUsers  = mysqli_query($connect, "SELECT account.idaccount, idlistAccess, email, name, idlistAccess, role FROM account INNER JOIN dataemployee ON account.idaccount = dataemployee.idaccount WHERE name Like '%$search%'");
                        }else{
                        $queryUsers  = mysqli_query($connect, "SELECT account.idaccount, idlistAccess, email, name, idlistAccess, role FROM account INNER JOIN dataemployee ON account.idaccount = dataemployee.idaccount");
                        }
                        while($row = mysqli_fetch_array($queryUsers)){ 
                            if($row['idaccount'] === $_GET['edit']){ ?>
                                <form action="fetch/edit.php" method="post">
                                    <tr>
                                        <td>
                                            <input type="text" name="idAccount" class="d-none" value="<?=$row['idaccount']?>">
                                            <input name="email" type="text" class="form-control" value="<?=$row["email"]?>">
                                        </td>
                                        <td>
                                            <input name="name" type="text" class="form-control" value="<?=$row["name"]?>">
                                        </td>
                                        <td>
                                            <select name="role" class="form-control" id="">
                                                <option value="<?=$row['idlistAccess']?>"><?=$row['role']?></option>
                                                <?php $queryAccess  = mysqli_query($connect, "SELECT * FROM listaccess");
                                                while($data = mysqli_fetch_array($queryAccess)){ ?>
                                                <option value="<?=$data['idlistAcccess']?>"><?=$data['name']?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="action-save">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.8308 3.08584L10.9142 0.169176C10.8597 0.115112 10.795 0.0723392 10.7239 0.0433098C10.6529 0.0142805 10.5768 -0.000434104 10.5 9.75e-06H1.16667C0.857247 9.75e-06 0.560501 0.122926 0.341708 0.341718C0.122916 0.56051 0 0.857257 0 1.16668V12.8333C0 13.1428 0.122916 13.4395 0.341708 13.6583C0.560501 13.8771 0.857247 14 1.16667 14H12.8333C13.1427 14 13.4395 13.8771 13.6583 13.6583C13.8771 13.4395 14 13.1428 14 12.8333V3.50001C14.0004 3.42324 13.9857 3.34713 13.9567 3.27606C13.9277 3.20499 13.8849 3.14035 13.8308 3.08584ZM4.66666 1.16668H9.33333V3.50001H4.66666V1.16668ZM9.33333 12.8333H4.66666V8.16667H9.33333V12.8333ZM10.5 12.8333V8.16667C10.5 7.85725 10.3771 7.56051 10.1583 7.34171C9.93949 7.12292 9.64275 7 9.33333 7H4.66666C4.35724 7 4.0605 7.12292 3.84171 7.34171C3.62291 7.56051 3.5 7.85725 3.5 8.16667V12.8333H1.16667V1.16668H3.5V3.50001C3.5 3.80943 3.62291 4.10617 3.84171 4.32496C4.0605 4.54376 4.35724 4.66667 4.66666 4.66667H9.33333C9.64275 4.66667 9.93949 4.54376 10.1583 4.32496C10.3771 4.10617 10.5 3.80943 10.5 3.50001V1.40584L12.8333 3.73917V12.8333H10.5Z" fill="#2D2D2D"/>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                            <?php }else{?>
                                <tr>
                                    <td><?=$row["email"]?></td>
                                    <td><?=$row["name"]?></td>
                                    <td><?=$row["role"]?></td>
                                    <?php
                                    if($row["role"] === "User"){ ?>
                                    <td>
                                        <button class="action-validate">
                                            <a href="?edit=<?=$row['idaccount']?>">
                                                Validate
                                            </a>
                                        </button>
                                    </td>
                                    <?php }else{ ?>
                                    <td>
                                        <button class="action-edit">
                                            <a href="?edit=<?=$row['idaccount']?>">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.1988 12.0661C11.1988 12.6184 10.7511 13.0661 10.1988 13.0661H1.93324C1.38095 13.0661 0.933234 12.6184 0.933234 12.0661V3.80043C0.933234 3.24815 1.38095 2.80043 1.93323 2.80043H6.90863C7.03239 2.80043 7.15107 2.75127 7.23858 2.66376C7.53254 2.3698 7.32435 1.86719 6.90863 1.86719H0.933234C0.685725 1.86719 0.448353 1.96551 0.273338 2.14053C0.0983226 2.31555 0 2.55292 0 2.80043V13.0661C0 13.3137 0.0983226 13.551 0.273338 13.7261C0.448353 13.9011 0.685725 13.9994 0.933234 13.9994H11.1988C11.4463 13.9994 11.6837 13.9011 11.8587 13.7261C12.0337 13.551 12.132 13.3137 12.132 13.0661V7.19332C12.132 6.77761 11.6294 6.56942 11.3355 6.86337C11.248 6.95088 11.1988 7.06957 11.1988 7.19332V12.0661Z" fill="#2D2D2D"/>
                                                    <path d="M13.7792 1.79329L12.2067 0.220768C12.1369 0.150789 12.054 0.0952668 11.9628 0.0573835C11.8715 0.0195002 11.7736 0 11.6748 0C11.576 0 11.4781 0.0195002 11.3868 0.0573835C11.2955 0.0952668 11.2126 0.150789 11.1428 0.220768L4.74552 6.6555L4.22758 8.89996C4.20551 9.00876 4.20783 9.12109 4.23437 9.22889C4.26091 9.33668 4.311 9.43725 4.38106 9.52337C4.45111 9.60949 4.53938 9.67901 4.63951 9.72694C4.73965 9.77486 4.84916 9.8 4.96016 9.80054C5.01754 9.80686 5.07544 9.80686 5.13281 9.80054L7.39591 9.30126L13.7792 2.85719C13.8492 2.7874 13.9047 2.70449 13.9426 2.61321C13.9805 2.52193 14 2.42407 14 2.32524C14 2.22641 13.9805 2.12855 13.9426 2.03727C13.9047 1.94599 13.8492 1.86308 13.7792 1.79329ZM6.91062 8.438L5.20281 8.81597L5.59943 7.12213L10.4149 2.27391L11.7308 3.58979L6.91062 8.438ZM12.2581 3.0625L10.9422 1.74663L11.6655 1.00936L12.9906 2.33457L12.2581 3.0625Z" fill="#2D2D2D"/>
                                                </svg>
                                            </a>
                                        </button>
                                        <button type="button" class="action-delete" data-toggle="modal" data-target="#exampleModal<?=$row['idaccount']?>">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.8125 4.8125C4.92853 4.8125 5.03981 4.85859 5.12186 4.94064C5.20391 5.02269 5.25 5.13397 5.25 5.25V10.5C5.25 10.616 5.20391 10.7273 5.12186 10.8094C5.03981 10.8914 4.92853 10.9375 4.8125 10.9375C4.69647 10.9375 4.58519 10.8914 4.50314 10.8094C4.42109 10.7273 4.375 10.616 4.375 10.5V5.25C4.375 5.13397 4.42109 5.02269 4.50314 4.94064C4.58519 4.85859 4.69647 4.8125 4.8125 4.8125ZM7 4.8125C7.11603 4.8125 7.22731 4.85859 7.30936 4.94064C7.39141 5.02269 7.4375 5.13397 7.4375 5.25V10.5C7.4375 10.616 7.39141 10.7273 7.30936 10.8094C7.22731 10.8914 7.11603 10.9375 7 10.9375C6.88397 10.9375 6.77269 10.8914 6.69064 10.8094C6.60859 10.7273 6.5625 10.616 6.5625 10.5V5.25C6.5625 5.13397 6.60859 5.02269 6.69064 4.94064C6.77269 4.85859 6.88397 4.8125 7 4.8125ZM9.625 5.25C9.625 5.13397 9.57891 5.02269 9.49686 4.94064C9.41481 4.85859 9.30353 4.8125 9.1875 4.8125C9.07147 4.8125 8.96019 4.85859 8.87814 4.94064C8.79609 5.02269 8.75 5.13397 8.75 5.25V10.5C8.75 10.616 8.79609 10.7273 8.87814 10.8094C8.96019 10.8914 9.07147 10.9375 9.1875 10.9375C9.30353 10.9375 9.41481 10.8914 9.49686 10.8094C9.57891 10.7273 9.625 10.616 9.625 10.5V5.25Z" fill="#2D2D2D"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6875 2.625C12.6875 2.85706 12.5953 3.07962 12.4312 3.24372C12.2671 3.40781 12.0446 3.5 11.8125 3.5H11.375V11.375C11.375 11.8391 11.1906 12.2842 10.8624 12.6124C10.5342 12.9406 10.0891 13.125 9.625 13.125H4.375C3.91087 13.125 3.46575 12.9406 3.13756 12.6124C2.80937 12.2842 2.625 11.8391 2.625 11.375V3.5H2.1875C1.95544 3.5 1.73288 3.40781 1.56878 3.24372C1.40469 3.07962 1.3125 2.85706 1.3125 2.625V1.75C1.3125 1.51794 1.40469 1.29538 1.56878 1.13128C1.73288 0.967187 1.95544 0.875 2.1875 0.875H5.25C5.25 0.642936 5.34219 0.420376 5.50628 0.256282C5.67038 0.0921872 5.89294 0 6.125 0L7.875 0C8.10706 0 8.32962 0.0921872 8.49372 0.256282C8.65781 0.420376 8.75 0.642936 8.75 0.875H11.8125C12.0446 0.875 12.2671 0.967187 12.4312 1.13128C12.5953 1.29538 12.6875 1.51794 12.6875 1.75V2.625ZM3.60325 3.5L3.5 3.55163V11.375C3.5 11.6071 3.59219 11.8296 3.75628 11.9937C3.92038 12.1578 4.14294 12.25 4.375 12.25H9.625C9.85706 12.25 10.0796 12.1578 10.2437 11.9937C10.4078 11.8296 10.5 11.6071 10.5 11.375V3.55163L10.3967 3.5H3.60325ZM2.1875 2.625V1.75H11.8125V2.625H2.1875Z" fill="#2D2D2D"/>
                                            </svg>
                                        </button>
                                    </td>

                                    <!-- Modal Looping Delete -->
                                    <div class="modal fade" id="exampleModal<?=$row['idaccount']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <h1>Deleted permanently</h1>
                                                <p>This data will be deleted permanently. Are you sure?</p>

                                                <div class="button flex">
                                                    <button class="cancel" data-dismiss="modal">Cancel</button>
                                                    <form action="fetch/delete.php" method="POST">
                                                        <input type="text" class="d-none" name="idAccount" value="<?=$row['idaccount']?>">
                                                        <button class="delete" type="submit">Deleted</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }
                                    ?>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
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
