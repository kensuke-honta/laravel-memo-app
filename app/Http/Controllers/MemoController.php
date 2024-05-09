<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    // index.blade.phpを表示(メモ一覧表示画面)
   public function showIndex()
   {
       return view('index');
   }

   // index.blade.phpを表示(メモ一覧表示画面)
   public function detail()
   {
       return view('detail');
   }

   // index.blade.phpを表示(メモ一覧表示画面)
   public function update()
   {
       return view('update');
   }
}
