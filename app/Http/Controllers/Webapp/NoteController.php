<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Webapp\Note;
use App\Model\Webapp\Category;

class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Note $note, Category $category)
    {
        // Current User
        $user = auth()->user()->id;

        return view('webapp.home', [
            'notes' => $note->where('user_id', $user)->get(),
            'categories' => $category->where('user_id', $user)->get(),
            'notes_total' => $note->where('user_id', $user)->get()->count(),
            //'notes_categories_total' => $note->where('category_id', )->get()->count()

        ]);
    }

}