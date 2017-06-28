<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/26/17
 * Time: 8:52 PM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use JanDrda\LaravelGoogleCustomSearchEngine\LaravelGoogleCustomSearchEngine;
use Illuminate\Http\Request;

class GoogleSearchController extends BaseController
{
    public function index(Request $request){
        $fulltext = new LaravelGoogleCustomSearchEngine();
        $results = $fulltext->getResults($request->q);
        $post = (object)[ 'title' => 'Поиск Solids', 'keywords' => 'Поиск Solids', 'description' => 'Поиск Solids'];
        // dd($results);
        return view('search')->with(compact('results', 'post'));
    }
}