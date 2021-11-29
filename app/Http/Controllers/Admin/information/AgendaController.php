<?php

namespace App\Http\Controllers\Admin\information;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->page = 'admin/information/agenda/';
    }

    public function index()
    {
        $data['agenda'] = DB::table('agenda')->get();
        return view($this->page . 'index', $data);
    }

    public function add()
    {
        return view($this->page . 'add');
    }
    public function save(Request $request)
    {
        DB::table('agenda')->insert([
            'name_agenda' => $request->nama_agenda,
            'date'        => $request->tanggal,
            'time'        => $request->jam1.' - '.$request->jam2,
            'place'       => $request->tempat,
            'status'      => 0,
        ]);
        return redirect($this->page);
    }
    public function edit($id)
    {
        $agenda    = DB::table('agenda')->where('id', $id)->get();
        foreach($agenda as $a){
            $id    = $a->id;
            $name  = $a->name_agenda;
            $date  = $a->date;
            $array = explode('-', $a->time);
            $time1 = $array[0];
            $time2 = $array[1];
            $place = $a->place;

        }
        return view($this->page . 'edit', [
            'id'          => $id,
            'name_agenda' => $name,
            'date'        => $date,
            'timeClock'   => $time1,
            'timeDet'     => $time2,
            'place'       => $place]);
    }
    public function update(Request $request)
    {
        DB::table('agenda')->where('id', $request->id)->update([
            'name_agenda' => $request->nama,
            'date'        => $request->tanggal,
            'time'        => $request->jam1.' - '.$request->jam2,
            'place'       => $request->tempat
        ]);

        return redirect($this->page);
    }
    public function delete($id)
    {
        DB::table('agenda')->where('id', $id)->delete();

        return redirect($this->page);
    }
}
