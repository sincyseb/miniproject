<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class timetable extends Model
{
    use HasFactory;
    public function timetablesinsert($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selecttimetable($table)
   {
        return DB::table($table)->get();
   }
    public function approvet($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
}
