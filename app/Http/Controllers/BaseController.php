<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class BaseController extends Controller
{
    protected $snav, $pnav;
    // put all the shared data into function __construct
    function __construct()
    {
        // get primary nav list with row sort
        $this->pnav = Posts::whereIn('id', [164,42,149,49])->orderByRaw('FIELD(id,164,42,149,42)')->get();
        // get secondary nav list with row sort
        $this->snav = Posts::whereIn('id', [71,122,69,27])->orderByRaw('FIELD(id,71,122,69,27)')->get();
        // share data for navigation
        view()->share('pnav', $this->pnav);
        view()->share('snav', $this->snav);
    }


}
