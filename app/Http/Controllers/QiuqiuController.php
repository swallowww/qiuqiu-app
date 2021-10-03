<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QiuqiuController extends Controller
{
    public function getReport(Request $request)
    {
        $input = $request->all();
        return json_encode($input);
    }
}
