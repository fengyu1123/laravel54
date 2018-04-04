<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowType extends Model
{
    protected $table = 'know_type';
    protected $promaryKey = 'id';
    public $timestamps = false;  //是否开启时间戳自动调节
    //protected function getDateFormat() { return time(); } // 使用时间戳存入数据库
    //protected function asDatetime($val) { return $val; }  //将数据库里的时间戳取出时不被转换为日期
    protected $fillable = ['name'];// 允许批量赋值的字段 白名单设置
    protected $guarded = [];  //不允许批量赋值的字段 黑名单设置
    protected $dates = [
        'addtime'
    ];
    protected $dateFormat = 'U';// 模型的日期字段保存格式。
    /**
     * 获取用户的名字。
     *
     * @param  string  $value
     * @return string
     */
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * 设定用户的名字。
     *
     * @param  string  $value
     * @return void
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
}
