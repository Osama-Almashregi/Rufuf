<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Authors;
use App\Models\attachment;
use App\Models\lang_book_rel;
use Illuminate\Http\Request;
use App\Models\book;
use App\Models\author;
use App\Models\category;
use App\Models\language;
use App\Models\publisher;
use App\Models\book_author_rel;
use App\Models\book_publisher_rel;
use App\Models\part;
use App\Models\sery;
use App\Models\part_series_rel;
use Exception;

class Books extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function getData(){
    //   return [
    //       ["book_id"=>"1","book_title"=>"Book 1","book_image"=>"https://picsum.photos/200/300?random","book_description"=>"Description of Book 1"],
    //       ["book_id"=>"2","book_title"=>"Book 2","book_image"=>"https://source.unsplash.com/random/200x300","book_description"=>"Description of Book 2"],
    //       ["book_id"=>"3","book_title"=>"Book 3","book_image"=>"https://loremflickr.com/200/300","book_description"=>"Description of Book 3"],
    //       ["book_id"=>"4","book_title"=>"Book 4","book_image"=>"https://placeimg.com/200/300/nature","book_description"=>"Description of Book 4"],
    //       ["book_id"=>"5","book_title"=>"Book 5","book_image"=>"https://picsum.photos/200/300?random","book_description"=>"Description of Book 5"],
    //       ["book_id"=>"6","book_title"=>"Book 6","book_image"=>"https://source.unsplash.com/random/200x300","book_description"=>"Description of Book 6"]
    //   ];
    //  }
    public function index()
    {
        
        $book_modal = book::with('authors')->get();
        $book_category = category::get();
        $book_author = author::get();
        $book_publisher = publisher::get();
        $book_language = language::get();
        $series=sery::get();
        // return view('books.index', ["books" => $book_modal]);
        if (isset($_GET['search_word']) && $_GET['search_word'] != null) {
            $search_content = $_GET['search_word'];
        
            $books = book::where('title', 'like', '%' . $search_content . '%')->orWhere('subtitle', 'like', '%' . $search_content . '%')->orWhere('isbn','like','%'.$search_content.'%')->get();
        
            $output = '';
            
            if ($books->isEmpty()) {
                $output .= '<div class="text-center text-gray-500 py-3">لا يوجد كتب متاحة.</div>';
            } else {
                foreach ($books as $book) {
                    $output .= '<a href="'.route('books.show', $book->book_id).'" class="ser text-center border border-gray-700 rounded-lg border-gray-300 hover:bg-gradient-to-r hover:from-[#0061ff] hover:to-[#45caff] hover:text-white">
                                   '.$book->title.'
                               </a>';
                }
            }
            
            return $data = array('row_result' => $output);
        }

       if($book_modal->isEmpty()&&$book_category->isEmpty()&&$book_author->isEmpty()&&$book_publisher->isEmpty()&&$book_language->isEmpty()&&$series->isEmpty()){
           return view('books.index', ["books" => $book_modal]);
       }else{
        return view('books.index',)
        ->with('books', $book_modal)->with('book_category', $book_category)
        ->with('book_author', $book_author)->with('book_publisher', $book_publisher)
        ->with('book_language', $book_language)->with('series', $series);
       }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book_category = book::with('categories')->get();
        return view('books.create', compact('book_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      try{

        $request->validate([
            'book_title' => 'required',
            'book_subtitle' => 'required',
            'book_description' => 'required',
            'book_category' => 'required',
            'book_dewey' => 'required',
            'book_publisher_place' => 'required',
            'book_depository' => 'required',
            'book_isbn' => 'required',
            'book_image'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
            // --------------------------------------------------------------
            'book_author' => 'required',
            'book_language'=> 'required',
            'book_publisher'=> 'required',
            // ---------------------------------------------------------------
            // 'book_print_no'=> 'required',
            // 'book_price'=> 'required',
            // 'book_print_description'=> 'required',
            // 'book_publish_date'=> 'required',
            // 'book_pages_no'=> 'required',
            // 'book_copies_no'=>'required',
            // 'book_parts_no'=>'required',
            // 'book_no_in_series'=>'required',
            // 'series'=>'required',
            // 'edition_name'=>'required',
            // 'edition_type'=>'required',
            // 'edition_place'=>'required',
        ]);
       $series=sery::where('series_name', $request->input('series'))->first();
        $newimage = time() . '.' . $request->book_image->extension();
        $request->book_image->move(public_path('upload/books'), $newimage);      
        $category = category::where('cat_name', $request->input('book_category'))->first();
        $pubisher= publisher::where('pub_name', $request->input('book_publisher'))->first();
        $author = author::where('author_name', $request->input('book_author'))->first();
        $language = language::where('lang_name', $request->input('book_language'))->first();
        $book = book::create([
            'title' => strip_tags(strtoupper($request->input('book_title'))),
            'subtitle' => strip_tags($request->input('book_subtitle')),
            'photo' => $newimage,
            'depository_no' => strip_tags($request->input('book_depository')),
            'description' => strip_tags($request->input('book_description')),
            'isbn' => strip_tags($request->input('book_isbn')),
            'dewey_no' => strip_tags($request->input('book_dewey_no')),
            'rating' => 0,
            'publication_place' => strip_tags($request->input('book_publisher_place')),
            'cat_id' => $category->cat_id,
        ]);

        $book->save(); // حفظ سجل الكتاب
    
        $bookAuthorRel =book_author_rel::create([
            'work_on_book' => 'مولف',
            'work_id' => 1,
            'author_id' =>$author->author_id,
            'book_id' => $book->book_id,
        ]);
        $bookAuthorRel->save(); // حفظ سجل الربط
        $book_publisher=book_publisher_rel::create([
            'pub_id' => $pubisher->pub_id,
            'book_id' => $book->book_id,
        ]);
        $book_publisher->save();    
        $bookLangRel=lang_book_rel::create([
            'lang_id' => $language->lang_id,
            'book_id' => $book->book_id,
        ]);
        $bookLangRel->save();
        //    if ($request->hasFile('upload_book') && $request->upload_book->isValid()) {
        //     // الحصول على اسم الملف الأصلي
        //     $originalName = $request->upload_book->getClientOriginalName();
        //     // استخراج الاسم بدون الامتداد
        //     $title = pathinfo($originalName, PATHINFO_FILENAME);
        //     // إنشاء اسم جديد للملف (يمكنك استخدام timestamp لتجنب التعارض)
        //     // نقل الملف إلى المسار العام
        //     $request->upload_book->move(public_path('files'), $title);
            

        //     } 
        if($request->book_one_part){       
            $part_book=part::create([
                'part_no' => 1,
                'part_path' => 'edwew',
                'book_id' => $book->book_id,
                'price' =>strip_tags($request->input('book_price')),
                'pages_no' =>strip_tags($request->input('book_pages_no')),
                'publication_date' =>strip_tags($request->input('book_publish_date')),
                'edition_no' =>strip_tags($request->input('book_no_in_series')),
                'edition_desc' =>strip_tags($request->input('book_print_description')),
                'size'=>'44mg',
                'num_of_copies' =>strip_tags($request->input('book_copies_no')),
            ]);
            $part_book->save();
        }
        elseif($request->book_more_part){
            $part_book=part::create([
                'part_no' => strip_tags($request->input('book_parts_no')),
                'part_path' => 'edwew',
                'book_id' => $book->book_id,
                'price' =>'ggg',
                'pages_no' =>"100",
                'publication_date' =>'111/11/11',
                'edition_no' =>"1",
                'edition_desc' =>'ddgfdgdg',
                'size'=>'44mg',
                'num_of_copies' =>2,
            ]);
        }

       
        $part_ser_rel=part_series_rel::create([
            'part_id' =>$part_book->part_id,
            'series_id' => $series->series_id,
            'number_in_series' =>strip_tags($request->input('book_no_in_series')),
        ]);
        $part_ser_rel->save();

        $attatchment=attachment::create([
           'type' => strip_tags($request->input('edition_type')),
            'att_name' => strip_tags($request->input('edition_name')),
            'path' => strip_tags($request->input('edition_place')),
            'book_id' => $book->book_id,
        ]);
        $attatchment->save();  

        return redirect('/books')->with('success', 'Book Added successfully');
            
}catch(Exception $e){
    return redirect('/books')->with('error', 'Book Added failed');
}

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book_modal = book::with('authors')->find($id);
        $book_part = book::with('parts')->find($id);
        $book_publisher = book::with('publishers')->find($id);



        return view(
            'books.show',
            [
                "book" => $book_modal,
                "book_part" => $book_part,
                "book_publisher" => $book_publisher
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $book = book::findOrFail('book_id', $id);
        
        dd('heloo');
        // return redirect('/books')->with('success', 'Book Deleted successfully');
    }
    public function pdf(string $id)
    {
    
            $book_id = part::where('book_id', $id)->first();
    
            if ($book_id && $book_id->part_path) {
                $filePath =   public_path('upload/pdf/'.$book_id->part_path);
                if(file_exists($filePath)){
                    return response()->file($filePath, [
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
                    ]);
                }else{
                    return redirect()->route('books.show', $book_id)->with('error', 'PDF file not found.');
                }
            } else {
                return redirect()->route('books.show', $book_id)->with('error', 'PDF file not found.');
            }
    
        }
    }

