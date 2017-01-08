<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Model\Webapp\Note;
use App\Model\Webapp\Category;
use App\Model\Webapp\NoteCategory;

class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Note     $note
     * @param Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Note $note, Category $category, NoteCategory $noteCategory)
    {
        // Current User
        $user = auth()->user()->id;

        $categories = [];
        for($i = 0; $i < $category->where('user_id', $user)->get()->count(); $i++) {
            $categories[$category->where('user_id', $user)->get()[$i]['name']] = $noteCategory->where('category_id', $category->where('user_id', $user)->get()[$i]['id'])->get()->count();
        }

//        $arr = [];
//        for($i = 0; $i < $note->where('user_id', $user)->get()->count(); $i++) {
//            $arr[] = $noteCategory->where('note_id', $note->where('user_id', $user)->get()[$i]['id'])->get();
//        }

        // $noteCategory->where('note_id', $note->where('user_id', $user)->get()[0]['id'])->get()[0]['category_id']
        //dd($noteCategory->where('note_id', $note->where('user_id', $user)->get()[0]['id'])->get()[0]['category_id']);
        //dd($category->where('user_id', $user)->get()[$noteCategory->where('note_id', $note->where('user_id', $user)->get()[0]['id'])->get()[0]['category_id']]['name']);

        //dd($category->find($noteCategory->where('note_id', $note->where('user_id', $user)->get()[0]['id'])->get()[0]['category_id'])->name);
//        $arr = [];
//        for($j = 1; $j < $note->where('user_id', $user)->get()->count(); $j++) {
//            for($k = 1; $k < $category->where('user_id', $user)->get()->count(); $k++) {
//                $arr[] = $category->find($noteCategory->where('note_id', $note->where('user_id', $user)->get()[$j]['id'])->get()[$k]['category_id'])->name;
//            }
//        }
//
//        $aa = ['efwe', 'wefwe', 'qqqq'];
//        $x = $note->where('user_id', $user)->get();
//
//        array_push($aa, $x[0]);
        //dd($arr);

        return view('webapp.home', [
            'notes' => $note->where('user_id', $user)->get(),
            'categories' => $categories,
            //'categories_note_total' => $arr,
            'notes_total' => $note->where('user_id', $user)->get()->count()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Category $category
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view('webapp.form', [
            'categories' => $category->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return 'ok';
    }

}