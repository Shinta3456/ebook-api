<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120211,
            'Name' => 'Shinta Nuriyah',
            'Phone' => '0812260888',
            'Class' => 'XII RPL 7'
        ];
    }
}
