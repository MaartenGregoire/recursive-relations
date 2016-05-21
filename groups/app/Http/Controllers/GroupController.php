<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Group;

class GroupController extends Controller
{
    public function index()
    {
        $data['groups'] = Group::All();
        return view('groups.index');
    }
}
