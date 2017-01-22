<?php

namespace App\Http\Controllers;


use duzun\hQuery;
use Illuminate\Http\Request;
use DB;

class ParseController extends Controller
{
    //
    public function index()
    {
        $dirs = scandir('solids.ru');
        foreach ($dirs as $dir)
        {
            if(substr($dir, -4, -1) == 'htm')
            {
                echo $dir . '<br>';
                $doc = hQuery::fromFile('solids.ru/'. $dir);
                $alias = $dir;
                $content = $doc->find('#content');
                $description = $doc->find('meta:3');
                $description = ($description) ? $description->attr('content') : $doc->find('meta:2');
                // echo $description;
                ($doc->find('h1')) ? $parent = $doc->find('h1.big') : 'category';
                $pagetitle = $doc->find('title');
                DB::insert('insert into posts 
                (pagetitle,alias,content,description,parent,published,author_id) values (?,?,?,?,?,?,?)',
                [$pagetitle,$alias, $content,$description,$parent, true,1]);
            }

        }
    }
}
