<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\tourCategory;
use App\Models\user\tourGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class tourCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = tourCategory::all();
        return view('admin/tours/show',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tours/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new tourCategory();
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
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
        $category = tourCategory::where('id',$id)->first();
        return view('admin/tours/edit', compact('category'));
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
        $category = tourCategory::find($id);
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
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
        $images = tourGallery::where('category_id',$id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image);
            tourGallery::where('category_id',$id)->delete();
        }

        tourCategory::where('id',$id)->delete();
        return $this->index();
    }
}
