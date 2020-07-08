<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function test(Request $request)
    {
        $return = $request->input('one.0.a');
        return response()->json($return);
    }
}
