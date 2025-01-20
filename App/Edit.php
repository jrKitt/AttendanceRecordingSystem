<?php 

    require_once '../DB/db.php';

    $sql = "UPDATE  mains  SET LOGS_DATE ='".$_POST['__caseDate']."', LOGS_CASE_NUMBER ='".$_POST['__caseNumber']."', LOGS_CASE_CONTACT ='".$_POST['__caseContact']."', LOGS_LOCATION ='".$_POST['__caseLocation']."', LOGS_RANGE_TIME ='".$_POST['__caseRange']."', LOGS_PHONE ='".$_POST['__casePhone']."', LOGS_TECHNICIANS = '".$_POST['__caseTechnician']."' WHERE LOGS_CASE_NUMBER = '".$_POST['__caseNumber']."'";
    $query = $db->query($sql);
    if($query){
        header("Refresh:1.3; url=../index.php");
                include("../Asset/Header.php");
                echo "<script>setTimeout(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ',
                    text: 'ระบบกำลังพาคุณไป' ,
                    showCancelButton: false,
                    showConfirmButton: false
                }, function() {
                    window.location = '../index.php';
                });
                 });</script>";   
        
    } else {
        echo "Err";
    }
    

?>