<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller{
    public function show($id){
        return view('pages.show')->withPage(Page::find($id));
    }
}
