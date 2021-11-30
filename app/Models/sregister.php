<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class sregister extends Model
{
    use HasFactory;
    public function insertdata($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectdata($table,$email,$pswd)
    {
        return DB::table($table)->where('email',$email)->where('pswd',$pswd)->first();
    }
    public function name($table,$id)
    {
        return DB::table($table)->where('id',$id)->get();
    }
}
