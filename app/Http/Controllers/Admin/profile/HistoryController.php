<?php

namespace App\Http\Controllers\Admin\profile;

use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->page = 'admin/profile/history/';
    }

    public function index()
    {
        return view($this->page . 'index');
    }

    public function add()
    {
        return view($this->page . 'add');
    }
}
