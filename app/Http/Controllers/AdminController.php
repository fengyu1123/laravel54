<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /*
     *
     */
    public function index(){
        return view('admin/index');
    }

    public function knowType(){
        $typeList = \App\KnowType::paginate(5);
        return view('admin/knowType',['typeList'=>$typeList]);;
    }


    /*
     *
     */
    public function addType(Request $request){
        if($request->isMethod('post')){
            $validator = \Validator::make($request->input(),[
                'type.name' => 'required|min:3|max:12',//必须/3个字符/最大12个
            ],[
                'required' => ':attribute 为必填项',
            ],[
                'type.name' => '名字',
            ]);
            if($validator->fails())
            {
                //操持旧数据并返回上一面
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = $request->input('type');//获取模型值
//			$memberId = $request->input('id', 1);
            $type = new \App\KnowType();
            $type->name =$data['name'];
            $type->addtime =time();
            if($type->save()){
                return redirect('admin/knowType')->with('success','添加成功');
            }
        }else{
            return view('admin/knowAdd');
        }


    }

    /*
     *
     */
    public function delType($id){
        if($id){
            $typeinfo =  \App\KnowType::find($id);
            if($typeinfo){
                if($typeinfo->delete()){
                    return redirect('admin/knowType')->with('success','删除成功');
                }
            }
        }
        return redirect('admin/knowType')->with('success','删除异常');
    }
}
