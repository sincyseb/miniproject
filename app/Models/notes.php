<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class notes extends Model
{
    use HasFactory;
    public function insertnote($table,$data)
    {
        DB::table($table)->insert($data);
    }
    public function selectnotes($table)
    {
         return DB::table($table)->get();
    }
}
