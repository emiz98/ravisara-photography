<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\user\printCategory;
use App\Models\user\printGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class printCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = printCategory::all();
        return view('admin/prints/show',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/prints/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new printCategory();
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->price = $request->price;

        if($request->hasFile('image')){
            $imageName = $request->image->store('print_gallery');
            $category->image = $imageName;
        }

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
        $category = printCategory::where('id',$id)->first();
        return view('admin/prints/edit', compact('category'));
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
        $category = printCategory::find($id);
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->price = $request->price;

        if($request->hasFile('image')){
            Storage::delete($category->image);
            $imageName = $request->image->store('print_gallery');
            $category->image = $imageName;
        }

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
        $images = printGallery::where('category_id',$id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image);
            printGallery::where('category_id',$id)->delete();
        }

        $category = printCategory::find($id);
        Storage::delete($category->image);
        printCategory::where('id',$id)->delete();

        return $this->index();
    }
}
