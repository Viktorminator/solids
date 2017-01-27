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
                $title = $doc->find('title');
                $content = $doc->find('#content');
                $description = $doc->find('meta:3');
                $description = ($description) ? $description->attr('content') : $doc->find('meta:2');

                ($doc->find('h1')) ? $parent = $doc->find('h1.big') : $parent = 'category';
                // h1 + h1.big - h1.big = pagetitle
                $pagetitle = substr($doc->find('h1'),strlen($parent));
                DB::insert('insert into posts 
                (title,pagetitle,alias,content,description,parent,published,author_id) values (?,?,?,?,?,?,?,?)',
                [$title,$pagetitle,$alias, $content,$description,$parent, true,1]);
            }

        }
    }
}
