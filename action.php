<?php

require_once './vendor/autoload.php';
use App\classes\Student;
use App\classes\SerialNumber;

$serialResult = [];


if (isset($_GET['page'])) {
    if ($_GET['page'] == 'Home') {
        include './pages/home.php';
    }elseif ($_GET['page'] == 'About'){
        include './pages/about.php';
    }elseif ($_GET['page'] == 'Contact'){
        include './pages/contact.php';
    }elseif ($_GET['page'] == 'All-student'){

        $allStudent = new Student();
        $allStudentData = $allStudent->getAllStudentData();

        include './pages/all-student.php';

    }elseif ($_GET['page'] == 'Details'){

        $id = $_GET['id'];
        $allStudent = new Student();
        $singleData = $allStudent->getSingleStudentData( $id );

        include './pages/details.php';

    }elseif ($_GET['page'] == 'Serial-number'){

        include './pages/serial-number.php';
    }
    else {
        echo 'no page found';
    }
}elseif (isset($_POST['serial_btn'])) {
    $serialNumber = new SerialNumber($_POST);
    $serialResult = $serialNumber->serialNumberResult();

    include './pages/serial-number.php';
}