<?php 

    session_start();
    header("Refresh:1.3; url=../login.php");
    include("../Asset/Header.php");
    echo "<script>setTimeout(function() {
    Swal.fire({
        icon: 'success',
        title: 'ออกจากระบบสำเร็จ',
        text: 'ระบบกำลังพาคุณไป' ,
        showCancelButton: false,
        showConfirmButton: false
    }, function() {
        window.location = '../../Frontend/teacher/index.php';
    });
     });</script>";   
    session_destroy();


?>  