<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    // home.blade.phpを表示(どの画面に行くか選べる)
    public function home()
    {
        return view('home');
    }

    // index.blade.phpを表示(メモ一覧表示画面)
   public function showIndex()
   {
       return view('index');
   }

   // create.blade.phpを表示(新規メモ作成画面)
   public function create()
   {
       return view('create');
   }

   // detail.blade.phpを表示(メモ詳細画面)
   public function detail()
   {
       return view('detail');
   }

   // update.blade.phpを表示(メモ編集画面)
   public function update()
   {
       return view('update');
   }
}
