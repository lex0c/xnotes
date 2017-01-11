<?php

namespace App\Http\Controllers\Webapp\Panel;

use App\Model\Webapp\Category;
use App\Http\Requests\Webapp\CategoryFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd(Category::where('user_id', auth()->user()->id)->get());
        return view('webapp.panel.category-manager', [
            'categories' => Category::where('user_id', auth()->user()->id)->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webapp.forms.category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Webapp\CategoryFormRequest
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest $request)
    {
        $dataForm = $request->all();
        $dataForm['user_id'] = auth()->user()->id;

        $inserted = Category::create($dataForm);

        if($inserted) {
            return redirect()->route('notes.index');
        } else {
            return redirect()->route('categories.create')->withErrors($dataForm)->withInput();
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
        $category = Category::find($id);

        if(Gate::denies('whoSeeCategory', $category))
            return view('errors.401');

        if(!$category)
            redirect()->route('categories.index');

        return view('webapp.forms.category', [
            'title' => 'Deletar Marcador',
            'category' => $category,
            'del'  => true
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if(Gate::denies('whoSeeCategory', $category))
            return view('errors.401');

        if(!$category)
            redirect()->route('categories.index');

        return view('webapp.forms.category', [
            'title' => 'Editar Marcador',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Webapp\CategoryFormRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request, $id)
    {
        $dataForm = $request->all();
        $dataForm['user_id'] = auth()->user()->id;

        $category = Category::find($id);
        $inserted = $category->update($dataForm);

        if($inserted) {
            return redirect()->route('categories.index');
        } else {
            return redirect()->route('categories.edit', $id)->withErrors($dataForm);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if(Gate::denies('whoSeeCategory', $category))
            return view('errors.401');

        if($category->delete()) {
            return redirect()->route('categories.index');
        }
    }
}