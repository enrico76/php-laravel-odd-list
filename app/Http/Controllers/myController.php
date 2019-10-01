<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function odd()
    {
      $numDispari = [];
      for ($i=10; $i <= 100 ; $i+=2) {
        $numDispari[] = $i;
      }
      return view('odd', compact('numDispari'));
    }
}
