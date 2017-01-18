<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                echo $dir;
                $html = file_get_contents('solids.ru/'. $dir);
                $html->HtmlDom::find('h1',1)->class='big';
            }
        }
    }
}
