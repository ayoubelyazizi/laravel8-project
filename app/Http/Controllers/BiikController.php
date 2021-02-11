<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BiikController extends Controller
{
    //
    function show()
    {
        $data=Book::all();
        return view('dashboard', ['books'=>$data]);
    }
}
