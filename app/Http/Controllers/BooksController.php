<?php

namespace App\Http\Controllers;
use App\Models\BookModel;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class BooksController extends Controller
{
    public function create(){
        return view('books.addBook');

    }
    public function store(Request $request){
        $rules=[
            'isbn' => 'required|max:13',
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'details' => 'required',
            'stock' => 'required|numeric|min:0',
        ];
        $this->validate($request, $rules);
        $book = new BookModel();
        $book->isbn = $request->isbn;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->details = $request->details;
        $book->stock = $request->stock;
        $book->save();  

        return redirect()->route('home')->with('success', 'Book Added Successfully');
    }

    public function index(){
        $books= BookModel::all();
        return view('books.allBooks', compact('books'));
    }
    public function singlebook($bookId){
        $singleBook = BookModel::find($bookId);
        return view('books.details')->with('book', $singleBook);
    }
    public function delete($id){
        $book = BookModel::find($id);
        $book = BookModel::find($id);

        if ($book) {
            $book->delete(); // Delete the retrieved book
            // Optionally: Provide any feedback or perform additional actions after deletion
            return redirect()->back();
        } else {
            
        }
        
    }
    public function editItem($id){
        $book = BookModel::find($id);
        return view('books.editbook')->with('book', $book);
    }
    public function update($id, Request $request){
        $book = BookModel::find($id);
        
        $rules=[
            'isbn' => 'required|max:13',
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'details' => 'required',
            'stock' => 'required|numeric|min:0',
        ];
        $this->validate($request, $rules);
        $book->isbn = $request->isbn;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->details = $request->details;
        $book->stock = $request->stock;
        $book->save();  

        return redirect()->route('home');
    }
}
