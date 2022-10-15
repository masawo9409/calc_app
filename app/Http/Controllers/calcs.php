<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class calcs extends Controller
{
    public function result($number1, $variable, $number2)
    {
        if ($variable == 'addition') {
            $answer = $number1 + $number2;
        } elseif ($variable == 'subtraction') {
            $answer = $number1 - $number2;
        } elseif ($variable == 'multiplication') {
            $answer = $number1 * $number2;
        } elseif ($variable == 'division') {
            $answer = $number1 / $number2;
        }
        return view('message.calcs', ['answer' => $answer]);
    }
}


