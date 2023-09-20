<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShallController extends Controller
{
    //
    public function npmShell()
    {
        $output = shell_exec('npm run build');
        return $output;
    }
}
