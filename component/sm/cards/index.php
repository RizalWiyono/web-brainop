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
	<title>Cards | Scrum Master</title>

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
            <h1>Gucci Dashboard Client</h1>
            <a href="../boards">
                <button class="btn btn-primary">< Back</button>
            </a>
        </div>
        <div class="main-content p-4">
            <table class="br-card-table">
                <thead>
                    <tr>
                        <th>
                            <span style="background: #BEDCFA;">To Do</span>
                        </th>
                        <th>
                            <span style="background: #98ACF8;">In Progress</span>
                        </th>
                        <th>
                            <span style="background: #B088F9;">Quality Check</span>
                        </th>
                        <th>
                            <span style="background: #DA9FF9;">Done</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php
                            $queryTaskDoing  = mysqli_query($connect, "SELECT * FROM listtask WHERE status='Doing' && iddetailOrder='".$_GET['id']."'");
                            while($rowDoing = mysqli_fetch_array($queryTaskDoing)){ ?>
                                <div class="place-br-card">
                                    <div class="br-card" data-toggle="modal" data-target="#desc<?=$rowDoing["idlistTask"]?>">
                                        <h1><?=$rowDoing["task_name"]?></h1>

                                        <?php 
                                        $idListTaskDoing = $rowDoing["idlistTask"];
                                        $queryCountContribTaskDoing  = mysqli_query($connect, "SELECT * FROM contributiontask WHERE idlistTask=$idListTaskDoing"); ?>

                                        <div class="contribution-task d-flex">
                                            <?php for ($x = 1; $x <= mysqli_num_rows($queryCountContribTaskDoing); $x++) { ?>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                            <?php } ?>

                                            <svg data-toggle="modal" data-target="#doing<?=$rowDoing["idlistTask"]?>" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99984 7.00033H4.6665M6.99984 4.66699V7.00033V4.66699ZM6.99984 7.00033V9.33366V7.00033ZM6.99984 7.00033H9.33317H6.99984Z" stroke="#CDCDCD" stroke-linecap="round"/>
                                                <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="#CDCDCD"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- Modal Desc -->
                                    <div class="modal fade" id="desc<?=$rowDoing["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <span class="badge badge-pill badge-info" data-toggle="modal" data-target="#activity<?=$rowDoing["idlistTask"]?>">Riwayat Aktivitas</span>
                                                        <h5>Title:</h5>
                                                        <h6><?=$rowDoing["task_name"]?></h6>
                                                        <h5>Description:</h5>
                                                        <h6><?=$rowDoing["description"]?></h6>
                                                        <h5>Deadline:</h5>
                                                        <h6><?=$rowDoing["deadline"]?></h6>
                                                        <h5>Additional Link:</h5>
                                                        <h6><?=$rowDoing["additional_link"]?></h6>
                                                    </div>
                                                    <div>
                                                        <h5>Comment:</h5>
                                                        <?php
                                                            $idTask = $rowDoing["idlistTask"];
                                                            $queryComment  = mysqli_query($connect, "SELECT * FROM `commenttask` INNER JOIN dataemployee ON commenttask.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idTask;");
                                                            while($comment = mysqli_fetch_array($queryComment)){ ?>
                                                                <div class="d-flex align-items-center">
                                                                    <img
                                                                    style="width: 15px;
                                                                    height: 15px;
                                                                    object-fit: cover;
                                                                    border-radius: 1000px;"
                                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                                                    <p style="margin: 0; padding-left: 8px;"><?=$comment["comment"]?></p>
                                                                </div>
                                                            <?php } ?>
                                                        <form action="process/addComment.php" method="post" style="width: min-content;">
                                                            <input type="hidden" name="id" value="<?=$rowDoing["idlistTask"]?>">
                                                            <input type="hidden" name="idPage" value="<?=$_GET["id"]?>">
                                                            <?php
                                                            $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                            while($row = mysqli_fetch_array($queryMember)){ ?>
                                                            <input type="hidden" name="idEmployee" value="<?=$row['iddataEmployee']?>">
                                                            <?php } ?>
                                                            <div class="d-flex">
                                                                <input type="text" name="comment" >
                                                                <button type="submit">+</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Activity -->
                                    <div class="modal fade" id="activity<?=$rowDoing["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Riwayat Activitas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `activity` INNER JOIN dataemployee ON activity.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idListTaskDoing");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <div class="mt-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge badge-pill badge-light"><?=$row["name"]?></span>
                                                            <span class="badge badge-pill badge-light"><?=$row["activity"]?></span>
                                                            <span class="badge badge-pill badge-warning"><?=$row["date"]?></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="doing<?=$rowDoing["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <form action="process/addMember.php" method="post">
                                                <input type="hidden" name="id" value="<?=$rowDoing['idlistTask']?>">
                                                <input type="hidden" name="idPage" value="<?=$_GET['id']?>">
                                                <select name="member" class="form-control">
                                                    <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <option value="<?=$row['iddataEmployee']?>"><?=$row["name"]?> (<?=$row["role"]?>)</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="process/moveTask.php" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?=$rowDoing['idlistTask']?>">
                                        <input type="hidden" class="form-control" name="status" value="<?=$rowDoing['status']?>">
                                        <input type="hidden" class="form-control" name="param" value="<?=$_GET['id']?>">
                                        <button class="move-card">
                                            >
                                        </button>
                                    </form>
                                </div>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            $queryTaskProgress  = mysqli_query($connect, "SELECT * FROM listtask WHERE status='Progress' && iddetailOrder='".$_GET['id']."'");
                            while($rowProgress = mysqli_fetch_array($queryTaskProgress)){ ?>
                                <div class="place-br-card">
                                    <form action="process/moveTask.php" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?=$rowProgress['idlistTask']?>">
                                        <input type="hidden" class="form-control" name="status" value="Back-<?=$rowProgress['status']?>">
                                        <input type="hidden" class="form-control" name="param" value="<?=$_GET['id']?>">
                                        <button class="move-card">
                                            <
                                        </button>
                                    </form>
                                    <div class="br-card" data-toggle="modal" data-target="#desc<?=$rowProgress["idlistTask"]?>">
                                        <h1><?=$rowProgress["task_name"]?></h1>

                                        <?php 
                                        $idListTaskProgress = $rowProgress["idlistTask"];
                                        $queryCountContribTaskProgress = mysqli_query($connect, "SELECT * FROM contributiontask WHERE idlistTask=$idListTaskProgress"); ?>

                                        <div class="contribution-task d-flex">
                                            <?php for ($x = 1; $x <= mysqli_num_rows($queryCountContribTaskProgress); $x++) { ?>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                            <?php } ?>

                                            <svg data-toggle="modal" data-target="#progress<?=$rowProgress["idlistTask"]?>" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99984 7.00033H4.6665M6.99984 4.66699V7.00033V4.66699ZM6.99984 7.00033V9.33366V7.00033ZM6.99984 7.00033H9.33317H6.99984Z" stroke="#CDCDCD" stroke-linecap="round"/>
                                                <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="#CDCDCD"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- Modal Desc -->
                                    <div class="modal fade" id="desc<?=$rowProgress["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <span class="badge badge-pill badge-info" data-toggle="modal" data-target="#activity<?=$rowProgress["idlistTask"]?>">Riwayat Aktivitas</span>
                                                        <h5>Title:</h5>
                                                        <h6><?=$rowProgress["task_name"]?></h6>
                                                        <h5>Description:</h5>
                                                        <h6><?=$rowProgress["description"]?></h6>
                                                        <h5>Deadline:</h5>
                                                        <h6><?=$rowProgress["deadline"]?></h6>
                                                        <h5>Additional Link:</h5>
                                                        <h6><?=$rowProgress["additional_link"]?></h6>
                                                    </div>
                                                    <div>
                                                        <h5>Comment:</h5>
                                                        <?php
                                                            $idTask = $rowProgress["idlistTask"];
                                                            $queryComment  = mysqli_query($connect, "SELECT * FROM `commenttask` INNER JOIN dataemployee ON commenttask.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idTask;");
                                                            while($comment = mysqli_fetch_array($queryComment)){ ?>
                                                                <div class="d-flex align-items-center">
                                                                    <img
                                                                    style="width: 15px;
                                                                    height: 15px;
                                                                    object-fit: cover;
                                                                    border-radius: 1000px;"
                                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                                                    <p style="margin: 0; padding-left: 8px;"><?=$comment["comment"]?></p>
                                                                </div>
                                                            <?php } ?>
                                                        <form action="process/addComment.php" method="post" style="width: min-content;">
                                                            <input type="hidden" name="id" value="<?=$rowDoing["idlistTask"]?>">
                                                            <input type="hidden" name="idPage" value="<?=$_GET["id"]?>">
                                                            <?php
                                                            $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                            while($row = mysqli_fetch_array($queryMember)){ ?>
                                                            <input type="hidden" name="idEmployee" value="<?=$row['iddataEmployee']?>">
                                                            <?php } ?>
                                                            <div class="d-flex">
                                                                <input type="text" name="comment" >
                                                                <button type="submit">+</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Activity -->
                                    <div class="modal fade" id="activity<?=$rowProgress["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Riwayat Activitas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `activity` INNER JOIN dataemployee ON activity.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idListTaskProgress");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <div class="mt-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge badge-pill badge-light"><?=$row["name"]?></span>
                                                            <span class="badge badge-pill badge-light"><?=$row["activity"]?></span>
                                                            <span class="badge badge-pill badge-warning"><?=$row["date"]?></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="progress<?=$rowProgress["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <form action="process/addMember.php" method="post">
                                                <input type="hidden" name="id" value="<?=$rowProgress['idlistTask']?>">
                                                <input type="hidden" name="idPage" value="<?=$_GET['id']?>">
                                                <select name="member" class="form-control">
                                                    <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <option value="<?=$row['iddataEmployee']?>"><?=$row["name"]?> (<?=$row["role"]?>)</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="process/moveTask.php" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?=$rowProgress['idlistTask']?>">
                                        <input type="hidden" class="form-control" name="status" value="<?=$rowProgress['status']?>">
                                        <input type="hidden" class="form-control" name="param" value="<?=$_GET['id']?>">
                                        <button class="move-card">
                                            >
                                        </button>
                                    </form>
                                </div>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            $queryTaskCheck  = mysqli_query($connect, "SELECT * FROM listtask WHERE status='Check' && iddetailOrder='".$_GET['id']."'");
                            while($rowCheck = mysqli_fetch_array($queryTaskCheck)){ ?>
                                <div class="place-br-card">
                                    <form action="process/moveTask.php" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?=$rowCheck['idlistTask']?>">
                                        <input type="hidden" class="form-control" name="status" value="Back-<?=$rowCheck['status']?>">
                                        <input type="hidden" class="form-control" name="param" value="<?=$_GET['id']?>">
                                        <button class="move-card">
                                            <
                                        </button>
                                    </form>
                                    <div class="br-card" data-toggle="modal" data-target="#desc<?=$rowCheck["idlistTask"]?>">
                                        <h1><?=$rowCheck["task_name"]?></h1>
                                        
                                        <?php 
                                        $idListTaskCheck = $rowCheck["idlistTask"];
                                        $queryCountContribTaskCheck = mysqli_query($connect, "SELECT * FROM contributiontask WHERE idlistTask=$idListTaskCheck"); ?>

                                        <div class="contribution-task d-flex">
                                            <?php for ($x = 1; $x <= mysqli_num_rows($queryCountContribTaskCheck); $x++) { ?>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                            <?php } ?>

                                            <svg data-toggle="modal" data-target="#check<?=$rowCheck["idlistTask"]?>" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99984 7.00033H4.6665M6.99984 4.66699V7.00033V4.66699ZM6.99984 7.00033V9.33366V7.00033ZM6.99984 7.00033H9.33317H6.99984Z" stroke="#CDCDCD" stroke-linecap="round"/>
                                                <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="#CDCDCD"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- Modal Desc -->
                                    <div class="modal fade" id="desc<?=$rowCheck["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <span class="badge badge-pill badge-info" data-toggle="modal" data-target="#activity<?=$rowCheck["idlistTask"]?>">Riwayat Aktivitas</span>
                                                        <h5>Title:</h5>
                                                        <h6><?=$rowCheck["task_name"]?></h6>
                                                        <h5>Description:</h5>
                                                        <h6><?=$rowCheck["description"]?></h6>
                                                        <h5>Deadline:</h5>
                                                        <h6><?=$rowCheck["deadline"]?></h6>
                                                        <h5>Additional Link:</h5>
                                                        <h6><?=$rowCheck["additional_link"]?></h6>
                                                    </div>
                                                    <div>
                                                        <h5>Comment:</h5>
                                                        <?php
                                                            $idTask = $rowCheck["idlistTask"];
                                                            $queryComment  = mysqli_query($connect, "SELECT * FROM `commenttask` INNER JOIN dataemployee ON commenttask.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idTask;");
                                                            while($comment = mysqli_fetch_array($queryComment)){ ?>
                                                                <div class="d-flex align-items-center">
                                                                    <img
                                                                    style="width: 15px;
                                                                    height: 15px;
                                                                    object-fit: cover;
                                                                    border-radius: 1000px;"
                                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                                                    <p style="margin: 0; padding-left: 8px;"><?=$comment["comment"]?></p>
                                                                </div>
                                                            <?php } ?>
                                                        <form action="process/addComment.php" method="post" style="width: min-content;">
                                                            <input type="hidden" name="id" value="<?=$rowDoing["idlistTask"]?>">
                                                            <input type="hidden" name="idPage" value="<?=$_GET["id"]?>">
                                                            <?php
                                                            $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                            while($row = mysqli_fetch_array($queryMember)){ ?>
                                                            <input type="hidden" name="idEmployee" value="<?=$row['iddataEmployee']?>">
                                                            <?php } ?>
                                                            <div class="d-flex">
                                                                <input type="text" name="comment" >
                                                                <button type="submit">+</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Activity -->
                                    <div class="modal fade" id="activity<?=$rowCheck["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Riwayat Activitas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `activity` INNER JOIN dataemployee ON activity.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idListTaskCheck");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <div class="mt-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge badge-pill badge-light"><?=$row["name"]?></span>
                                                            <span class="badge badge-pill badge-light"><?=$row["activity"]?></span>
                                                            <span class="badge badge-pill badge-warning"><?=$row["date"]?></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="check<?=$rowCheck["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <form action="process/addMember.php" method="post">
                                                <input type="hidden" name="id" value="<?=$rowCheck['idlistTask']?>">
                                                <input type="hidden" name="idPage" value="<?=$_GET['id']?>">
                                                <select name="member" class="form-control">
                                                    <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <option value="<?=$row['iddataEmployee']?>"><?=$row["name"]?> (<?=$row["role"]?>)</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="process/moveTask.php" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?=$rowCheck['idlistTask']?>">
                                        <input type="hidden" class="form-control" name="status" value="<?=$rowCheck['status']?>">
                                        <input type="hidden" class="form-control" name="param" value="<?=$_GET['id']?>">
                                        <button class="move-card">
                                            >
                                        </button>
                                    </form>
                                </div>
                            <?php } ?>
                        </td>
                        <td>
                            <?php
                            $queryTaskDone  = mysqli_query($connect, "SELECT * FROM listtask WHERE status='Done' && iddetailOrder='".$_GET['id']."'");
                            while($rowDone = mysqli_fetch_array($queryTaskDone)){ ?>
                                <div class="place-br-card">
                                    <form action="process/moveTask.php" method="post">
                                        <input type="hidden" class="form-control" name="id" value="<?=$rowDone['idlistTask']?>">
                                        <input type="hidden" class="form-control" name="status" value="Back-<?=$rowDone['status']?>">
                                        <input type="hidden" class="form-control" name="param" value="<?=$_GET['id']?>">
                                        <button class="move-card">
                                            <
                                        </button>
                                    </form>
                                    <div class="br-card" data-toggle="modal" data-target="#desc<?=$rowDone["idlistTask"]?>">
                                        <h1><?=$rowDone["task_name"]?></h1>
                                    
                                        <?php 
                                        $idListTaskDone = $rowDone["idlistTask"];
                                        $queryCountContribTaskDone = mysqli_query($connect, "SELECT * FROM contributiontask WHERE idlistTask=$idListTaskDone"); ?>

                                        <div class="contribution-task d-flex">
                                            <?php for ($x = 1; $x <= mysqli_num_rows($queryCountContribTaskDone); $x++) { ?>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                            <?php } ?>

                                            <svg data-toggle="modal" data-target="#done<?=$rowDone["idlistTask"]?>" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.99984 7.00033H4.6665M6.99984 4.66699V7.00033V4.66699ZM6.99984 7.00033V9.33366V7.00033ZM6.99984 7.00033H9.33317H6.99984Z" stroke="#CDCDCD" stroke-linecap="round"/>
                                                <path d="M6.99984 12.8337C10.2215 12.8337 12.8332 10.222 12.8332 7.00033C12.8332 3.77866 10.2215 1.16699 6.99984 1.16699C3.77818 1.16699 1.1665 3.77866 1.1665 7.00033C1.1665 10.222 3.77818 12.8337 6.99984 12.8337Z" stroke="#CDCDCD"/>
                                            </svg>
                                        </div>
                                    </div>

                                    <!-- Modal Desc -->
                                    <div class="modal fade" id="desc<?=$rowDone["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <span class="badge badge-pill badge-info" data-toggle="modal" data-target="#activity<?=$rowDone["idlistTask"]?>">Riwayat Aktivitas</span>
                                                        <h5>Title:</h5>
                                                        <h6><?=$rowDone["task_name"]?></h6>
                                                        <h5>Description:</h5>
                                                        <h6><?=$rowDone["description"]?></h6>
                                                        <h5>Deadline:</h5>
                                                        <h6><?=$rowDone["deadline"]?></h6>
                                                        <h5>Additional Link:</h5>
                                                        <h6><?=$rowDone["additional_link"]?></h6>
                                                    </div>
                                                    <div>
                                                        <h5>Comment:</h5>
                                                        <?php
                                                            $idTask = $rowDone["idlistTask"];
                                                            $queryComment  = mysqli_query($connect, "SELECT * FROM `commenttask` INNER JOIN dataemployee ON commenttask.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idTask;");
                                                            while($comment = mysqli_fetch_array($queryComment)){ ?>
                                                                <div class="d-flex align-items-center">
                                                                    <img
                                                                    style="width: 15px;
                                                                    height: 15px;
                                                                    object-fit: cover;
                                                                    border-radius: 1000px;"
                                                                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/No_image_%28male%29.svg/450px-No_image_%28male%29.svg.png" alt="" srcset="">
                                                                    <p style="margin: 0; padding-left: 8px;"><?=$comment["comment"]?></p>
                                                                </div>
                                                            <?php } ?>
                                                        <form action="process/addComment.php" method="post" style="width: min-content;">
                                                            <input type="hidden" name="id" value="<?=$rowDoing["idlistTask"]?>">
                                                            <input type="hidden" name="idPage" value="<?=$_GET["id"]?>">
                                                            <?php
                                                            $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                            while($row = mysqli_fetch_array($queryMember)){ ?>
                                                            <input type="hidden" name="idEmployee" value="<?=$row['iddataEmployee']?>">
                                                            <?php } ?>
                                                            <div class="d-flex">
                                                                <input type="text" name="comment" >
                                                                <button type="submit">+</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Activity -->
                                    <div class="modal fade" id="activity<?=$rowDone["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Riwayat Activitas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `activity` INNER JOIN dataemployee ON activity.iddataEmployee=dataemployee.iddataEmployee WHERE idlistTask=$idListTaskDone");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <div class="mt-2">
                                                        <div class="d-flex justify-content-between">
                                                            <span class="badge badge-pill badge-light"><?=$row["name"]?></span>
                                                            <span class="badge badge-pill badge-light"><?=$row["activity"]?></span>
                                                            <span class="badge badge-pill badge-warning"><?=$row["date"]?></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="done<?=$rowDone["idlistTask"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 0;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: left;">
                                                <form action="process/addMember.php" method="post">
                                                <input type="hidden" name="id" value="<?=$rowDone['idlistTask']?>">
                                                <input type="hidden" name="idPage" value="<?=$_GET['id']?>">
                                                <select name="member" class="form-control">
                                                    <?php
                                                    $queryMember  = mysqli_query($connect, "SELECT * FROM `account` INNER JOIN dataemployee ON account.idaccount=dataemployee.idaccount WHERE idlistAccess=2 OR idlistAccess=3;");
                                                    while($row = mysqli_fetch_array($queryMember)){ ?>
                                                    <option value="<?=$row['iddataEmployee']?>"><?=$row["name"]?> (<?=$row["role"]?>)</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="btn-add-task" onclick="showAddTask()">
        +
    </div>

    <div class="sidebar-overlay" id="sidebarAddTask" style="display: none;">
        <div class="overlay" onclick="hideAddTask()"></div>
        <div class="content">
            <form action="process/addTask.php" method="post">
                <h1>New Task</h1>

                <h3>Task Name</h3>
                <input type="text" class="form-control" name="task_name">
                <input type="hidden" class="form-control" name="param" value="<?=$_GET['id']?>">

                <h3>Description</h3>
                <textarea name="desc" id="" class="form-control" rows="5"></textarea>
                
                <h3>Deadline</h3>
                <input type="date" class="form-control" name="deadline">

                <h3>Additional link</h3>
                <input type="text" class="form-control" name="additional">

                <!-- <h3>Description</h3>
                <input type="text" class="form-control" name=""> -->

                <button type="submit">Save Task</button>
            </form>
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

    function hideAddTask() {
        document.getElementById("sidebarAddTask").style.display = "none";
    }

    function showAddTask() {
        document.getElementById("sidebarAddTask").style.display = "block";
    }
</script>
</html>
