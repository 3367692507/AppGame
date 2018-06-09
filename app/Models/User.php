<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

const ON = 1;
const OFF = 0;
const ADMIN = 1;
const USER = 0;

class User extends Model
{
    //定义题目表名
    protected $table = 'user';

    //题目添加入库
    public function Insert($data){
        return DB::table($this->table)->insert([
            'username' => $data['username'],
            'password' => $data['userpwd'],
            'add_time' =>time(),
        ]);
    }
    //题目列表展示
    public function Select(){
        return DB::table($this->table)->get()->toArray();
    }
    //题目审核状态
    public static function status($status){
        $data = ([
            ON => "通过",
            OFF => "未通过",
        ]);
        return $data[$status];
    }
    //录入方式
    public static function is_admin($origin){
        $data = ([
            ADMIN => "管理员",
            USER => "用户",
        ]);
        return $data[$origin];
    }
}