<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     *
     */
    public function index(){
        $type = \App\KnowType::all();

        $yw = DB::table('know')->where('type','要闻关注')->orderBy('id','desc')->take(8)->get();
        return view('index/index',
                    [
                        'title'=>'新闻首页',
                        'type'=>$type,
                        'yw'=>$yw
                        ]
        );
    }

    /**
     *
     */
    public function news_detail($id){
        if($id>0){
            $detail = DB::table('know')->where('id',$id)->first();
            $type = \App\KnowType::all();
            if($detail){
                return view('index/detail',[
                        'detail'=>$detail,
                        'type'=>$type]);
            }
        }

    }
}
