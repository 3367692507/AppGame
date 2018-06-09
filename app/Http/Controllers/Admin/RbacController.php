<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Role;
use App\Models\Node;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class RbacController extends Controller
{
    public function user_add(Request $request){
        if($request->isMethod('post')){
            //实例化model
            $user = new User();
            $data = $request->input();
            $res = $user ->Insert($data);
            if($res){
                return redirect('user_add')->with('message', '添加成功！');
            }else{
                return redirect('user_add')->with('message', '添加失败！');
            }
        }else{
            return view('rbac.user_add');
        }
    }

    public function user_list()
    {
         $model = new User();
         $data = $model->Select();
        return view('rbac.user_list',['data'=>$data]);
    }

    public function role_add(Request $request)
    {
        if($request->isMethod('post')){
            //实例化model
            $model = new Role();
            $data = $request->input();
            $res = $model ->Insert($data);
            if($res){
                return redirect('role_add')->with('message', '添加成功！');
            }else{
                return redirect('role_add')->with('message', '添加失败！');
            }
        }else{
            return view('rbac.role_add');
        }
    }

    public function role_list()
    {
        $model = new Role();
        $data = $model->Select();
        return view('rbac.role_list',['data'=>$data]);
    }
//用户赋角色---给角色添加用户
    public function user_role(Request $request)
    {
        $role_id = $request->input();
        $role_id = implode($role_id);
        $data =  DB::table('user_role')
            ->join('user', 'user.user_id', '=', 'user_role.user_id')
            ->join('role', 'role.role_id', '=', 'user_role.role_id')
            ->get()->toArray();
        $model = new Role();
        $users = $model->SelectUser($role_id);
        return view('rbac.user_role',['username'=>$users,'data'=>$data,'role_id'=>$role_id]);
    }
//角色赋权限
    public function role_node(Request $request)
    {
        $role_id = $request->input();
        $role_id = implode($role_id);
        $model = new Node();
        $data = $model->select($role_id);
        $data1 = $model->selectNode();
        return view('rbac.role_node',['data1'=>$data1]);

    }

    public function role_add_do(Request $request)
    {
        $data = $request->input();
        $model = new Role();
        $res = $model->insert_user_role($data);
        if($res){
            return redirect('user_role')->with('message', '添加成功！');
        }else{
            return redirect('user_role')->with('message', '添加失败！');
        }
    }
}