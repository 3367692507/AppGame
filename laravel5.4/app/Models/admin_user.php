<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin_user extends Model
{
    protected $table = 'user1';

    public $timestamps = false;
//添加 返回id
public function cityadd($data)
{
    return $this->insertGetId($data);
}
//单条查找
public function getfind($id)
{
    if($this->where('id',$id)->first()){
      return $this->where('id',$id)->first()->toArray();
    }else{
      return [];
    }
}
//查询用户有几个uid,返回数量
public function countCity($uid){
    if($this->where('uid',$uid)->first()){
      return $this->where('uid',$uid)->count();
    }else{
      return [];
    }
}
//查询全部数据
public function getAll()
{
    return $this->get()->toArray();
}
public function getPage()
{
    return $this->paginate(3);
}
public function deleteOne($id)
{
    return $this->where(['id'=>$id])->delete();
    // return DB::table('admin_user')->where(['id'=>$id])->delete();
}
public function getOne($id)
{
    return $this->where(['id'=>$id])->first();
}
public function upOne($id,$data)
{
    return $this->where(['id'=>$id])->update($data);
}
/**
* 修改管理员信息
* @param $id
* @param $data
* @return bool
*/
public function upAdmin($id,$data)
{
    if($this->find($id)){
      return $this->where('id',$id)->update($data);
    }else{
      return false;
    }
}
//加条件，时间
//查询用户的认购的城数
public function buy_num($uid){
    $startDate = date('Y-m-01', strtotime(date("Y-m-d")));
    $endDate = date('Y-m-d', strtotime("$startDate +1 month -1 day"));
    // 将日期转换为Unix时间戳
    $endDate=$endDate." 22:59:59";
    $startDateStr = strtotime($startDate);
    $endtDateStr = strtotime($endDate);
    return $this->where('uid',$uid)->where('buy_type',1)->whereBetween('create_time', array($startDateStr,$endtDateStr))->sum('buy_num');
}
/**
* 根据id查找城池信息 只返回某个字段的值
* @param $id
* @return array
*/
public function getCityName($id)
{
    if($this->where('city_id',$id)->first()){
      return $this->where('city_id',$id)->lists('city_name')[0];
    }else{
      return [];
    }
}
}

