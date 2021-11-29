<?php

namespace App\Http\Controllers\Admin\information;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->page = 'admin/information/announcement/';
    }

    public function index()
    {

        $data['data'] = DB::table('announcement')->paginate(5);
        return view($this->page . 'index', $data);
    }

    public function add()
    {
        return view($this->page . 'add');
    }

    public function save(Request $request)
    {
        DB::table('announcement')->insert([
            'title'  => $request->judul,
            'desc'   => $request->deskripsi,
            'status' => 1, // default aktif
        ]);

        return redirect($this->page);
    }

    public function edit($id)
    {

        $data['data'] = DB::table('announcement')->where('id', $id)->first();
        return view($this->page . 'edit', $data);
    }

    public function update(Request $request)
    {
        DB::table('announcement')->where('id', $request->id)->update([
            'title' => $request->judul,
            'desc'  => $request->deskripsi
        ]);

        return redirect($this->page);
    }

    public function delete($id)
    {
        DB::table('announcement')->where('id', $id)->delete();

        return redirect($this->page);
    }
}
