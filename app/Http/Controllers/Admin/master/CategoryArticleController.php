<?php

namespace App\Http\Controllers\Admin\master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryArticleController extends Controller
{
    public function __construct()
    {
        $this->page = 'admin/master/category_article/';
    }

    public function index()
    { 
        $data['category'] = DB::table('article_category')->get();

        return view($this->page . 'index', $data);
    }

    public function add()
    {
        return view($this->page . 'add');
    }

    public function save(Request $request)
    {
        // insert data ke table category
        DB::table('article_category')->insert([
            'name_cat' => $request->nama,
        ]);

        return redirect($this->page);
    }

    public function delete($id)
    {
        DB::table('article_category')->where('id', $id)->delete();

        return redirect($this->page);
    }
    public function edit($id)
    {
        $cat = DB::table('article_category')->where('id', $id)->get();

        return view($this->page . 'edit', ['category' => $cat]);
    }
    public function update(Request $request)
    {
        // update data category
        DB::table('article_category')->where('id', $request->id)->update([
            'name_cat' => $request->nama,
        ]);

        return redirect($this->page);
    }
}
