<?php
/**
 * Created by PhpStorm.
 * User: soethihanaung
 * Date: 12/26/15
 * Time: 11:37 AM
 */

namespace App\Http\Controllers;


class TestController extends Controller
{

    public function index() {
        return "Hello from Controller!";
    }

    public function getView() {
        $students = [
            [
                "id"      => 1,
                "name"    => 'Aung Aung',
                "address" => 'Hledan'
            ],
            [
                'id'    => 2,
                'name'  => 'Hla Hla',
                "address"   => 'Pazuntaung'
            ]
        ];

        return view("test")->with("students", $students);
    }

}