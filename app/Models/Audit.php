<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

const YES = 1;
const NO = 0;
const JU = 2;

const A = 1;
const B = 2;
const C = 3;
const D = 4;

class Audit extends Model
{
    //定义题目表表名
    protected $table = "questions";

    //查询（用于对审核页面展示）
    public function Select(){
        return DB::table($this->table)->join('answer','questions.qid','=','answer.qid')->join('type','questions.tid','=','type.tid')->get()->toArray();
    }
    //审核
    public function Updates($qid){
        return DB::table($this->table)->where('qid',$qid)->update(['status'=>1]);
    }
    //是否审核
    public static function is_audit($status){
        $data = ([
            YES => "已审核",
            NO => "未审核",
            JU => "已拒绝",
        ]);
        return $data[$status];
    }
    //是否拒绝
    public function is_ju($qid){
        return DB::table($this->table)->where('qid',$qid)->update(['status'=>2]);
    }
    //正确答案
    public static function is_true($is_true){
        $data = ([
            A => "A",
            B => "B",
            C => "C",
            D => "D",
        ]);
        return $data[$is_true];
    }
}
