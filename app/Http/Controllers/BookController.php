<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function createBook(Request $request){
        Book::create([
            'Judul' => $request->Judul,
            'Author' => $request->Author,
            'ReleasedDate' => $request->ReleasedDate
        ]);

        return redirect('/');
    }

    public function readBook(){
        $books = Book::all();

        return view('viewBook', compact('books'));
    }

    public function updateBook($id){
        $book = Book::findOrFail($id);

        return view('updateBook', compact('book'));
    }

    public function updatingBook(Request $request, $id){
        Book::findOrFail($id)->update([
            'Judul' => $request->Judul,
            'Author' => $request->Author,
            'ReleasedDate' => $request->ReleasedDate
        ]);

        return redirect('/read');
    }

    public function deleteBook($id){
        Book::destroy($id);

        return back();
    }
}
