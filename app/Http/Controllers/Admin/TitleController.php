<?php

namespace App\Http\Controllers\Admin;

use App\Models\Answer;
use App\Models\Quertions;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TitleController extends Controller
{
    /*
     *题目添加
     */
    public function question(Request $request){
        if($request->isMethod('post')){
            //实例化model
            $question = new Quertions();
            $data = $request->input();
            $res = $question ->Insert($data);
            if($res){
                return redirect('question')->with('message', '添加成功！');
            }else{
                return redirect('question')->with('message', '添加失败！');
            }
        }else{
            //实例化两个model
            $type = new Type();
            $type_data = $type->Select();
            return view('title.question',['type_data'=>$type_data]);
        }
    }
    /*
     * 题目展示列表
     */
    public function question_list(){
        //实例化model
        $question = new Quertions();
        $data = $question->Select();
        return view('title.question_list',['data'=>$data]);
    }
    /*
     *答案添加
     */
    public function answer(Request $request){
        $answer = new Answer();
        if($request->isMethod('post')){
            $data = $request->input();
            $data['addtime'] = time();
            $data['acontent'] = implode(',',$data['acontent']);
            $data['is_true'] = implode(',',$data['is_true']);
            $res = $answer ->Insert($data);
            if($res){
                return redirect('answer')->with('message', '添加成功！');
            }else{
                return redirect('answer')->with('message', '添加失败！');
            }
        }else{
            $question = new Quertions();
            $qname = $question ->Select();
            return view('title.answer',['qname'=>$qname]);
        }
    }
    /*
     *答案列表展示
     */
    public function answer_list(){
        $answer = new Answer();
        $data = $answer->Select();
        $new_data = [];
        foreach ($data as $key => $val){
           $val->acontent = explode(',',$val->acontent);
           $new_data[] = $val;
        }
        return view('title.answer_list',['data'=>$new_data]);
    }
    /*
     *题目类型添加
     */
    public function type(Request $request){
        //实例化model
        $type = new Type();
        //判断请求类型
        if($request->isMethod('post')){
            //接收问题类型的信息
            $data = $request->input();
            //调用model的添加方法
            $res = $type->Insert($data);
            if($res){
                return redirect('type')->with('message', '添加成功！');
            }else{
                return redirect('type')->with('message', '添加失败！');
            }
        }else{
            return view('title.type');
        }
    }
    /*
     *题目类型展示列表
     */
    public function type_list(){
        //实例化model
        $type = new Type();
        $data = $type ->Select();
        return view('title.type_list',['data'=>$data]);
    }
}
