<?php

namespace App\Controllers;

class CounselingController extends BaseController
{

  

  public function index()
  {

      if( $this->session->has('user')){
        return view('counseling');
      }else{
        return redirect()->to('/login');
      }
   
  }

  public function history()
  {
    return view('history');
  }
}
