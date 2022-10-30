<?php

require_once './vendor/autoload.php';
use App\classes\Student;


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

    }else {
        echo 'no page found';
    }
}