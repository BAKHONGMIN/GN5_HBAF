<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 300;
$thumb_height = 300;
?>

<div class="row">
	<?php
	for ($i=0; $i<count($list); $i++) {
	$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

	if($thumb['src']) {
		$img = $thumb['src'];
	} else {
		$img = G5_IMG_URL.'/no_img.png';
		$thumb['alt'] = '이미지가 없습니다.';
	}
	$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="card-img-top">';

	?>

	<div class="col-md-3" style="margin-bottom:20px;">
		<div class="card-group">
		  <div class="card">
			<a href="<?php echo $list[$i]['wr_content'];?>" target="_blank"><?php echo $img_content; ?></a>
			<div class="card-body">
			  <h5 class="card-title ks4 f17">
					<?php
					echo "<a href=\"".$list[$i]['href']."\"> ";
					if ($list[$i]['is_notice'])
					echo "<strong>".$list[$i]['subject']."</strong>";
					else
					echo "<strong>".$list[$i]['subject']."</strong>";
					?>
					</a>
			  </h5>
			  <p class="card-text ks3 f14">
				<!-- <?php echo cut_str(strip_tags($list[$i]['wr_content']),'80','..');?>  -->
				<?php if ($list[$i]['comment_cnt'])  echo "
				<span class=\"lt_cmt\">+ ".$list[$i]['wr_comment']."</span>";
				?>
			  </p>
			  <p class="card-text1"><small class="text-muted">HBAF</small></p>
			</div>
		  </div>
		</div><!-- /card-group -->
	</div><!-- /col -->
	<?php }?>


</div><!-- /row -->