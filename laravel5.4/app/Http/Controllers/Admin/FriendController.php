<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;

class FriendController extends CommonController
{
    public function findex()
    {
        return view('admin/addfriend');
    }
    public function addfriend()
    {
        $data = $_POST;
        // print_r($data);die;
        $res = DB::table('friend')->insert($data);
        if ($res)
        {
             return redirect('showfriend');
        }
        else
        {
            echo "<script>alert('添加失败');location.href='addfriend'</script>";
        }
    }
    public function showfriend()
    {
         $data = DB::table('friend')->paginate(3);
        // print_r($data);die;
        return view('admin/showfriend',['data'=>$data]);
    }
    public function delfriend()
    {
        $id = $_GET['id'];
        // echo $id;die;
        $res = DB::table('friend')->where(['friends_id'=>$id])->delete();
        if ($res)
        {
             return redirect('showfriend');
        }
        else
        {
            echo "<script>alert('删除失败');location.href='showfriend'</script>";
        }
    }
    public function upfriend()
    {
        $id = $_GET['id'];
        // echo $id;die;
        $data = DB::table('friend')->where(['friends_id'=>$id])->first();
        // print_r($data);die;
        return view('admin/upfriend',['data'=>$data]);
    }
    public function savefriend()
    {
        $data = $_POST;
         // print_r($data);die;
        $res = DB::table('friend')->where(['friends_id'=>$data['friends_id']])->update($data);
        if ($res)
        {
             return redirect('showfriend');
        }
        else
        {
            echo "<script>alert('修改失败');location.href='upfriend'</script>";
        }

    }
}
