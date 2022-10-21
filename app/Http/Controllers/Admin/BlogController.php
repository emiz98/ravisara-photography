<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\blogGallery;
use App\Models\user\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = blog::all();
        return view('admin/blog/show', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/blog/blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = getimagesize($request->image);
        $width = $data[0];
        $height = $data[1];

        $blog = new blog();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->body = $request->body;

        if ($request->hasFile('image')) {
            $imageName = $request->image->store('blogs');
        }
        $blog->image = $imageName;
        $blog->width = $width;
        $blog->height = $height;

        if ($request->status == "on") {
            $blog->status = 1;
        } else {
            $blog->status = 0;
        }

        $blog->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = blog::where('id', $id)->first();
        return view('admin/blog/edit', compact('blog'));
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
        $blog = blog::find($id);
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->body = $request->body;

        if ($request->hasFile('image')) {
            $data = getimagesize($request->image);
            $width = $data[0];
            $height = $data[1];

            Storage::delete($blog->image);
            $imageName = $request->image->store('blogs');

            $blog->image = $imageName;
            $blog->width = $width;
            $blog->height = $height;
        }

        if ($request->status == "on") {
            $blog->status = 1;
        } else {
            $blog->status = 0;
        }

        $blog->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $images = blogGallery::where('category_id',$id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image);
            blogGallery::where('category_id',$id)->delete();
        }

        $blog = blog::find($id);
        Storage::delete($blog->image);
        blog::where('id',$id)->delete();

        return $this->index();
    }
}
