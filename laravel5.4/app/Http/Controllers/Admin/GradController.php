<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;

class GradController extends CommonController
{
      public function gradindex()
      {
             // $session = new Session;
            //   ;
            //   print_r($session->get('uid'));die;
          return view('admin/addgrad');
      }
      //Request $request
      public function addgrad()
      {
           // $data = $request->input();
           // $data = Input::get();
           // print_r($data);die;
           $data = $_POST;
           // print_r($data);die;
        $file = \Request::file('img');
        // var_dump($file);die;
        // $name = Request::input('name');
        $allowed_extensions = ["png", "jpg", "gif"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => 'You may only upload png, jpg or gif.'];
        }
        $destinationPath = 'storage/uploads/'; //public 文件夹下面建 storage/uploads 文件夹
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(10).'.'.$extension;
        $file->move($destinationPath, $fileName);
        $filePath = asset($destinationPath.$fileName);
        // print_r($filePath);die;
        $data['grad_img'] = $filePath;
            // print_r($data);die;
        $res = DB::table('grad')->insert($data);
        if($res)
        {

            return redirect('showgrad');
        }
        else
        {
            return redirect('addgrad');
        }
      }
      public function showgrad()
      {
          $data = DB::table('grad')->paginate(3);
          // print_r($data);die;
          return view('admin/showgrad',['data'=>$data]);
      }
      public function delgrad()
      {
          $id = $_GET['id'];
          // echo $id;die;
          $res = DB::table('grad')->where(['grad_id'=>$id])->delete();
          if ($res)
            {
                 return redirect('showgrad');
            }
            else
            {
                echo "<script>alert('删除失败');location.href='showgrid'</script>";
            }
      }
      public function upgrad()
      {
           $id = $_GET['id'];
          // echo $id;die;
            $data = DB::table('grad')->where(['grad_id'=>$id])->first();
            return view('admin/upgrad',['data'=>$data]);
      }

      public function savegrad()
      {
          $data = $_POST;
           // print_r($data);die;
            $file = \Request::file('img');
            // var_dump($file);die;
            // $name = Request::input('name');
            $allowed_extensions = ["png", "jpg", "gif"];
            if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                return ['error' => 'You may only upload png, jpg or gif.'];
            }
            $destinationPath = 'storage/uploads/'; //public 文件夹下面建 storage/uploads 文件夹
            $extension = $file->getClientOriginalExtension();
            $fileName = str_random(10).'.'.$extension;
            $file->move($destinationPath, $fileName);
            $filePath = asset($destinationPath.$fileName);
            // print_r($filePath);die;
            $data['grad_img'] = $filePath;
            // print_r($data);die;
            //
            $res = DB::table('grad')->where(['grad_id'=>$data['grad_id']])->update($data);
            if ($res)
            {
                 return redirect('showgrad');
            }
            else
            {
                echo "<script>alert('修改失败');location.href='upgrid'</script>";
            }
      }
}
