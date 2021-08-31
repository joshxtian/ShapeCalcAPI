<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Math extends Controller
{
    public function CalcPerRect(Request $request) {
        $width = $request->input('width');
        $length = $request->input('length');

        if(!$width) {
            return response("There is no width");
        }
        if(!$length) {
            return response("There is no length");
        }
        $answer = 2 * ($length + $width);
        return response($answer);
    }

    public function CalcVolCub(Request $request) {
        $length = $request->input('length');
        $width = $request->input('width');
        $height = $request->input('height');

        if(!$length) {
            return response("There is no length");
        }
        if(!$width) {
            return response("There is no width");
        }
        if(!$height) {
            return response("There is no height");
        }

        $answer = $length * $width * $height;
        return response($answer);
    }

    public function AreaSquare(Request $request) {
        $side = $request->input('side');
      

        if(!$side) {
            return response("There is no side");
        }
        $answer = $side * $side;
        return response($answer);
    }
}
