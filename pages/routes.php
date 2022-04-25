<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){
        case '':
            include "dashboard.php";
            break;
        case 'dosen':
            include "dosen.php";
            break;
        case 'matakuliah':
            include "matakuliah.php";
            break;
        default:
            include "404.php";
            break;
    }
} else {
    include "dashboard.php";
}
    

?>