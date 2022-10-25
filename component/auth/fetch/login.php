<?php
    session_start();
    include '../../../src/connection/connection2.php';
    $password = md5($_POST['password']);  
    $email = $_POST['email'];  

        $sql = $pdo->prepare("SELECT * FROM account WHERE email=:a AND password=:b");
        $sql->bindParam(':a', $email);
        $sql->bindParam(':b', $password);
        $sql->execute(); 
        
        $data = $sql->fetch();

        if( !empty($data)){ 
            $_SESSION['password'] = $data['password']; 
            $_SESSION['email'] = $data['email']; 
            $_SESSION['idaccount'] = $data['idaccount']; 
            $_SESSION['idlistAccess'] = $data['idlistAccess']; 
            $idAkun = $data['idaccount'];

            if($data['idlistAccess'] == 6) {
                header("location: ../../admin/home/");   
            }elseif($data['idlistAccess'] == 1){
                include '../../../src/connection/connection.php';
                $queryBiodata  = mysqli_query($connect, "SELECT * FROM datauser WHERE idaccount=$idAkun");
                if(mysqli_num_rows($queryBiodata) > 0){
                    header("location: ../../user/order/");   
                }else{
                    header("location: ../../user/profile/");   
                }
            }elseif($data['idlistAccess'] == 5){
                header("location: ../../sm/boards/");   
            }elseif($data['idlistAccess'] == 2 || $data['idlistAccess'] === 3){
                header("location: ../../employee/boards/");   
            }elseif($data['idlistAccess'] == 4){
                header("location: ../../cs/chat/");   
            }
            
        }else{ 
            header("location: ../login.php?process=failed");
        }

?>