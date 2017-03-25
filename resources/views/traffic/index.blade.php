@extends('layouts.layout')

@section('title', '2017資管營 | 交通方式')
<!-- ==================================text/css================================== -->
@section('css')
<style> 
	.left{width:40%; 
		float:left; 
		height:100%; 
		border-style:outset;
		border-width: 5px;
		padding-top:15px; 
		padding-left:10px; 
		padding-right:30px; 
		padding-bottom:40px; 
	}
	.right{
		width:60%; 
		float:left; 
		height:100%; 
		border-style:double;
		border-width: 5px;

	}
	.ContainBox{
		width: 1140px;
		height: 500px;
		background-color:#d3d3d3;
		border-width:1px;
		border-color: black;
		border-style:solid;
	}
	.contentwords{
		font-size: 16px;
	}
	#note {
		text-align: right;
	}
	.nav-tabs{
		background-color: #696969;
	}
	.nav-tabs > li > a:hover{
		background-color:#a9a9a9!important;
		color:#fff;
		
	}
	.nav-tabs > li > a:active{
		background-color:#000000!important;
		position: relative;
		top: 1px;
		left: 1px;
		color: #0000FF;
	}
	.navdown{
		background-color:#000000!important;
		color: #0000FF;
	}
	.abgne_tip_gallery_block {
		margin: 0;
		padding: 0;
		width: 100%;
		height: 500px;
		overflow: hidden;
		position: relative;
	}
	.abgne_tip_gallery_block img {
		position: absolute;
		z-index: 0;
		border: 0;
	}
	.abgne_tip_gallery_block .caption {
		position: relative;
		top: 440px;	/* .abgne_tip_gallery_block 的高 - 想顯示 title 的高(這邊是設 55) */
		width: 100%;	/* .abgne_tip_gallery_block 的寬 - .caption 的左右 padding */
		padding: 12px 30px 25px;
		cursor: default;
		color: #fff;
		background: rgba(0%,0%,0%,0.8);
		z-index: 4;
	}
	.abgne_tip_gallery_block .caption h2 {
		margin: 0;
		padding: 0px 0px 15px;
	}
	#note{
		color:white;
		font-size: 14px;
	}
	#mouse1{
		margin: 0px;
		border: 0px;
		padding: 0px;
		position:absolute;
		height: 30px;
		width: 30px;
		z-index: 2;
		top: 67%;
		left: 29%;

	}
	#mouse2{
		margin: 0px;
		border: 0px;
		padding: 0px;
		position:absolute;
		height: 30px;
		width: 30px;
		z-index: 2;
		top: 45%;
		left: 79%;

	}
	.movebutton{
		color: rgb(20, 15, 224);
		font-size: 15px;
		font-weight:bold;
		text-shadow:0px 0px 10px #37f341, 0px 0px 10px #fff;
	}
	
	.phContainBox{
		background-color:#d3d3d3;
		box-sizing: border-box;
		border: 2px white solid;
	}

	.phTopBox{
		height: 60%;

	}

	.phBotBox{
		height: 40vh;
	}
	
	.flipx {
    -moz-transform:scaleX(-1);
    -webkit-transform:scaleX(-1);
    -o-transform:scaleX(-1);
    transform:scaleX(-1);
    /*IE*/
    filter:FlipH;
}


	.font{
		font-family: 'FontAwesome';
  src: url('../fonts/fontawesome-webfont.eot?v=4.6.3');
  src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.6.3') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.6.3') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.6.3') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.6.3') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
	}
</style>
@stop
<!-- ==================================text/javascript================================== -->


