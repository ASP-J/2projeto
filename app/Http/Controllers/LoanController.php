<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $books = Book::all();
        $users = User::all();

        return view('loans.create', compact('books', 'users'));
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        Loan::create($data);
        return redirect()->to('/loan');
    }
    public function show($id)
    {
        $loan = Loan::find($id);
        return view('loans.show')->with('loans', $loan);
    }
    public function edit(Loan $loan)
    {
        $books = Book::all();
        $users = User::all();
        return view('loans.edit', compact('loan','users','books'));
    }
    
    public function update(Request $request, Loan $loan)
    {
        $data = $request->all();
        $loan->update($data);
        return redirect('loan');
    }
    public function destroy($id)
    {
        Loan::destroy($id);
        return redirect()->to('/loan');
    }

}
