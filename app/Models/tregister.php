<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class tregister extends Model
{
    use HasFactory;
    public function insertteach($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectteacher($table,$email,$pswd)
    {
        return DB::table($table)->where('email',$email)->where('pswd',$pswd)->first();
    }
    public function name($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
    public function approveteach($table,$data,$id)
    {
        return DB::table($table)->where('id',$id)->update($data);
    }
    public function selectt($table)
    {
        return DB::table($table)->get();
    }
}
