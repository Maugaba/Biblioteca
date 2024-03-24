<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libros;

class LoanController extends Controller
{
    public function index()
    {
        return view('loans.index');
    }

    public function create()
    {
        return view('loans.create');
    }

    public function edit($id)
    {
        return view('loans.edit', compact('loan'));
    }
}