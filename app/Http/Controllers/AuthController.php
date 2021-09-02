<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            'NIS' => 3103119180,
            'Name' => 'Shefira Tri Sadraharani',
            'Gender' => 'Female',
            'Phone' => '082322952609',
            'Class' => 'XII RPL 6'
        ];
    }
}
