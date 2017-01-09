<?php

namespace App\Http\Controllers\Webapp;

use App\Http\Requests\Webapp\NoteFormRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Model\Webapp\Note;
use App\Model\Webapp\Category;
use App\Model\Webapp\NoteCategory;
use Illuminate\Support\Facades\Gate;

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
     * @param User     $user
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Note $note, Category $category, User $user)
    {
        $currentUser = auth()->user()->id;

        return view('webapp.home', [
            'user_obj' => $user,
            'note_obj' => $note,
            'category_obj' => $category,
            'notes' => $note->where('user_id', $currentUser)->paginate(15),
            'categories' => $category->where('user_id', $currentUser)->get(),
            'notes_total' => $note->where('user_id', $currentUser)->get()->count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webapp.form', [
            'categories' => Category::where('user_id', auth()->user()->id)->get(),
            'colors' => Note::getColors(),
            'access' => Note::getAccess()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NoteFormRequest $request
     * @param Note            $note
     *
     * @return \Illuminate\Http\Response
     */
    public function store(NoteFormRequest $request, Note $note)
    {
        $dataForm = $request->all();
        $dataForm['user_id'] = auth()->user()->id;

        if(!Category::find($dataForm['category_id'])) {
            return redirect()->route('notes.create')->withErrors(["Categoria '{$dataForm['category_id']}' invalida!"])->withInput();
        }

        $inserted = $note->create($dataForm);

        if($inserted) {
            return redirect()->route('notes.index');
        } else {
            return redirect()->route('notes.create')->withErrors($dataForm)->withInput();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Note $note
     * @param int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Note::find($id);

        if(Gate::denies('whoSee', $note))
            return view('errors.401');

        return view('webapp.form', [
            'title' => 'Edição de nota',
            'note' => $note,
            'categories' => Category::where('user_id', auth()->user()->id)->get(),
            'colors' => Note::getColors(),
            'access' => Note::getAccess()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NoteFormRequest  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(NoteFormRequest $request, $id)
    {
        $dataForm = $request->all();
        $dataForm['user_id'] = auth()->user()->id;

        $note = Note::find($id);
        $inserted = $note->update($dataForm);

        if($inserted) {
            return redirect()->route('notes.index');
        } else {
            return redirect()->route('notes.edit', $id)->withErrors($dataForm);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Gate::denies('whoSee', Note::find($id)))
            return view('errors.401');

        return view('webapp.form', [
            'note' => Note::find($id),
            'del'  => true,
            'title' => 'Edição de nota',
            'categories' => Category::where('user_id', auth()->user()->id)->get(),
            'colors' => Note::getColors(),
            'access' => Note::getAccess()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::find($id);

        if(Gate::denies('whoSee', $note))
            return view('errors.401');

        if($note->delete()) {
            return redirect()->route('notes.index');
        }
    }

}