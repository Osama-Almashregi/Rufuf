<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class Categories extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::withCount('books')->get();
        if (isset($_GET['search_word']) && $_GET['search_word'] != null) {
            $search_content = $_GET['search_word'];
        
            $categories = category::where('cat_name', 'like', '%' . $search_content . '%')->get();
        
            $output = '';
            
            if ($categories->isEmpty()) {
                $output .= '<div class="text-center text-gray-500 py-3">لايوجد مؤلف بهذا لاسم</div>';
            } else {
                foreach ($categories as $category) {
                    $output .= '<a href="'.route('Categories.show', $category->cat_id).'" class="ser text-center border border-gray-700 rounded-lg border-gray-300 hover:bg-gradient-to-r hover:from-[#0061ff] hover:to-[#45caff] hover:text-white">
                                   '.$category->cat_name.'
                               </a>';
                }
            }
            
            return $data = array('row_result' => $output);
        }
        return view('categories.index', compact('categories'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = category::withCount('books')->findOrFail($id);
        $books=$category->books;
        return view('categories.show', ["category_books" => $books,"category" => $category]);
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
