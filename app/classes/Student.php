<?php

namespace App\classes;

class Student
{
    public $studentData;

    public function __construct()
    {
        $this->studentData = [
            0 => [
                'id'=> 1,
                'profile-photo' => './assets/img/students/student-7.png',
                'name' => 'abdullah al mamun',
                'title' => 'computer engineering',
                'contact' => [
                    'email' => 'abdullahalmamun@mail.com',
                    'phone' => '720-989-2902'
                ],
                'description' => 'The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university.'
            ],
            1 => [
                'id'=> 2,
                'profile-photo' => './assets/img/students/student-2.jpg',
                'name' => 'abdullah al anas',
                'title' => 'computer science',
                'contact' => [
                    'email' => 'abdullahalanas@mail.com',
                    'phone' => '720-989-2455'
                ],
                'description' => 'The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university.'
            ],
            2 => [
                'id'=> 3,
                'profile-photo' => './assets/img/students/student-6.png',
                'name' => 'abdullah al mahmud',
                'title' => 'electrical engineering',
                'contact' => [
                    'email' => 'abdullahalmahmud@mail.com',
                    'phone' => '720-989-584564'
                ],
                'description' => 'The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university.'
            ],
            3 => [
                'id'=> 4,
                'profile-photo' => './assets/img/students/student-4.jpg',
                'name' => 'abdullah al masum',
                'title' => 'textile engineering',
                'contact' => [
                    'email' => 'abdullahalmasum@mail.com',
                    'phone' => '720-989-544454'
                ],
                'description' => 'The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university The definition of a student is someone who is learning at a school, or in any teaching environment. An example of a student is a second grader. An example of a student is someone going to a university.'
            ],
        ];
    }

    public function getAllStudentData() {

        return $this->studentData;
    }

    public function getSingleStudentData( $id ) {
        foreach ( $this->studentData as $sdata) {
            if ( $sdata['id'] == $id ) {
                return $sdata;
            }
        }
    }
}