@section('js')
<script type="text/javascript">

	$( document ).ready(function() {
		$(function(){
			$("#nav li").click(function(){
				$("#nav li").eq($(this).index()).addClass("navdown").siblings().removeClass("navdown");
			})
		})
		
		$(function(){
	// 預設標題區塊 .abgne_tip_gallery_block .caption 的 top
	var _titleHeight = -200;
	$('.abgne_tip_gallery_block').each(function(){
		// 先取得區塊的高及標題區塊等資料
		var $this = $(this), 
		_height = $this.height(), 
		$caption = $('.caption', $this),
		$captioninner = $('.captioninner', $caption)
		_captionHeight = $caption.outerHeight(true),
		_captioninnerHeigh = $captioninner.outerHeight(true),
		_speed = 300;

		
		// 當滑鼠移動到區塊上時
		$this.hover(function(){
			// 讓 $caption 往上移動
			$caption.stop().animate({top: 359}, _speed);}, 

			function(){
			// 讓 $caption 移回原位
			$caption.stop().animate({top: 444}, _speed);
		});
	});
});

		$(".movebutton1").click(function(){
			$("#mouse1").animate({top:'67%',left:'29%'},0);
			$("#mouse1").animate({top:'26%',left:'40.5%'},3000);
			$("#mouse1").animate({top:'26%',left:'58%'},2000);
			$("#mouse1").animate({top:'16%',left:'56%'},1000);
			$("#mouse1").animate({width:'+=10px',height:'-=10px'},300);
			$("#mouse1").animate({width:'-=20px',height:'+=10px'},300);
			$("#mouse1").animate({width:'+=20px',height:'-=10px'},300);
			$("#mouse1").animate({width:'-=10px',height:'+=10px'},300);
		})

		$(".movebutton2").click(function(){
			$("#mouse2").addClass('flipx');
			$("#mouse2").animate({top:'45%',left:'79%'},0);
			$("#mouse2").animate({top:'26%',left:'74%'},2000);
			$("#mouse2").animate({top:'26%',left:'58%'},1500);
			$("#mouse2").animate({top:'16%',left:'56%'},1000);
			$("#mouse2").animate({width:'+=10px',height:'-=10px'},300);
			$("#mouse2").animate({width:'-=20px',height:'+=10px'},300);
			$("#mouse2").animate({width:'+=20px',height:'-=10px'},300);
			$("#mouse2").animate({width:'-=10px',height:'+=10px'},300);
		})

               //手機板切換
	if (window.matchMedia('(min-width: 992px)').matches) {
                // 電腦版
                $('.phone').css('display','none');
                $('.com').css('display','block');
            }else{
                // 手機板
                $('.com').css('display','none');
                $('.phone').css('display','block');
            }
	});





</script>

@stop



<!-- ==================================網頁本體================================== -->
@section('content')







