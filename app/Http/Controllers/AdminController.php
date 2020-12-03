<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Tags;

class AdminController extends Controller
{
   public function index()
       {
           return view("admin.login");
       }
   public function addCategory()
       {
           return view("admin.addCategory");
       }
   public function addCategoryData(Request $request)
       {
       $request->validate([
                   'category' => 'required'
               ]);
           $category = new Categories;
           $category->category = $request->category;
           $category->save();
           return redirect(route('addCategory'))->with('addCatSucMsg','Category added successfully');
       }

   public function viewCategory()
       {
           $categories = Categories::simplePaginate(3);
           return view('admin.viewCategory',compact('categories'));
       }
   public function editCategory($id)
       {
           $category = Categories::find($id);
           return view('admin.editCategory',compact('category'));
       }
   public function updateCategory(Request $request, $id)
       {
       $request->validate([
            'category' => 'required'
       ]);
       $category = Categories::find($id);
       $category->category = $request->category;
       $category->save();
       return redirect(route('editCategory', $id))->with('editCatSucMsg','Category edited successfully');
       }
   public function deleteCategory($id)
       {
           $category = Categories::find($id);
           $category->delete();
           return redirect(route('viewCategory'))->with('deleteCatSucMsg','Category deleted successfully');

       }
   public function addTag()
       {
           return view("admin.addTag");
       }
   public function addTagData(Request $request)
       {
       $request->validate([
                   'tag' => 'required'
               ]);
           $tag = new Tags;
           $tag->tag = $request->tag;
           $tag->save();
           return redirect(route('addTag'))->with('addTagSucMsg','Tag added successfully');
       }

   public function viewTag()
       {
           $tags = Tags::simplePaginate(3);
           return view('admin.viewTag',compact('tags'));
       }
   public function editTag($id)
       {
           $tag = Tags::find($id);
           return view('admin.editTag',compact('tag'));
       }
   public function updateTag(Request $request, $id)
       {
           $request->validate([
                'tag' => 'required'
           ]);
           $tag = Tags::find($id);
           $tag->tag = $request->tag;
           $tag->save();
           return redirect(route('editTag', $id))->with('editTagSucMsg','Tag edited successfully');
       }
   public function deleteTag($id)
       {
           $tag = Tags::find($id)->delete();
           return redirect(route('viewTag'))->with('deleteTagSucMsg','Tag deleted successfully');

       }

   public function addArticle()
       {
           return view("admin.addArticle");
       }
   public function viewArticle()
       {
           return view("admin.viewArticle");
       }

}
