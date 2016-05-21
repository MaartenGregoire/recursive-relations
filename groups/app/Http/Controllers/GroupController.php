<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Group;

class GroupController extends Controller
{
    public function index()
    {
        $data['groups'] = Group::with('allChildren')->where('parent_id', null)->get();
        return view('groups.index', $data);
    }

    public function show($id)
    {
        $group = Group::with('allChildren')->where('id', $id)->first();
        $data['group'] = $group;
        $data['children'] = join($this->createChildrenArray($group), ', ');
        return view('groups.show', $data);
    }

    private function createChildrenArray($group)
    {
        $childrenArray = [];
        foreach($group->allChildren()->get() as $group){
            $childrenArray[] = $group->name;
            $childrenArray = array_merge($childrenArray, $this->createChildrenArray($group));
        }
        return $childrenArray;
    }
}
