<?php

namespace App\Http\Controllers;


use App\Http\Requests\BookRequest;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return BookResource::collection($books);
    }

    public function store(BookRequest $request)
    {
        $data = $request->validated();
        $book = Book::create($data);
        return BookResource::make($book);
    }


    public function show($id)
    {
        $book = Book::find($id);
        return BookResource::make($book);
    }

    public function update(BookRequest $request, $id)
    {
        $book = Book::find($id);
        $date = $request->validated();
        $book->update($date);
        return BookResource::make($book);
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return response()->json([], 200);
    }
}
