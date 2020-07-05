<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


function getImgType($data) {
    if($data=='1') {
        return '首页banner';
    }else if ($data=='2') {
        return '轮播图';
    }else if ($data=='3') {
        return '培训资源';
    }else if ($data=='4') {
        return '课程安排';
    }else if ($data=='5') {
        return '学员风采';
    }else if ($data=='6') {
        return '将军风采';
    }else if ($data=='7') {
        return '后勤保障-住宿';
    }else if ($data=='8') {
        return '后勤保障-餐厅';
    }else if ($data=='9') {
        return '后勤保障-车辆';
    }else if ($data=='10') {
        return '后勤保障-其他';
    }
}

function getArticleType($data) {
    if($data=='1') {
        return '新闻资讯';
    }else if ($data=='2') {
        return '培训动态';
    }else if ($data=='3') {
        return '公告';
    }else if ($data=='4') {
        return '大别山红色记忆';
    }
}