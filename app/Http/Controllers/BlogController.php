<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            "blogs" => Blog::all()
        ]);
    }

    public function show($id)
    {
        return view('blog.show', [
            "blog" => Blog::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->get('name');
        $blog->content = $request->get('content');
        $blog->save();

        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        return view('blog.edit', [
            "blog" => Blog::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->name = $request->get('name');
        $blog->content = $request->get('content');
        $blog->save();

        return redirect()->route('blog.index');
    }

    public function destroy(Request $request, $id)
    {
        Blog::destroy($id);

        return redirect()->route('blog.index');
    }
}
