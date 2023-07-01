<?php

namespace App\Controllers;

class CounselingController extends BaseController
{
  public function index()
  {
    return view('counseling');
  }

  public function history()
  {
    return view('history');
  }
}
