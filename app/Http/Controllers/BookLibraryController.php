<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book;
use App\Models\library_section;
use Illuminate\Support\Facades\DB;

class BookLibraryController extends Controller
{


    
    public function library()
    {
        $sections = library_section::all();
        $bookShow = [];

        foreach ($sections as $section) {
            $bookShow[$section->id] = Book::where('Section_ID', $section->id)
                ->inRandomOrder()
                ->limit(9) // جلب 9 كتب عشوائية لكل قسم
                ->get();
        }

        return view('library.library', compact('sections','bookShow'));
    }

    public function showBooksBySection(Request $request, $sectionName)
    {
        $query = $request->input('query');
        
        $section = library_section::where('Name', $sectionName)->firstOrFail();

        $books = $section->books()
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('Title', 'like', '%' . $query . '%');
            })
            ->inRandomOrder()
            ->get();

        return view('library.books_computer', compact('books', 'query', 'section'));
    }
    


    /**
     * Display a listing of the resource.
     *
     *  
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     $query = $request->input('query');
    //     $book_computer = Book::where('Section_ID', 1)
    //         ->when($query, function ($queryBuilder) use ($query) {
    //             return $queryBuilder->where('Title', 'like', '%' . $query . '%');
    //         })
    //         ->inRandomOrder() // استخدام inRandomOrder لعرض النتائج بشكل عشوائي
    //         ->get();

    //     // التحقق مما إذا كانت النتيجة فارغة
    //     if ($book_computer->isEmpty()) {
    //         return view('library.books_computer', compact('query'));
    //     }

    //     return view('library.books_computer', compact('book_computer', 'query'));
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
