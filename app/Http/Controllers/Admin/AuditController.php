<?php

namespace App\Http\Controllers\Admin;
use App\Models\Audit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuditController extends Controller
{
    /*
     *审核页面
     */
    public function audit(){
        //实例化model
        $audit = new Audit();
        $data = $audit->Select();
        $new_data = [];
        foreach ($data as $key => $val){
            $val->acontent = explode(',',$val->acontent);
            $new_data[] = $val;
        }
        return view('audit.audit',['data'=>$new_data]);
    }
    //审核
    public function auditDo(Request $request){
        $audit = new Audit();
        if($request->isMethod('post')){
            $qid= $request->input('qid');
            $res = $audit->Updates($qid);
            $one = [
                'code'=>1,
                'msg' => "审核成功",
            ];
            $two = [
                'code' => 0,
                'msg' => "审核失败",
            ];
            if($res){
                echo json_encode($one);
            }else{
                echo json_encode($two);
            }
        }
    }
    //拒绝
    public function ju(Request $request){
        $audit = new Audit();
        if($request->isMethod('post')){
            $qid= $request->input('qid');
            $res = $audit->is_ju($qid);
            $one = [
                'code'=>1,
                'msg' => "拒绝成功",
            ];
            $two = [
                'code' => 0,
                'msg' => "拒绝失败",
            ];
            if($res){
                echo json_encode($one);
            }else{
                echo json_encode($two);
            }
        }
    }
}
