<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\Models\Admin_user;

class Lianxi2Controller extends Controller
{
    public function hao()
    {
        return view('admin/add1');
    }
    public function add1()
    {
        $data = Input::get();
        // print_r($data);die;
        $user = new Admin_user;
        // print_r($user);die;
        $res = $user->cityadd($data);
        if($res)
        {

            return redirect('show1');
        }
        else
        {
             echo "<script>alert('添加失败');location.href='add1'</script>";
        }
    }
    public function show1()
    {
         $user = new Admin_user;
         $data = $user->getPage();
         // print_r($data);die;
         return view('admin/show1',['data'=>$data]);
    }
    public function del1()
    {
         $id = Input::get('id');
         // echo $id;die;
         $user = new Admin_user;
         $res = $user->deleteOne($id);
         if ($res)
            {
                 return redirect('show1');
            }
            else
            {
                echo "<script>alert('删除失败');location.href='show1'</script>";
            }
    }
    public function up1()
    {
         $id = Input::get('id');
         // echo $id;die;
         $user = new Admin_user;
         $data = $user->getOne($id);
         // print_r($data);die;
         return view('admin/up1',['data'=>$data]);
    }

    public function save1()
    {
        $data = Input::get();
        // print_r($data);die;
        $user = new Admin_user;

        $res = $user->upOne($data['id'],$data);
        if ($res)
        {
             return redirect('show1');
        }
        else
        {
            echo "<script>alert('修改失败');location.href='up1'</script>";
        }
    }
}
