<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class result extends Model
{
    use HasFactory;
    public function insertresult($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectresult($table)
    {
         return DB::table($table)->get();
    }
     public function rapprove($table,$data,$id)
     {
         return DB::table($table)->where('id',$id)->update($data);
     }
    //  public function selectresults($table)
    // {
    //      return DB::table($table)->where('status',$status)->get();
    // }
}
