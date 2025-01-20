<?php 

    require_once '../DB/db.php';

    $sql = "INSERT INTO mains(LOGS_ID, LOGS_DATE, LOGS_CASE_NUMBER, LOGS_CASE_CONTACT, LOGS_LOCATION, LOGS_RANGE_TIME, LOGS_PHONE, LOGS_TECHNICIANS)
    VALUE ('', '".$_POST['__caseDate']."', '".$_POST['__caseNumber']."', '".$_POST['__caseContact']."', '".$_POST['__caseLocation']."', '".$_POST['__caseRange']."'
    , '".$_POST['__casePhone']."', '".$_POST['__caseTechnician']."')
    ";
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
                    window.location = '../../Frontend/teacher/index.php';
                });
                 });</script>";   
    } else {
        echo "Err";
    }

?>
