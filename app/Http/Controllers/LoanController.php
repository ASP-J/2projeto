<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Http\Resources\LoanResource;
use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return LoanResource::collection($loans);
    }


    public function store(LoanRequest $request)
    {
        $data = $request->validated();
        $loan = Loan::create($data);
        return LoanResource::make($loan);
    }
    public function show($id)
    {
        $loan = Loan::find($id);
        return LoanResource::make($loan);
    }

    public function update(Request $request, Loan $loan)
    {
        $data = $request->validated();
        $loan->update($data);
        return LoanResource::make($loan);
    }
    public function destroy($id)
    {
        Loan::destroy($id);
        return response()->json([], 200);
    }

}
