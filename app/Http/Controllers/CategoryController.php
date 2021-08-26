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

        $categories = Category::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));
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
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required',
            'image' => 'mimes:jpeg,png,jpg|max:512',
        ]);

        $old_image = $request->old_image;
        $updated_image = $request->file('image');

        if ($updated_image) {
            $image_name = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($image_name, PATHINFO_FILENAME);
            $name_gen = hexdec((uniqid()));
            $img_ext = strtolower($updated_image->getClientOriginalExtension());
            $image_final_name = $filename . '_' . $name_gen . '.' . $img_ext;
            $old_image_path = 'category/images/' . $old_image;

            unlink(public_path($old_image_path));

            Category::find($id)->update([
                'category_name' => $request->category_name,
                'description' => $request->category_description,
                'image' => $image_final_name,
                'updated_at' => Carbon::now(),
            ]);
            Image::make($updated_image)->save(public_path('category/images/') . $image_final_name);

            return redirect()->route('admin.category')->with('success', 'Sucess edit category');

        } else {

            Category::find($id)->update([
                'category_name' => $request->category_name,
                'description' => $request->category_description,
                'updated_at' => Carbon::now(),
            ]);

            return redirect()->route('admin.category')->with('success', 'Success edit category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        unlink(public_path('category/images/' . $category->image));
        $category->delete();
        return redirect()->route('admin.category')->with('success', 'Delete Category successfully');
    }

    public function change_active(Request $request)
    {
        $category = Category::findOrFail($request->id);
        $category->active = $request->status;
        $category->save();

        return response()->json(['success' => 'Status change successfully.']);

    }
}
