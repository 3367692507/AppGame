<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //题目类型表表名
    protected $table = "type";

    //题目类型添加
    public function Insert($data){
        return DB::table($this->table)->insert([
            ['tname'=> $data['tname']],
        ]);
    }
    //题目类型查询（列表展示）
    public function Select(){
        return DB::table($this->table)->get()->toArray();
    }
}
