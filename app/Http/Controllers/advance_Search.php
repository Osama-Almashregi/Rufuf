<?php

namespace App\Http\Controllers;

use App\Models\author;
use App\Models\book;
use App\Models\category;
use App\Models\language;
use App\Models\part;
use App\Models\publisher;
use Illuminate\Http\Request;
use App\Models\User;
use function Laravel\Prompts\search;

class advance_Search extends Controller
{
    public function getData()
    {
        return [
            ["book_id" => "1", "book_title" => "Book 1", "book_image" => "https://picsum.photos/200/300?random", "book_description" => "Description of Book 1"],
            ["book_id" => "2", "book_title" => "Book 2", "book_image" => "https://source.unsplash.com/random/200x300", "book_description" => "Description of Book 2"],
            ["book_id" => "3", "book_title" => "Book 3", "book_image" => "https://loremflickr.com/200/300", "book_description" => "Description of Book 3"],
            ["book_id" => "4", "book_title" => "Book 4", "book_image" => "https://placeimg.com/200/300/nature", "book_description" => "Description of Book 4"],
            ["book_id" => "5", "book_title" => "Book 5", "book_image" => "https://picsum.photos/200/300?random", "book_description" => "Description of Book 5"],
            ["book_id" => "6", "book_title" => "Book 6", "book_image" => "https://source.unsplash.com/random/200x300", "book_description" => "Description of Book 6"]
        ];
    }
    public function search(Request $request)
    {
        if ($request->all()) {
            if($request->lang_name){
                $books_lang=language::with(['books.authors'])->where('lang_name', 'like', '%' . $request->search_input . '%')->get();
                if ($books_lang->count() > 0) {
                    
                    return view('advance_Search.show_search', compact('books_lang'));
                } else {
                    return redirect('/advance_Search')->with('error', 'لا يوجد كتاب بهذا اللغة');
                }
            }
            if ($request->isbn) {
                $books = book::with('authors')->where('isbn', 'like', '%' . $request->search_input . '%')->get();
                if ($books->count() > 0) {
                    return view('advance_Search.show_search', compact('books'));
                } else {
                    return redirect('/advance_Search')->with('error', 'عن هذا الترقيم لا يوجد نتائج');
                }
            }
            if ($request->authors) {
                $books_authors = author::with('books')->where('author_name', 'like', '%' . $request->search_input . '%')->get();
                if ($books_authors->count() > 0) {
                    return view('advance_Search.show_search', compact('books_authors'));
                } else {
                    return redirect('/advance_Search')->with('error', 'لا يوجد كتاب باسم هذا المولف');
                }
            }
            if($request->publisher){
                $books_publisher = publisher::with(['books.authors'])->where('pub_name', 'like', '%' . $request->search_input . '%')->get();
                if($books_publisher->count() > 0){
                    return view('advance_Search.show_search', compact('books_publisher'));
                }else{
                    return redirect('/advance_Search')->with('error', 'لا يوجد كتاب بهذا الناشر');
                }
            }
            if($request->category){
                $book_categories = category::with(['books.authors'])->where('cat_name', 'like', '%' . $request->search_input . '%')->get();
                if($book_categories->count() > 0){
                    return view('advance_Search.show_search', compact('book_categories'));
                }else{
                    return redirect('/advance_Search')->with('error', 'لا يوجد كتاب بهذا التصنيف');
                }
            }
            if ($request->dewey_no) {
                $books = book::with('authors')->where('dewey_no', 'like', '%' . $request->search_input . '%')->get();
                if($books->count() > 0){
                    return view('advance_Search.show_search', compact('books'));
                }else{
                    return redirect('/advance_Search')->with('error', 'لا يوجد كتاب  بالتصنيف الديوي هذا');
                }
            }if($request->book_title){
                // dd($request->book_title);
                $books = book::with('authors')->where('title', 'like', '%' . $request->search_input . '%')->get();
                if($books->count() > 0){
                    return view('advance_Search.show_search', compact('books'));
                }else{
                    return redirect('/advance_Search')->with('error', 'لا يوجد كتاب بهذا الاسم');
                }
            }
            else{
                return redirect('/advance_Search')->with('error', 'انت لم تختار طريقة للبحث');
            }
        }
        return view('advance_Search.advance_Search');
    }
    // يمكنك أيضًا تخزينه في قاعدة البيانات إذا كنت ترغب في ذلك

    public function show(string $id)
    {
        return view('advance_Search.advance_Search', ['id' => $id]);
    }
}
