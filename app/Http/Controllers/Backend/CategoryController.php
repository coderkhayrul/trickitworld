<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function Index()
    {

        $categories = Category::latest()->orderBy('id', 'DESC')->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function Create()
    {
        return view('admin.categories.create');
    }

    public function Store(Request $request)
    {

        $this->validate($request, [
            'name_en' => 'required|unique:categories',
            'name_ban' => 'required|unique:categories',
        ]);

        $category = new Category();
        $category->name_en = Str::upper($request->name_en);
        $category->name_ban = $request->name_ban;
        $category->description_en = $request->description_en;
        $category->description_ban = $request->description_ban;
        $category->slug_en = Str::slug($request->name_en);
        $category->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
        $category->status = 1;

        $category->save();

        $notification =  array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function Edit(Category $category)
    {

        return view('admin.categories.edit', compact('category'));
    }

    public function Update(Request $request, $category)
    {
        $category = Category::findOrFail($category);
        $category->name_en = Str::upper($request->name_en);
        $category->name_ban = $request->name_ban;
        $category->description_en = $request->description_en;
        $category->description_ban = $request->description_ban;
        $category->slug_en = Str::slug($request->name_en);
        $category->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
        $category->update();

        $notification =  array(
            'message' => 'Category Update Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('category.index')->with($notification);
    }

    public function Destroy(Category $category)
    {
        $category->product()->delete();
        $category->delete();

        $notification =  array(
            'message' => 'Category Delete Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
