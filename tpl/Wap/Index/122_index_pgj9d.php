<!DOCTYPE html>
<html>    <head>
       <if condition="$zd['status'] eq 1">
            {pigcms{$zd['code']}
        </if>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>{pigcms{$tpl.wxname}</title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
<link href="{pigcms{$static_path}css/allcss/cate22_{pigcms{$tpl.color_id}.css" rel="stylesheet" type="text/css" />
        
    <!-- <link rel="stylesheet" type="text/css" href="{pigcms{$static_path}css/122/common.css" media="all"> -->
<link rel="stylesheet" type="text/css" href="{pigcms{$static_path}css/122/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="{pigcms{$static_path}css/122/font-awesome.css" media="all">
<!-- <link rel="stylesheet" type="text/css" href="{pigcms{$static_path}css/122/home-42.css" media="all"> -->
<script type="text/javascript" src="{pigcms{$static_path}css/116/jQuery.js"></script>
<script type="text/javascript" src="{pigcms{$static_path}css/122/zepto.js"></script>
<script type="text/javascript" src="{pigcms{$static_path}css/122/swipe.js"></script>

    <body onselectstart="return true;" ondragstart="return false;">
    <!--背景音乐-->
<if condition="$homeInfo['musicurl'] neq false">
<include file="Index:music"/>
</if>
        <div class="body" style="width:100%">
    <section>
        <!--img src="../images/v32_1.jpg" style="width:100%;" /-->
        <ul class="list_ul" style="width:100%">
            <li class="box">
            <volist name="info" id="vo">
                <if condition="$i lt 3">    
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
            </volist>
                                       
            </li>
            <li class="box">   
            <volist name="info" id="vo">
                <if condition="$i eq 3">                           
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
                <li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 3) and ($i lt 6)">                              
                <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
                </volist>
                                       
            </li>
            <li class="box"> 
            <volist name="info" id="vo">
                <if condition="$i eq 6">                          
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
				<li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 6) and ($i lt 9)">    
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
            </volist>
                                       
            </li>
            <li class="box">   
            <volist name="info" id="vo">
                <if condition="$i eq 9">                           
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
                <li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 9) and ($i lt 12)">                              
                <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
                </volist>
                                       
            </li>
            <li class="box"> 
            <volist name="info" id="vo">
                <if condition="$i eq 12">                          
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
                <li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 12) and ($i lt 15)">                              
                <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
                </volist>
                                       
            </li>
            <li class="box"> 
            <volist name="info" id="vo">
                <if condition="$i eq 15">                          
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
				<li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 15) and ($i lt 18)">    
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
            </volist>
                                       
            </li>
            <li class="box">   
            <volist name="info" id="vo">
                <if condition="$i eq 18">                           
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
                <li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 18) and ($i lt 21)">                              
                <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
                </volist>
                                       
            </li>
            <li class="box"> 
            <volist name="info" id="vo">
                <if condition="$i eq 21">                          
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
				<li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 21) and ($i lt 24)">    
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
            </volist>
                                       
            </li>
            <li class="box">   
            <volist name="info" id="vo">
                <if condition="$i eq 24">                           
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
                <li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 24) and ($i lt 27)">                              
                <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
                </volist>
                                       
            </li>
            <li class="box"> 
            <volist name="info" id="vo">
                <if condition="$i eq 27">                          
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>
                <li class="box">
            <volist name="info" id="vo">
                <if condition="($i gt 27) and ($i lt 30)">                              
                <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
            <label>{pigcms{$vo.name}</label>
                    <span>
                            <img src="{pigcms{$vo.img}" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a>
                </if>
                </volist>
                                       
            </li>
            <li class="box"> 
            <volist name="info" id="vo">
                <if condition="$i eq 30">                          
            <a href="<if condition="$vo['url'] eq ''">{pigcms{:U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}<else/>{pigcms{$vo.url|htmlspecialchars_decode}</if>">
                                <div class="imgBox fl">
                        <img src="{pigcms{$vo.img}" style="width:150px;height:85px;" />
                    </div>
                    <label>{pigcms{$vo.name}</label>
                </a>
                </if>
                </volist>
                </li>

				<ul>
    </ul></ul></section>
<if condition="$homeInfo['copyright']">
<div class="copyright" style="text-align:center;padding:10px 0">{pigcms{$homeInfo.copyright}</div> 
</if>
</div>
<include file="Index:styleInclude"/>
<include file="$cateMenuFileName"/>   
<!-- share -->
<include file="Index:share" />
</body></html>
