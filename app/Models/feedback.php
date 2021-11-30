<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB; 

class feedback extends Model
{
    use HasFactory;
    public function insertfeedback($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectfeedback($table)
    {
         return DB::table($table)->get();
    }
}
