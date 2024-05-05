<?php

// Remove the empty namespace declaration
namespace App\Http\Controllers\site;

class SiteController
{
  public function contact()
  {
      return view('site/contact');
  }
}