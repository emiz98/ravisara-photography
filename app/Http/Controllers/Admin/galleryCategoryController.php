<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\galleryCategory;
use App\Models\admin\mainGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class galleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = galleryCategory::all();
        return view('admin/gallery/show',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/gallery/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new galleryCategory();
        $category->title = $request->title;
        $category->slug = $request->slug;
        if($request->status=="on"){
            $category->status = 1;
        }
        else{
            $category->status = 0;
        }

        $category->save();
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
        $category = galleryCategory::where('id',$id)->first();
        return view('admin/gallery/edit', compact('category'));
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
        $category = galleryCategory::find($id);
        $category->title = $request->title;
        $category->slug = $request->slug;
        if($request->status=="on"){
            $category->status = 1;
        }
        else{
            $category->status = 0;
        }

        $category->save();
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
        $images = mainGallery::where('category_id',$id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image);
            mainGallery::where('category_id',$id)->delete();
        }
        galleryCategory::where('id',$id)->delete();
        return $this->index();
    }
}
