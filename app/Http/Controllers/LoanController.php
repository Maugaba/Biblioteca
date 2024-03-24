<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Libros;

class LoanController extends Controller
{
    public function index()
    {
        return view('Loan.index');
    }

    public function create()
    {
        return view('Loan.create');
    }

    public function edit($id)
    {
        return view('Loans.edit');
    }
}