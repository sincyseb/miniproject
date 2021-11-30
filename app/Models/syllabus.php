<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class syllabus extends Model
{
    use HasFactory;
    public function insertsyllabus($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectsyllabus($table)
    {
        return DB::table($table)->get();
    }
    public function approves($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
}
