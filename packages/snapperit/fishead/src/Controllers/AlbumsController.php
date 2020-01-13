<?php

namespace Snapperit\Fishead\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Snapperit\Fishead\Models\Album;

class AlbumsController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index (Request $request)
    {
        //
        $pagination = false;

        if ((isset($request->all()['page'])) && ($request->all()['page'] != "")) {
            $pagination = true;
        }

        $options = [];

        $data = Album::getCustomData($options, $pagination);

        return view('album::index', compact(['data']));
    }

    public function create ()
    {

    }
}
