<?php

namespace Snapperit\Fishead\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Snapperit\Fishead\Models\Job;
use Snapperit\Fishead\Models\Album;

class JobsController extends Controller
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

        $options = ['album_id' => $request->id];

        $data = Job::getCustomData($options, $pagination);

        $album_name = "";

        if (!empty($request->id)) {
            $album = Album::find($request->id);
            $album_name = $album->name;
        }


        return view('album::jobs', compact(['data', 'album_name']));
    }

    public function create ()
    {

    }
}
