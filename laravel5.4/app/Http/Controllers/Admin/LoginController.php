<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;

class LoginController extends Controller
{
       public function login()
        {

            return view('admin/login');
        }
        public function log()
        {
            $data = $_POST;
            // print_r($data);die;
            $info = DB::table('admin_user')->where(['username'=>$data['username']])->first();
            // print_r($info);die;
            if (empty($info))
            {
                echo "<script>alert('用户名错误');location.href='login'</script>";
            }
            if ($data['password'] !=$info->password )
            {
                 echo "<script>alert('密码错误');location.href='login'</script>";
            }
              $session = new Session;
              $session->set('uid',$info->uid);
             // \Session::put('uid', $info->uid);
             return redirect('showuser');
        }
        public function showuser()
        {
            // $session = new Session;
            //   ;
            //   print_r($session->get('uid'));die;
             $data = DB::table('admin_user')->get();
             // print_r($data);die;
             return view('admin/showuser',['data'=>$data]);
        }
}
