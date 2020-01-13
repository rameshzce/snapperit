<?php

namespace Snapperit\Fishead\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    //
    protected $table = 'jobs';
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public static function getCustomData($options = [])
    {
        $select = ['j.id as id','j.name as name'];

        $data = DB::table('jobs as j')
            ->select($select);

        if($options){
            foreach ($options as $key => $value){
                $data = $data->where(["j.$key" => $value]);
            }
        }

        $data = $data->orderBy('id', 'desc');
        $data = $data->paginate(2);

        return $data;
    }


}
