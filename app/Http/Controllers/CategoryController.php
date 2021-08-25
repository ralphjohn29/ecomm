<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:512',
        ]);

        $request_image = $request->file('image');
        $image_name = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($image_name, PATHINFO_FILENAME);
        $name_gen = hexdec((uniqid()));
        $img_ext = strtolower($request_image->getClientOriginalExtension());
        $image_final_name = $filename . '_' . $name_gen . '.' . $img_ext;


        $category = Category::create([
            'category_name' => $request->category_name,
            'description' => $request->category_description,
            'image' => $image_final_name,
            'active' => '0',
            'created_at' => Carbon::now(),
        ]);
        Image::make($request_image)->save(public_path('category/images/') . $image_final_name);

        return redirect()->route('admin.category')->with('success', 'Success Created Category');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
