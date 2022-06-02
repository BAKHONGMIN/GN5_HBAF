<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<?php include_once('./_common.php');?>  

<?php 
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

팁영상 요청 주소 : softzonecokr@naver.com 
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/ 
?>






<!-------------------------- ./슬라이드 -------------------------->
<div id="mainSlider" class="overflow-hidden">
	<div class="sliderBox position-relative">
		<?php echo latest('swiper_card2', 'mainbanner',2,100)?>
	</div> 
</div>	
<!-------------------------- 슬라이드 -------------------------->




<!-------------------------- 아이콘박스 -------------------------->
<div class="margin-top-100"></div>
<div class="promotino_wrapper">
<div class="almond"><img src="/HBAF/theme/theme_wide_16/myimg/amond.png" alt="almond" ></div>
<div class="almond1"><img src="/HBAF/theme/theme_wide_16/myimg/amond.png" alt="almond" ></div>
<div class="container">
	<div class="center-heading ks5">
		<!-- <h2>HBAF 만의<strong>프로모션</strong></h2> -->
		<!-- <span class="center-line"></span>
		<p class="sub-text margin-bottom-80 ks5 f19">
		무료 폰트어썸5 버전을 사용합니다. 폰트어썸5 프로버전은 사용하지 않습니다.
		</p> -->
		<h2><?php echo latest('collection', 'promotion',1,100)?></h2>
	</div>

	<div class="row padding-top-20">
		<div class="col-lg-3 col-md-3 col-sm-12 ">
			<div class="box">							
				<div class="promotion promotion1"><?php echo latest('promotion', 'promotion1',1,100)?></div>
				<div class="space"><?php echo latest('collection', 'promotion1',1,100)?></div>
				
			</div> 
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 ">
			<div class="box">							
				<div class="promotion promotion2"><?php echo latest('promotion', 'promotion2',1,100)?></div>
				<div class="space"><?php echo latest('collection', 'promotion2',1,100)?></div>
			</div> 
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 ">
			<div class="box">							
				<div class="promotion promotion3"><?php echo latest('promotion', 'promotion3',1,100)?></div>
				<div class="space"><?php echo latest('collection', 'promotion3',1,100)?></div>
			</div> 
		</div><!-- ./col -->
		<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					
					<div class="info">
						<i class="fas fa-sliders-h"></i>
						<p class="ks4 f15 h75">
							문의사항은 질문게시판에 글 남겨주세요.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div> -->
		<!-- ./col -->
	</div><!-- /row -->

	<div class="d-none d-sm-block margin-top-30"></div><!-- pc 만 적용 -->

	<!-------------------------- 두번째줄 -------------------------->
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="box">							
				<div class="promotion promotion4"><?php echo latest('promotion', 'promotion4',1,100)?></div>
				<div class="space"><?php echo latest('collection', 'promotion4',1,100)?></div>
			</div> 
		</div><!-- /col -->
		<div class="col-lg-3 col-md-6 col-sm-12">
			<div class="box">							
				<div class="promotion promotion5"><?php echo latest('promotion', 'promotion5',1,100)?></div>
				<div class="space"><?php echo latest('collection', 'promotion5',1,100)?></div>
			</div> 
		</div><!-- /col -->

		<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<i class="fab fa-php"></i>
						<p class="ks4 f15 h75">
							갤럭시 시리즈의 모든 기종에서도 문제 없이 최적화된 사이트로 적용됩니다.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div> -->
		<!-- /col -->

		<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					
					<div class="info-pink">
						<i class="fab fa-rocketchat"></i>
						<p class="ks4 f15 h75">
							문의사항은 질문게시판에 글 남겨주세요.
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div> -->
		<!-- /col -->
	</div><!-- /row -->
</div>
	<div class="margin-bottom-40"></div>
</div><!-- /container -->




<!-------------------------- 게시판 -------------------------->
<!-- <div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
		</div>
	</div>
</div>
<div class="margin-bottom-150"></div> -->





<!-------------------------- pallax box -------------------------->
<style>
.para-box{
    height: 650px; display: grid; align-items: center;
}
</style>
<div class="youtube-window" data-parallax="scroll" data-image-src="<?php echo G5_THEME_URL?>/img/bg/1.jpg"><!-- 이미지 주소 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 para-box text-center">
				<!-- <div class="youtubeimg d-none"><iframe width="900" height="600" src="https://www.youtube.com/embed/7WrDQaMOowI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> -->
					<div class="youtubeimg d-none"><?php echo latest('youtube', 'youtubeimg',1,100)?></div>
					<div class="youtubetext">
					<h1 class='text-light youtube_font'><?php echo latest('collection', 'youtube',2,100)?></h1>
					<br />
					<!-- <button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button> -->

					<script type="text/javascript">
            			//카운트 시작 숫자
            			var count = 5;
            			//카운트다운함수
            			var countdown = setInterval(function(){
            			//해당 태그에 아래 내용을 출력
            			$("p.countdown").html("<b><font color='white' size='66pt'>"
            			+ count + "</font></b>");
                		//0초면 초기화 후 이동되는 사이트
                		if (count == 0) {
                    		clearInterval(countdown);
                    		// window.open('http://www.olleh.com', "_self");
							$(".youtubetext").addClass("d-none");
							$(".youtubeimg").removeClass("d-none");
                    	}
                		count--;//카운트 감소
            			}, 1000);
        			</script>
		  			<p class="countdown"></p>
					<!--//////////////////////////////////////////////////////////////  -->
				</div>
			</div>

		</div>
	</div>
</div><!-- /parallax -->


<!-------------------------- 테마소개 + 유튜브영상 -------------------------->

