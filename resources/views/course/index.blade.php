@extends('layouts.layout')
@section('title', '2017資管營 | 課程資訊')
@section('content')
   
       <?php
            include("loader/loader.php");
       ?>
         
        
        <div class="container-fluid com" style="background-image: url({{asset('img/background1.png')}}); margin-top: 7%" id="content">
            <div class="flipbook-viewport" title="點擊右上角" style="margin-left: 11%">
                <div class="container1">
                    <div class="flipbook">
                        <div class="page hard" style="background-image:url({{asset('img/magicbook1.png')}})"></div>
                        <div class="page hard" style="background-image:url({{asset('img/ncumis.jpg')}}"></div>
                        <div class="double" style="background-image:url({{asset('img/summercamp.jpg')}}"></div>
                        <div class="double" style="background-image:url({{asset('img/app.jpg')}}"></div>
                        <div class="double" style="background-image:url({{asset('img/html.jpg)')}}"></div>
                        <div class="double" style="background-image:url({{asset('img/computer.jpg')}}"></div>
                        <div class="double" style="background-image:url({{asset('img/c.jpg')}}"></div>
                        <div class="double" style="background-image:url({{asset('img/sale.jpg')}}"></div>
                        <div class="page hard" style="background-image:url({{asset('img/enjoy.jpg')}}"></div>
                        <div class="page hard" style="background-image:url({{asset('img/magicbook2.png')}}"></div>
                    </div>
                </div>
            </div>
            <span class="label label-danger" style="margin-left: 90%;"> 點擊右上角</span>
        </div>

       <!--  手機板 -->        
        <div class="container-fluidd phone bg-1" style="height: 2000px;">
            <row>
                <h1>ABOUT   COURSE</h1>
                <h5>關於課程</h5>
            </row>
            <br><br><br><br><br><br>
            <row>
                <img src="img/blackbox.png" class="blackbox">
                <br><br>
            </row>
            <row>    
                <div class="col-xs-3" style="height: 1530px;">
                    <div class="div1" style="margin-top: 10%">
                        <br><br>
                        <div class="boxline">  
                            <div class="div2"></div>
                        </div>
                        <div class="boxline">
                            <div class="div2"></div>
                        </div>
                        <div class="boxline">
                            <div class="div2"></div>
                        </div>
                        <div class="boxline">
                            <div class="div2"></div>
                        </div>
                        <div class="boxline">
                            <div class="div2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-9 word" style="height: 1530px; ">
                    <br><br>
                    <div class="box">    
                        <h3 class="txt"><strong>APP</strong></h3>
                        <h4 class="txt">你曾經好奇手機上的APP是如何做出來的嗎？有沒有想過自己動手做出一個厲害的APP呢？APP課程，帶你認識基礎的APP設計</h4>
                    </div>
                    <div class="box">
                        <h3 class="txt"><strong>HTML</strong></h3>
                        <h4 class="txt">好奇漂亮網頁背後的代碼嗎？
                        想要研發更多酷炫的網頁形式嗎？
                        到底要怎麼製作出屬於自己獨一無二的網頁呢
                        HTML教學課程，讓你一窺網頁的奧秘！</h4>
                    </div>
                    <div class="box">
                        <h3 class="txt">電腦組裝</h3>
                        <h4 class="txt">想知道電腦厚重外殼下的內心世界嗎?
                        想明白主機板裡頭的奧妙嗎?
                        就讓電腦小達人帶你發現他的神奇吧～～
                        </h4>
                    </div>
                    <div class="box">
                        <h3 class="txt"><strong>C語言</strong></h3>
                        <h4 class="txt">你的夢想是成為程式高手嗎？
                        曾經羨慕過google,microsoft工程師寫出那些普及全球又便利的軟體嗎？想馬上踏出寫程式的第一步嗎？
                        那就來學程式語言C，讓您擁有人生第一個程式！
                        </h4>
                    </div>
                    <div class="box">
                        <h3 class="txt"><strong>行銷學</strong></h3>
                        <h4 class="txt">想成為行銷CEO嗎？
                        想知道熱門產品背後的行銷手法嗎？
                        在管理課程中讓我們一起探索行銷的美學！
                        </h4>
                    </div>
                </div>
            </row>
            
           
        </div>
        
             
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('loader/loader.css') }}" media="screen">

<!-- fullpage -->
<link rel="stylesheet" type="text/css" href="{{asset('css/magicbookphone.css')}}">


<style>
.container{
    margin-top: 50px;
}
#content{
    margin-top: 8%;
    margin-bottom: 12%;
}
.flipbook{
    margin-top: 7%;
}
</style>

<style>
    /*文字介紹*/
    .txt{
        animation-name: wordeffect;
        animation-duration: 1s;
        animation-delay: 3.1s;
        animation-timing-function: linear;
    }
    @keyframes wordeffect{
        0% {opacity:0;}
        50%{opacity:0.5;}
        100%{opacity:1;}
    }
    
    /*垂直線*/
    .div1{
        height: 100%;
        width:  1%;
        position: relative;
        background-color: black;
        animation-name: line;
        animation-duration: 3s;
        animation-delay: 3s;
        transition:height 1s;

    }
    @keyframes line{
        0% {height:0%;}
        100%{height: 100%;}
    }
    
    /*水平線*/
    .div2{
        height:1px;
        width: 55px;
        background-color: black;
        animation-name: line1;
        animation-duration: 3s;
        animation-delay:3.1s;
        transition:width 1s; 
    }
    @keyframes line1{
        0% {width: 0px;}
        100% {width: 55px;}
    }

    /*線和文字的寬度*/
    .box{
        height: 250px;
        width: 260px;
    }

    .boxline{
        height: 270px;
        width: 250px;
    }
    
    /*盒子*/
    .blackbox{
        height: 30px;
        width: 30px; 
        margin-left:2px;
        animation-name: box;
        animation-duration: 2s;
        animation-delay: 3s;
    }
    @keyframes box{
        0% {transform: rotate(60deg);}
        100% {transform: rotate(0deg);}
    }

</style>



@endsection

@section('js')
        <script type="text/javascript" src="{{asset('extras/modernizr.2.5.3.min.js')}}"></script>
        
        <script type="text/javascript">
            function loadApp() {
                var flipbook = $('.flipbook');
                if (flipbook.width()==0 || flipbook.height()==0) {
                    setTimeout(loadApp, 10);
                    return;
                }
                //設定翻書
                $('.flipbook').turn({
                        elevation: 50,
                        gradients: true,
                        autoCenter: true
                });
            }
            yepnope({
                test : Modernizr.csstransforms,
                yep: ['{{asset('lib/turn.min.js')}}'],
                nope: ['{{asset('lib/turn.html4.min.js')}}'],
                both: ['{{asset('lib/scissor.min.js')}}', '{{asset('css/magicbook.css')}}'],
                complete: loadApp
            });

            setTimeout(function(){
                $('body').addClass('loaded');
            }, 1500);
            if (window.matchMedia('(min-width: 992px)').matches) {
                // 電腦版
                $('.phone').css('display','none');
                $('.com').css('display','block');
            }else{
                // 手機板
                $('.com').css('display','none');
                $('.phone').css('display','block');
            }
        </script>
@stop
