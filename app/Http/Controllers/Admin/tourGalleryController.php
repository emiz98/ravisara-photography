<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\tourCategory;
use App\Models\user\tourGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class tourGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = tourGallery::all();
        return view('admin/tours/showGallery',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = tourCategory::all();
        return view('admin/tours/createGallery',compact('category'));
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

        $galleryImage = new tourGallery();
        if($request->hasFile('image')){
            $imageName = $request->image->store('tour_gallery');
            $galleryImage->image = $imageName;
        }
        $galleryImage->category_id = $request->category_id;
        $galleryImage->width = $width;
        $galleryImage->height = $height;

        $galleryImage->save();
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
        $images = tourGallery::where('category_id',$id)->get();
        return view('admin/tours/showGallery',compact('images','id'));
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        $image = tourGallery::find($id);
        $category_id = $image->category_id;
        $imageName = $image->image;

        Storage::delete($imageName);
        tourGallery::where('id',$id)->delete();

        return $this->show($category_id);
    }
}
