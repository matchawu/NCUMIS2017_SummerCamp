@extends('layouts.layout')
@section('title', '2017資管營')
@section('css')
<link rel="stylesheet" href="{{ asset('loader/loader.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('css/fullpagemenu.css') }}">
<style type="text/css">   
.countdownContainer{
            position: absolute;;
            top: 50%;
            left: 50%;
            transform : translateX(-50%) translateY(-50%);
            text-align: center;
            background: #ddd;
            border: 1px solid #999;
            padding: 10px;
            box-shadow: 0 0 5px 3px #ccc;
        }
.info{
        font-size: 80px;
    }  
.last {
  color: white; /* 字的顏色 */
}
.last h3 {
  margin-bottom: 30px;
}
.last .f-above {
  padding-top: 50px;
  background-color: #2C3E50; /* 背景色可以改 */
}
.last .f-col {
  margin-bottom: 50px;
}
.last .f-below {
  padding: 25px 0;
  background-color: #233140;
}
.f-ul {
    list-style-type:none; /* 不要那顆圓形 */
    padding-left:0px; /* 圓形那顆的去掉 */
    margin-left:2px; /* 加了比較好看一點 */
}
.f-ul li {
    line-height:2em; /* 行距 */
    font-size:1em; /* 超連結大小可以改 */
}
.f-ul li a {
    text-decoration: none; /* 不要底線 */
    color:#a0a3a4;
    transition: color 0.2s linear 0s, background 0.2s linear 0s;
}
.f-ul li a:hover {
    color:#ff670f;
    transition: color 0.2s linear 0s, background 0.2s linear 0s;
}
/* 以下是footer的社交按扭區 */
.btn-outline {
  color: white;
  font-size: 20px;
  border: solid 2px white;
  background: transparent;
  transition: all 0.3s ease-in-out;
  margin-top: 15px;
}
.btn-outline:hover,
.btn-outline:focus,
.btn-outline:active,
.btn-outline.active {
  color: #18BC9C;
  background: white;
  border: solid 2px white;
}
.btn-social {
  display: inline-block;
  height: 50px;
  width: 50px;
  border: 2px solid white;
  border-radius: 100%;
  text-align: center;
  font-size: 20px;
  line-height: 45px;
}    
.slide{
     width:960px
     height:662px;
     text-align: center;
     margin: 0px auto;

}
.card-deck{
    text-align: center;
     margin: 0px auto;
     display: flex;
}
.mainfoot{
  position: relative;
  margin-top: 26%;
}

#menu{
    top: 90%;
    text-align: right;
    left: -20px;
}
.card{
  background-color: rgba(0, 0, 0, 0.28);
  /*width: 85%;*/
  /*height: 85%;*/
}


