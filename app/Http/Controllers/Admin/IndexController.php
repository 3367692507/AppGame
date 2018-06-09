<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }
    //登陆
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $info = DB::table('user')->where(['username'=>$data['username']])->first();
            if(empty($info)){
                echo "<script>alert('用户名错误');location.href='login'</script>";
            }else{
                if ($data['password'] !=$info->password ) {
                    echo "<script>alert('密码错误');location.href='login'</script>";
                }else{
                    $session = new Session;
                    $session->set('uid',$info->user_id);
                    // \Session::put('uid', $info->uid);
                    return redirect('index');
                }
            }
        }else{
            return view('index.login');
        }
    }
}
