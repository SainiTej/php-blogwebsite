<?php

namespace App\Http\Controllers;

use App\Models\FirstProject;
use Illuminate\Http\Request;

class FirstProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= FirstProject::all();
        return view('blog.index', [
            'posts' => $posts,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = FirstProject::create([
            'blogname' => $request->blogname,
            'blogdescription' => $request->blogdescription,
        ]);

        return redirect('blog/' . $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstProject  $firstProject
     * @return \Illuminate\Http\Response
     */
    public function show(FirstProject $firstProject)
    {
        return view('blog.show', [
            'post' => $firstProject,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirstProject  $firstProject
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstProject $firstProject)
    {
        return view('blog.edit', [
            'post' => $firstProject,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FirstProject  $firstProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirstProject $firstProject)
    {
        $firstProject->update([
            'blogname' => $request->blogname,
            'blogdescription' => $request->blogdescription
        ]);

        return redirect('blog/' . $firstProject->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstProject  $firstProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstProject $firstProject)
    {
        $firstProject->delete();

        return redirect('/blog');
    }
}
