<?php

namespace App\Http\Controllers\Webapp;

use App\Http\Requests\Webapp\CategoryFormRequest;
use App\Model\Webapp\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Webapp\CategoryFormRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryFormRequest $request, $id)
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