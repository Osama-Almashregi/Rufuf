<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publisher;
class Publisheres extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = publisher::withCount('books')->get();
        if (isset($_GET['search_word']) && $_GET['search_word'] != null) {
            $search_content = $_GET['search_word'];
        
            $publishers = publisher::where('pub_name', 'like', '%' . $search_content . '%')->orWhere('owner', 'like', '%' . $search_content . '%')->get();
        
            $output = '';
            
            if ($publishers->isEmpty()) {
                $output .= '<div class="text-center text-gray-500 py-3">لايوجد مؤلف بهذا لاسم</div>';
            } else {
                foreach ($publishers as $publisher) {
                    $output .= '<a href="'.route('publishers.show', $publisher->pub_id).'" class="ser text-center border border-gray-700 rounded-lg border-gray-300 hover:bg-gradient-to-r hover:from-[#0061ff] hover:to-[#45caff] hover:text-white">
                                   '.$publisher->pub_name.'
                               </a>';
                }
            }
            
            return $data = array('row_result' => $output);
        }
        return view('publishers.index', ["publishers" => $publishers]);

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
            'pub_name'=>'required',
            'establishment_date'=>'required',
            'sequential_deposit_no'=>'required',
            'owner'=>'required',
        ]);
        $publisher = publisher::create([
            'pub_name' => $request->pub_name,
            'establishment_date' => $request->establishment_date,
            'sequential_deposit_no' => $request->sequential_deposit_no,
            'owner' => $request->owner,
        ]);
        $publisher->save();
        toastr()->success('Publisher Added Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $publisher = Publisher::with('books')->withCount('books')->findOrFail($id);
        $books = $publisher->books;
    
        return view('publishers.show', [
            "publisher" => $publisher,
            "books" => $books
        ]);
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
