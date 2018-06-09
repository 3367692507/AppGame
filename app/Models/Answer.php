<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

const A = 1;
const B = 2;
const C = 3;
const D = 4;

class Answer extends Model
{
    //定义答案表表名
    protected $table = "answer";

    //答案内容添加入库
    public function Insert($data){
        return DB::table($this->table)->insert([
            'qid' => $data['qid'],
            'acontent' =>$data['acontent'],
            'addperson' =>$data['addperson'],
            'addtime' => $data['addtime'],
            'is_true' =>$data['is_true'],
        ]);
    }
    //答案查询（列表展示）
    public function Select(){
        return DB::table($this->table)->join('questions','answer.qid','=','questions.qid')->get()->toArray();
    }
    //ABCD
    public static function abcd($num){
        $data = ([
            A => "A",
            B => "B",
            C => "C",
            D => "D",
        ]);
        return $data[$num];
    }
}
