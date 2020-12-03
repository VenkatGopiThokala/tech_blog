<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
   public function viewCategory()
       {
           return view("admin.viewCategory");
       }
   public function addTag()
       {
           return view("admin.addTag");
       }
   public function viewTag()
       {
           return view("admin.viewTag");
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
