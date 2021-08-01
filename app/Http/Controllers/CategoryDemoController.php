<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CategoryDemoController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(5);

        return view()->exists('category.index') ? view('category.index', compact('categories')) : abort(404);
    }

    public function create()
    {
        return view()->exists('category.create') ? view('category.create') : abort(404);
    }

    public function store(CategoryRequest $request)
    {
        $file = $request->file('image');
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        storage::putFileAs("public/image", $file, $fileName);
        $path = "storage/image/" . $fileName;
        $data = [
            'name'=> $request->name,
            'slug'=> $request->name,
            'image'=> $path
        ];
        $result = Category::create($data);

        if($result){
            $this->setErrorMessage('Data save!', 'success');
            return redirect()->to('category');
        }else{
            return back();
        }
    }

    public function edit($id)
    {
        $user = Category::findOrFail($id);
        return view()->exists('category.edit') ? view('category.edit', compact('user')) : abort(404);
    }

    public function update(CategoryRequest $request, $id)
    {
        $file = $request->file('image');
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        storage::putFileAs("public/image", $file, $fileName);
        $path = "storage/image/" . $fileName;

        $data = [
            'name'=> $request->name,
            'slug'=> $request->name,
            'image'=> $path
        ];

        $result = Category::findOrFail($id)->update($data);

        if($result){
            $this->setErrorMessage('Data Update Successfully!', 'success');
            return redirect()->to('category');
        }else{
            return back();
        }
    }

    public function view($id){
        $category = Category::findOrFail($id);
        return view()->exists('category.view') ? view('category.view', compact('category')) : abort(404);
    }

    public function delete($id){
        $result = Category::findOrFail($id)->delete();

        if($result){
            $this->setErrorMessage('Data Delete Successfully!', 'danger');
            return redirect()->to('category');
        }else{
            return back();
        }
    }
}