<div class="container  com font">
<br><br>
	<div class="tabbable"> <!-- Only required for left/right tabs -->

		<div id="nav">
			<ul class="nav nav-tabs">
				<li class="active navdown"><a href="#tab1" data-toggle="tab">火車</a></li>
				<li><a href="#tab2" data-toggle="tab">高鐵</a></li>
				<li><a href="#tab3" data-toggle="tab">市區公車</a></li>
				<li><a href="#tab4" data-toggle="tab">自行開車</a></li>
				<li><a href="#tab5" data-toggle="tab">校園導覽</a></li>
			</ul>
		</div>

		<div class="tab-content">
			<div class="tab-pane active " id="tab1">
				<div class="ContainBox">
					<div class="left contentwords">
						<h2>火車路線</h2>
						<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
							<BIG><BIG>台</BIG></BIG>鐵中壢站下車，前站出站後轉乘市區公車或計程車（車程20~30分鐘）抵達本校。
							<br><br>
							※市區公車總站位於出站後朝左前方直行直至麥當勞
							<br><br>※132、172市區公車往返本校及高鐵桃園站，路線圖及發車時刻表請參閱<a href="#tab3" data-toggle="tab">市區公車</a>搭乘說明。
						</div>
						<div class="right">
							<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d904.3384186345327!2d121.22458449072295!3d24.954078855561516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x34682248fcfa49d7%3A0x57e0b78df52b3c96!2z5qGD5ZyS5biC5Lit5aOi6LuK56uZ!3m2!1d24.9536701!2d121.2257837!4m5!1s0x34682240aa3933d3%3A0x949293d2fcb0c083!2z5qGD5ZyS5biC5Lit5aOi5Y2A5Lit5q2j6Lev6bql55W25Yue!3m2!1d24.9543784!2d121.22390159999999!5e0!3m2!1szh-TW!2stw!4v1486096934015" width=100% height=100% frameborder="4" allowfullscreen></iframe>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="tab2">
					<div class="ContainBox">
						<div class="left contentwords">
							<h2>高鐵路線</h2>
							<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
								<BIG><BIG>高</BIG></BIG>鐵桃園站下車，出站後於公車站8號月台搭乘132、172市區公車直達中央大學（約每小時1班，車程15~20分鐘），或搭乘往中壢方向公車（至市區公車總站轉搭往本校公車)、計程車或自行開車抵達本校。
								<br><br>※132、172市區公車往返本校及高鐵桃園站，路線圖及發車時刻表請參閱<a href="#tab3" data-toggle="tab">市區公車</a>搭乘說明。
							</div>
							<div class="right">
								<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d28931.657296100806!2d121.19746551045579!3d24.984577218270175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x3468201151f71999%3A0xc4ef58d827234b0a!2zMzIw5qGD5ZyS5biC5Lit5aOi5Y2A6auY6ZC15YyX6Lev5LiA5q61NuiZnzMzMCDomZ_pq5jpkLXmoYPlnJLnq5k!3m2!1d25.013211599999998!2d121.21488959999999!4m5!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24IDMyMOahg-WckuW4guS4reWjouWNgOS4reWkp-i3rzMwMOiZnw!3m2!1d24.9694808!2d121.1925163!5e0!3m2!1szh-TW!2stw!4v1486097235199" width=100% height=100% frameborder="2"  allowfullscreen></iframe>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="tab3">
						<div class="ContainBox">
							<div class="left contentwords">
								<h2>市區公車</h2>
								<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
									<BIG><BIG>市</BIG></BIG>區公車132、133、172路線行駛於中壢市區及中央大學之間，車程約20~30分鐘；部分班次繞經高鐵桃園站。<br><br>
									※中大校園內站牌：前門警衛室、志希館、依仁堂、後門、觀景台。<br>
									※付費方式：現金投幣或使用悠遊卡、台灣通（上下車均需過卡感應）。一段票，全票18元、半票9元。
									<ul>
										<li><a href="http://www.tybus.com.tw/default.aspx?page=BusTime">132公車時刻表</a></li>
										<li><a href="http://www.chunglibus.com.tw/route/133-2.html">133公車時刻表</a></li>
										<li><a href="http://www.chunglibus.com.tw/route/172.html">172公車時刻表</a></li>
									</ul>
								</div>
								<div class="right"><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d14468.55228579253!2d121.20173980895458!3d24.961416617759618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24IDMyMOahg-WckuW4guS4reWjouWNgOS4reWkp-i3rzMwMOiZnw!3m2!1d24.9694808!2d121.1925163!4m5!1s0x3468224975b70295%3A0x1e2a198be80476b2!2z5qGD5ZyS5a6i6YGL5YWs6LuK57i956uZIOiZnywgTm8uIDc1LCBaaG9uZ3poZW5nIFJkLCBaaG9uZ2xpIERpc3RyaWN0LCBUYW95dWFuIENpdHksIDMyMA!3m2!1d24.954247799999997!2d121.2237263!5e0!3m2!1szh-TW!2stw!4v1485360829159" width= 100% height= 100% frameborder="2" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="tab4">
							<div class="ContainBox">
								<div class="left contentwords">
									<h2>自行開車</h2>
									<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
										►<BIG><BIG>國</BIG></BIG>道1號（中山高速公路）中壢交流道（62公里）出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約5~10分鐘。<br><br>
										►<BIG><BIG>國</BIG></BIG>道3號（福爾摩沙高速公路）
										大溪交流道（62公里）出口，往中壢方向行駛，轉台66線快速公路（往中壢、觀音方向），接國道1號（北上），於62公里中壢交流道出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約20分鐘。
									</div>
									<div class="right"><iframe src="https://www.google.com/maps/embed?pb=!1m32!1m12!1m3!1d7234.163047293482!2d121.19395097629166!3d24.963340812567882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m17!3e0!4m3!3m2!1d24.9598253!2d121.2022746!4m5!1s0x346823c432557e43%3A0x51b64e78f0a2372b!2zMzIw5qGD5ZyS5biC5Lit5aOi5Y2A5Lit5aSn6LevMTjomZ8!3m2!1d24.9683514!2d121.2023547!4m5!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24IDMyMOahg-WckuW4guS4reWjouWNgOS4reWkp-i3rzMwMOiZnw!3m2!1d24.9694808!2d121.1925163!5e0!3m2!1szh-TW!2stw!4v1486199800820" width=100% height=100% frameborder="2" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tab5">
								<div class="ContainBox abgne_tip_gallery_block">
									<a href="http://www.ncu.edu.tw/assets/thumbs/pic/NCU_Campus_Map_(map-JPG).jpg"><img src="{{asset('img/schoolmap.png')}}" width=100% height=100% border="0"></a>
									<div id="mouse1"><img src="{{asset('img/mouse.png')}}" width=100% height=100%></div>
									<div id="mouse2"><img src="{{asset('img/mouse.png')}}" width=100% height=100%></div>
									<div class="caption">
										<h2>
											如何到達管理二館？
										</h2>
										<div class="captioninner">
											<BIG><BIG>From正門：</BIG></BIG>
											<BIG>從正門警衛室進入校園後向右沿著環校道路走直到走過小木屋鬆餅後右轉直走即可到達管理二館。</BIG></BIG><button class="movebutton2 movebutton" type="button">跟我走!</button><br>
											<BIG><BIG>From後門：</BIG></BIG>
											<BIG>從後門警衛室進入校園後直走沿著環校道路直到看見溜冰場然後右轉直行到達小木屋鬆餅後左轉直走即可到達管理二館。</BIG><button class="movebutton1 movebutton" type="button">跟我走!</button>
										</div>
									</div>
								</div>
							</div>
						</div><div id="note">
						貼心小叮嚀：
						營期當天將會有資管營工作人員在火車站、高鐵站接待，不用擔心找不到路歐~
					</div>
					</div>
					
				</div>


				<!--手機板-->
				<div class="container phone font">
				  	<nav class="nav navbar-default">
       					<div class="container-fluid">
           					<div class="navbar-header">
                				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        				            <span class="icon-bar"></span>
        				            <span class="icon-bar"></span>
             				        <span class="icon-bar"></span> 
               				    </button>
                				<sapn class="navbar-brand" >交通方式</span>
            				</div>
            			<div class="collapse navbar-collapse" id="myNavbar">
               				 <ul class="nav navbar-nav">
                  				<li><a href="#tab6" data-toggle="tab">火車</a></li>
								<li><a href="#tab7" data-toggle="tab">高鐵</a></li>
								<li><a href="#tab8" data-toggle="tab">市區公車</a></li>
								<li><a href="#tab9" data-toggle="tab">自行開車</a></li>
								<li><a href="#tab10" data-toggle="tab">校園導覽</a></li>
               				</ul>
         				</div>
      					</div>
    				</nav> 
	
						<div class="tab-content"">
							<div class="tab-pane active" id="tab6">
								<div class="phContainBox">
									<div class="phTopBox contentwords">
										<h2>火車路線</h2>
										<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
										<BIG><BIG><strong>台</strong></BIG></BIG>鐵中壢站下車，前站出站後轉乘市區公車或計程車（車程20~30分鐘）抵達本校。
										<br><br>
										※市區公車總站位於出站後朝左前方直行直至麥當勞
										<br><br>※132、172市區公車往返本校及高鐵桃園站，路線圖及發車時刻表請參閱<a href="#tab3" data-toggle="tab">市區公車</a>搭乘說明。	<br><br>
									</div>
									<div class="phBotBox">
										<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d904.3384186345327!2d121.22458449072295!3d24.954078855561516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x34682248fcfa49d7%3A0x57e0b78df52b3c96!2z5qGD5ZyS5biC5Lit5aOi6LuK56uZ!3m2!1d24.9536701!2d121.2257837!4m5!1s0x34682240aa3933d3%3A0x949293d2fcb0c083!2z5qGD5ZyS5biC5Lit5aOi5Y2A5Lit5q2j6Lev6bql55W25Yue!3m2!1d24.9543784!2d121.22390159999999!5e0!3m2!1szh-TW!2stw!4v1486096934015" width=100% height=100% frameborder="4" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						

						
							<div class="tab-pane" id="tab7">
								<div class="phContainBox">
									<div class="phTopBox contentwords">
										<h2>高鐵路線</h2>
							<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
								<BIG><BIG><strong>高</strong></BIG></BIG>鐵桃園站下車，出站後於公車站8號月台搭乘132、172市區公車直達中央大學（約每小時1班，車程15~20分鐘），或搭乘往中壢方向公車（至市區公車總站轉搭往本校公車)、計程車或自行開車抵達本校。
								<br><br>※132、172市區公車往返本校及高鐵桃園站，路線圖及發車時刻表請參閱<a href="#tab3" data-toggle="tab">市區公車</a>搭乘說明。<br><br>
									</div>
									<div class="phBotBox">
										<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d28931.657296100806!2d121.19746551045579!3d24.984577218270175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x3468201151f71999%3A0xc4ef58d827234b0a!2zMzIw5qGD5ZyS5biC5Lit5aOi5Y2A6auY6ZC15YyX6Lev5LiA5q61NuiZnzMzMCDomZ_pq5jpkLXmoYPlnJLnq5k!3m2!1d25.013211599999998!2d121.21488959999999!4m5!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24IDMyMOahg-WckuW4guS4reWjouWNgOS4reWkp-i3rzMwMOiZnw!3m2!1d24.9694808!2d121.1925163!5e0!3m2!1szh-TW!2stw!4v1486097235199" width=100% height=100% frameborder="2"  allowfullscreen></iframe>
									</div>
								</div>
							</div>
						

							<div class="tab-pane" id="tab8">
								<div class="phContainBox">
									<div class="phTopBox contentwords">
										<h2>市區公車</h2>
								<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
									<BIG><BIG><strong>市</strong></BIG></BIG>區公車132、133、172路線行駛於中壢市區及中央大學之間，車程約20~30分鐘；部分班次繞經高鐵桃園站。<br><br>
									※中大校園內站牌：前門警衛室、志希館、依仁堂、後門、觀景台。<br>
									※付費方式：現金投幣或使用悠遊卡、台灣通（上下車均需過卡感應）。一段票，全票18元、半票9元。
									<ul>
										<li><a href="http://www.tybus.com.tw/default.aspx?page=BusTime">132公車時刻表</a></li>
										<li><a href="http://www.chunglibus.com.tw/route/133-2.html">133公車時刻表</a></li>
										<li><a href="http://www.chunglibus.com.tw/route/172.html">172公車時刻表</a></li>
									</ul>
									</div>
									<div class="phBotBox">
										<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d14468.55228579253!2d121.20173980895458!3d24.961416617759618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24IDMyMOahg-WckuW4guS4reWjouWNgOS4reWkp-i3rzMwMOiZnw!3m2!1d24.9694808!2d121.1925163!4m5!1s0x3468224975b70295%3A0x1e2a198be80476b2!2z5qGD5ZyS5a6i6YGL5YWs6LuK57i956uZIOiZnywgTm8uIDc1LCBaaG9uZ3poZW5nIFJkLCBaaG9uZ2xpIERpc3RyaWN0LCBUYW95dWFuIENpdHksIDMyMA!3m2!1d24.954247799999997!2d121.2237263!5e0!3m2!1szh-TW!2stw!4v1485360829159" width= 100% height= 100% frameborder="2" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						

							<div class="tab-pane " id="tab9">
								<div class="phContainBox">
									<div class="phTopBox contentwords">
										<h2>自行開車</h2>
									<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
										►<BIG><BIG><strong>國</strong></BIG></BIG>道1號（中山高速公路）中壢交流道（62公里）出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約5~10分鐘。<br><br>
										►<BIG><BIG><strong>國</strong></BIG></BIG>道3號（福爾摩沙高速公路）
										大溪交流道（62公里）出口，往中壢方向行駛，轉台66線快速公路（往中壢、觀音方向），接國道1號（北上），於62公里中壢交流道出口，往新屋方向行駛，沿民族路至三民路右轉，中正路左轉，中大路左轉即可抵達本校前門。車程約20分鐘。
									</div>
									<div class="phBotBox">
										<iframe src="https://www.google.com/maps/embed?pb=!1m32!1m12!1m3!1d7234.163047293482!2d121.19395097629166!3d24.963340812567882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m17!3e0!4m3!3m2!1d24.9598253!2d121.2022746!4m5!1s0x346823c432557e43%3A0x51b64e78f0a2372b!2zMzIw5qGD5ZyS5biC5Lit5aOi5Y2A5Lit5aSn6LevMTjomZ8!3m2!1d24.9683514!2d121.2023547!4m5!1s0x346823c1ec904dcb%3A0xcdc129d4455ce456!2z5ZyL56uL5Lit5aSu5aSn5a24IDMyMOahg-WckuW4guS4reWjouWNgOS4reWkp-i3rzMwMOiZnw!3m2!1d24.9694808!2d121.1925163!5e0!3m2!1szh-TW!2stw!4v1486199800820" width=100% height=100% frameborder="2" allowfullscreen></iframe>
									</div>
								</div>
							</div>

							<div class="tab-pane " id="tab10">
								<div class="phContainBox">
									<div class="phTopBox contentwords">
										<h2>校園導覽</h2>
									<HR color="#dc143c" size="5" width="70%"  align="left"></HR>
										<BIG><BIG>From正門：</BIG></BIG>
											<BIG>從正門警衛室進入校園後向右沿著環校道路走直到走過小木屋鬆餅後右轉直走即可到達管理二館。</BIG></BIG><br>
											<BIG><BIG>From後門：</BIG></BIG>
											<BIG>從後門警衛室進入校園後直走沿著環校道路直到看見溜冰場然後右轉直行到達小木屋鬆餅後左轉直走即可到達管理二館。</BIG>
									</div>
									<div class="phBotBox">
										<a href="http://www.ncu.edu.tw/assets/thumbs/pic/NCU_Campus_Map_(map-JPG).jpg"><img src="{{asset('img/schoolmap.png')}}" width=100% height=100% border="0"></a>
									</div>
								</div>
							</div>
						</div>
						<div id="note" style="text-align: left">
						貼心小叮嚀：
						營期當天將會有資管營工作人員在火車站、高鐵站接待，不用擔心找不到路歐~
					</div>

					
				</div>
				@endsection

