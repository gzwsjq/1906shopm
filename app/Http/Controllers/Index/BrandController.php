<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GoodsModel;

class BrandController extends Controller
{
    //前台的视图
    public function index(){
        //搜索
        $goods_name=request()->goods_name;

        $where=[];
        if($goods_name){
            $where[]=['goods_name','like',"%$goods_name%"];
        }

        //查询商品信息并展示
        $pagesize=config('app.pageSize');
        $data=GoodsModel::where($where)->paginate($pagesize);
        $query=request()->all();
        return view('index/create',['data'=>$data,'query'=>$query]);
    }

    //商品详情的展示
    public function goodsDesc(){
        $id=request()->id;
        $goodsinfo=GoodsModel::where('id',$id)->first();
        return view('index/goods',['goodsinfo'=>$goodsinfo]);
    }

}
