<?php

namespace Snapperit\Fishead\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Album extends Model
{
    //
    protected $table = 'albums';
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public static function getCustomData($options = [])
    {
        $select = ['a.id as id','a.name as name'];

        $data = DB::table('albums as a')
            ->select($select);

        $data = $data->orderBy('id', 'desc');
        $data = $data->paginate(10);

        return $data;
    }


}
