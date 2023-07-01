<?php

namespace App\Controllers;

class ArticleController extends BaseController
{
  public function index()
  {
    return view('articles');
  }

  public function create()
  {
    // Implementasi untuk membuat artikel baru
  }
}
