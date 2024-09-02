<?php

namespace App\Http\Controllers;

use App\Models\author;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class Authors extends Controller
{

    public function getData(){
       return [
            ["author_id"=>"1","author_name"=>"Ahmed","author_image"=>"https://randomuser.me/api/portraits/men/1.jpg","author_bio"=>"Ahmed is a software engineer and a writer Ahmed is a software engineer and a writerAhmed is a software engineer and a writerAhmed is a software engineer and a writerAhmed is a software engineer and a writer" ],
            ["author_id"=>"2","author_name"=>"osama","author_image"=>"https://randomuser.me/api/portraits/men/2.jpg","author_bio"=>"osama is a software engineer and a writer" ],
            ["author_id"=>"3","author_name"=>"mohamed","author_image"=>"https://randomuser.me/api/portraits/men/3.jpg","author_bio"=>"mohamed is a software engineer and a writer" ],
            ["author_id"=>"4","author_name"=>"ali","author_image"=>"https://randomuser.me/api/portraits/men/4.jpg","author_bio"=>"ali is a software engineer and a writer" ],
            ["author_id"=>"5","author_name"=>"hassan","author_image"=>"https://randomuser.me/api/portraits/men/5.jpg","author_bio"=>"hassan is a software engineer and a writer" ],
            ["author_id"=>"6","author_name"=>"khaled","author_image"=>"https://randomuser.me/api/portraits/men/6.jpg","author_bio"=>"khaled is a software engineer and a writer" ],
    ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = author::withCount('books')->get();
          // return view('books.index', ["books" => $book_modal]);
          if (isset($_GET['search_word']) && $_GET['search_word'] != null) {
            $search_content = $_GET['search_word'];
        
            $authors = author::where('author_name', 'like', '%' . $search_content . '%')->orWhere('author_nationality', 'like', '%' . $search_content . '%')->get();
        
            $output = '';
            
            if ($authors->isEmpty()) {
                $output .= '<div class="text-center text-gray-500 py-3">لايوجد مؤلف بهذا لاسم</div>';
            } else {
                foreach ($authors as $author) {
                    $output .= '<a href="'.route('authors.show', $author->author_id).'" class="ser text-center border border-gray-700 rounded-lg border-gray-300 hover:bg-gradient-to-r hover:from-[#0061ff] hover:to-[#45caff] hover:text-white">
                                   '.$author->author_name.'
                               </a>';
                }
            }
            
            return $data = array('row_result' => $output);
        }

            
        return view('authors.index', ["authors" => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'author_name' => 'required',
            'author_nation' => 'required',
            'author_job'=>'required',
            'author_brith'=>'required',
            'author_didth'=>'required',
            'author_description'=>'required',
            'author_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $author_image = Str::slug($request->author_name) . '.' . $request->author_image->extension();
        $request->author_image->move(public_path('upload/authors'), $author_image);  
        $inser_Author = author::create([
            'author_img'=>$author_image,
            'author_name' => $request->author_name,
            'author_nationality' => $request->author_nation,
            'author_profession'=>$request->author_job,
            'author_birthday'=>$request->author_brith,
            'author_deathday'=>$request->author_didth,
            'author_description'=>$request->author_description,
        ]);
        $inser_Author->save();
        toastr()->success('Author Added Successfully');
        return redirect()->back();
        
        // author::create([
        //     'author_img'=>$image,
        //     'author_name' => $request->author_name,
        //     'author_nationality' => $request->author_nation,
        //     'author_profession'=>$request->author_job,
        //     'author_birthday'=>$request->author_brith,
        //     'author_deathday'=>$request->author_didth,
        //     'author_description'=>$request->author_description,
        // ]); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      
        $author = author::with('books')->withCount('books')->findOrFail($id);
        $books=$author->books;
        return view('authors.show', ["author" => $author,"books"=>$books]);
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
        //
    }
}