</style>
<link rel="stylesheet" href="{{ asset('css/jquery.fullPage.css') }}">
@stop
@section('content')
   
        
                    <?php
                      include("loader/loader.php");
                   ?>
                   <div>
                      <ul id="menu">
                          <li data-menuanchor="1page" class><a href="#1page">1</a></li>
                          <li data-menuanchor="2page" class><a href="#2page">2</a></li>
                          <li data-menuanchor="3page" class><a href="#3page">3</a></li>
                          <!-- <li data-menuanchor="4page" class><a href="#4page">4</a></li> -->
                          <!-- <li data-menuanchor="5page" class><a href="#5page">5</a></li>
                          <li data-menuanchor="6page" class><a href="#6page">6</a></li> -->
                      </ul>
                  </div>
                    <div id="wrapper">
                        <!-- #1 -->
                        <div class="section">
                          <div class="card">
                            <div class="card-deck">
                              <div class="card-block">
                                 <div class="card-text">
                                 <table class="countdownContainer">
                                    <tr class="info">
                                        <td colspan="4">MIS Camp Coming Soon</td>
                                    </tr>
                                    <tr class="info">
                                        <td id="days">120</td>
                                        <td id="hours">4</td>
                                        <td id="minutes">12</td>
                                        <td id="seconds">22</td>
                                    </tr>
                                    <tr>
                                        <td>Days</td>
                                        <td>Hours</td>
                                        <td>Minutes</td>
                                        <td>Seconds</td>
                                    </tr>
                                </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- #2 -->
                        <!-- <div class="section">
                           <div class="card-deck">
                               
                               <div class="card slideanim">
                                   <h2 class="card-title" style="color: white">前導影片</h2>
                                   <div class="card-block">
                                   <div class="card-text">
                                       <iframe width="560" height="315" src="https://www.youtube.com/embed/u9ECLRR1U6o" frameborder="0" allowfullscreen></iframe>
                                   </div>
                                   </div>
                               </div>

                           </div>
                        </div> -->
                        <!-- #3 -->
                        <div class="section slideanim">
                            <div class="slide">
                                <img src="img/2015camp_pic1.jpg" width="960" height="662">
                            </div>
                            <div class="slide">
                                <img src="img/2015camp_pic2.jpg" width="960" height="662">
                            </div>
                            <div class="slide">
                                <img src="img/2015camp_pic3.jpg" width="960" height="662">
                            </div>
                            <div class="slide">
                                <img src="img/2015camp_pic4.jpg" width="960" height="662">
                            </div>
                            <div class="slide">
                                <img src="img/2015camp_pic5.jpg" width="960" height="662">
                            </div>
                            <div class="slide">
                                <img src="img/2015camp_pic6.jpg" width="960" height="662">
                            </div> 
                        </div>
                        <!-- #4 -->
                        <div class="section last">
                            <div class="mainfoot">
                            {{-- 上footer --}}
                            <div class="f-above">
                            <div class="container">
                            <div class="row">
                                <div class="f-col col-md-3">
                                    <h3>常用連結</h3>
                                    <div class="row">
                                        
                                        <div class="col-xs-8">
                                            <ul class="f-ul">
                                                <li><a href="http://im.mgt.ncu.edu.tw/index/main.php">中央大學資訊管理系</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="f-col col-md-3">
                                    <h3>社群網站</h3>
                                    <ul class="list-inline">
                                        <li><a href="https://www.facebook.com/2017ncucamp.mis/?fref=ts" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/ncu.mis.summercamp/" class="btn-social btn-outline"><i class="fa fa-instagram" ></i></a></li>
                                       <!--  <li><a href="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ncufreshweb%40gmail.com&amp;color=%232952A3&amp;src=zh-tw.taiwan%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FTaipei" class="btn-social btn-outline"><i class="fa fa-fw fa-google"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCmO3cFtFtdIawfBQpGR8EVA" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube"></i></a></li> -->
                                    </ul>
                                </div>
                                <div class="f-col col-md-3">
                                    <h3>關於我們</h3>
                                    <p><i class="fa fa-info-circle"></i> &nbsp;我們是由一群大二生組成的團隊</p>
                                    <p><i class="fa fa-external-link"></i> <a href="{{ url('/staff') }}"> &nbsp;想知道更多關於資管營團隊的成員嗎?</a></p>
                                   <!--  <p><i class="fa fa-envelope-o"></i>&nbsp; E-mail : ncufreshweb@gmail.com</p> -->
                                </div>
                                <div class="f-col col-md-3">
                                    <h3>報名資訊</h3>
                                    <p><i class="fa fa-link"></i> <a href="{{ url('/signup') }}">&nbsp;點我報名</a></p>
                                    <p><i class="fa fa-train"></i> <a href="{{ url('/traffic') }}">&nbsp;那要怎麼去?</a></p>
                                   <!--  <p><i class="fa fa-envelope-o"></i>&nbsp; E-mail : ncufreshweb@gmail.com</p> -->
                                </div>
                            </div>
                            </div>
                            </div>
                            {{-- 下footer --}}
                            <div class="f-below text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            國立中央大學2017資管營 版權所有 &copy; 2017 NCU MIS CAMP All Rights Reserved
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>    

                        
                        </div>
                    </div>
 @endsection
 
 @section('js')
    <script src="{{ asset('js/jquery.fullPage.js') }}"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            $('#wrapper').fullpage({
                anchors:['1page', '2page','3page'],
                menu: '#menu',
                scrollBar: true,
            });
            
        });
        $("footer").css("display","none");
    </script>
    <script type="text/javascript">
            function countdown(){
                var now = new Date();
                var eventDate = new Date(2017, 06, 14);
                var currentTiime = now.getTime();
                var eventTime = eventDate.getTime();
                var remTime = eventTime - currentTiime;
                var s = Math.floor(remTime / 1000);
                var m = Math.floor(s / 60);
                var h = Math.floor(m / 60);
                var d = Math.floor(h / 24);
                h %= 24;
                m %= 60;
                s %= 60;
                h = (h < 10) ? "0" + h : h;
                m = (m < 10) ? "0" + m : m;
                s = (s < 10) ? "0" + s : s;
                document.getElementById("days").textContent = d;
                document.getElementById("days").innerText = d;
                document.getElementById("hours").textContent = h;
                document.getElementById("minutes").textContent = m;
                document.getElementById("seconds").textContent = s;
                setTimeout(countdown, 1000);
            }
            countdown();
            setTimeout(function(){
                $('body').addClass('loaded');
            }, 1500);
        </script>

 @stop