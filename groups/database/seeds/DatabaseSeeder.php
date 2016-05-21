<?php

use App\Group;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('group')->delete();

        $group1 = Group::create(array(
            'name' => 'Bloeddruk',
        ));

        $group2 = Group::create(array(
            'name' => 'Activiteit',
        ));

        $group3 = Group::create(array(
            'name' => 'Gewicht',
        ));

        $group4 = Group::create(array(
            'name' => 'Diastolische druk',
            'parent_id' => $group1->id
        ));

        $group5 = Group::create(array(
            'name' => 'Systolische druk',
            'parent_id' => $group1->id
        ));

        $group6 = Group::create(array(
            'name' => 'Lopen',
            'parent_id' => $group2->id
        ));

        $group7 = Group::create(array(
            'name' => 'Zwemmen',
            'parent_id' => $group2->id
        ));

        $group8 = Group::create(array(
            'name' => 'Vetpercentage',
            'parent_id' => $group3->id
        ));

        $group9 = Group::create(array(
            'name' => 'BMI',
            'parent_id' => $group3->id
        ));
    }
}
