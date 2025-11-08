<?php

    include_once(__DIR__ . '../../koneksi.php');

    session_start();

        
        $nama = $_POST['Nama'];
        $pass = $_POST['Pass'];

    try{
        $sql = "SELECT Id_Admin, Nama, Pass, No_HP FROM admin WHERE Nama = ? LIMIT 1";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("s", $nama);
        $stmt->execute();
        $result = $stmt -> get_result();


        if($result->num_rows === 1){
            $row = $result->fetch_assoc();
            if($pass === $row['Pass']){ 
                
                $_SESSION['Nama'] = $row['Nama'];
                header("Location: ../view/index.php");
                exit();
              }         
            exit();
        } else {
            header("Location: ../view/login.php");
        }
        $stmt->close();
    } catch (mysqli_sql_exception $e){
        echo "Error: " . $e->getMessage();
    }
?>