<div class="padding-top-120 padding-bottom-140" style="background:#f2f2f2;">
	<div class="container">
	<div class="center-heading">
		<h2 class="en1">USE A <strong>LIBRARY</strong> </h2>
		<span class="center-line"></span>
	</div>
	  <div class="row">
		<div class="col-lg-6">
		  <iframe width="100%" height="315" src="https://www.youtube.com/embed/PF0BcfP9pkc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-6">
		  <h2 class="en1">SERVICE</h2>
		  <p class="ks4"><strong>새롭게 7개의 페이지가 업로드 되었습니다.</strong></p>
		  <p class="ks4"><a href="http://ety.kr/shop/item/1623421493" target="_blank">http://ety.kr/shop/item/1623421493</a></p>
		  <p class="ks4">배포는 소프트존만 가능하며 배포처는 에티테마,SIR 만 제한하고 있습니다.</p>
		  <p class="ks4">설치방법안내 <strong><a href="http://ety.kr/board/free_theme_manual/42" target="_blank">http://ety.kr/board/free_theme_manual/42</a></strong> 에서 진행하고 있으므로 궁금점이나 문의사항이 있으시면 해당 게시판을 이용해주세요.</p>
		</div>
	  </div>
	</div>
</div>




<!-------------------------- 제품안내 갤러리 -------------------------->
<div class="container margin-top-120 margin-bottom-150">
	<div class="center-heading margin-top-40">
		<h2 class="ks4">제품안내</h2>
		<span class="center-line"></span>
		<p class="sub-text margin-bottom-80 ks5 f19">
		해당 제품에 대한 소개내용 입니다.
		</p>
	</div>
	<!-- LATEST : pic_basic_company -->
	<?php echo latest('theme/pic_basic_company', 'gallery', 6, 24); ?>
</div>




<!-------------------------- USE A LIBRARY -------------------------->
<div class="padding-top-120 padding-bottom-140" style="background:#f2f2f2;">
	<div class="container">
		<div class="center-heading">
			<h2 class="en1">USE A <strong>LIBRARY</strong> </h2>
			<span class="center-line"></span>
		</div>
	  <div class="row f16">

		<div class="col-lg-6 text-left">
			<img class="img-fluid rounded" src="<?php echo G5_THEME_URL?>/img/s-4.png" alt="">
		</div>

		<div class="col-lg-6">
		  <h2 class="en1">JavaScript Library</h2>
		  <p class="ks4 f20">테마폴더내 라이선스 문서 확인</p>
		  <ul class="en2">
		  	<li><strong>GNUboard5 (5.4.5.1)</strong></li>
			<li><strong>Bootstrap4</strong></li>
			<li>jQuery</li>
			<li>Font Awesome5</li>
			<li>Working contact form with validation</li>
			<li>Unstyled page elements for easy customization</li>
			<li>Parallax</li>
			<li>Owl</li>
			
		  </ul>
		  <p class="ks5">
		  현제 제작되는 모든 테마 및 템플릿은 에티테마 에서 제작되고 있으며 무료 테마 및 템플릿의 경우에는 이미지가 포함 되어 있지 않습니다. 또한 에티테마로 오시면 추가적인 업데이트된 파일을 다운로드 하실 수 있습니다.</p>
		</div>

	  </div>
	  <!-- /.row -->
	</div>
</div>





<!-------------------------- USE A LIBRARY -------------------------->
<div class="padding-top-120 padding-bottom-140">
	<div class="container">
		<div class="center-heading">
			<h2 class="en1">USE A <strong>LIBRARY</strong> </h2>
			<span class="center-line"></span>
		</div>
		  <div class="row f16">

			<div class="col-lg-6">
			  <h2 class="en1">JavaScript Library</h2>
			  <p class="ks4 f20">테마폴더내 라이선스 문서 확인</p>
			  <ul class="en2">
				<li><strong>GNUboard5 (5.4.5.1)</strong></li>
				<li><strong>Bootstrap4</strong></li>
				<li>jQuery</li>
				<li>Font Awesome5</li>
				<li>Working contact form with validation</li>
				<li>Unstyled page elements for easy customization</li>
				<li>Parallax</li>
				<li>Owl</li>
			  </ul>
			  <p class="ks5">
			  현제 제작되는 모든 테마는 에티테마 에서 제작되고 있으며 무료 테마 및 템플릿의 경우에는 이미지가 포함 되어 있지 않습니다. 또한 에티테마로 오시면 추가적인 업데이트된 파일을 다운로드 하실 수 있습니다.</p>
			</div>

			<div class="col-lg-6 text-right">
				<img class="img-fluid rounded" src="<?php echo G5_THEME_URL?>/img/s-3.png" alt="">
			</div>

		  </div>
	  <!-- /.row -->
	</div>
</div>





<!-------------------------- parallax 박스 및 countdown -------------------------->
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo G5_THEME_URL?>/img/bg/2.jpg">
	<div class="container">
		<div class="row" style="height:550px;">

			<div class="col-md-12 text-center p-center para-text">
				<h2 class='text-light ks5'>반응형 커뮤니티 , 반응형 와이드 에티테마 무료 다운로드 바로가기</h2>
				<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button>
			</div>
		</div>
	</div>
</div><!-- /parallax -->






<!-------------------------- GALLERY -------------------------->
<!-- 

테마폴더/tail.php : 43 번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정
-->

<div class="container margin-top-100 margin-bottom-120">
	<h3 class="text-left">GALLERY</h3>
	<?php echo latest('theme/pic_basic_owl', 'gallery', 9, 24); ?>
</div>






<?php
include_once(G5_THEME_PATH.'/tail.php');