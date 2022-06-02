<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 490;
$thumb_height = 550;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class=" ">
 
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } 
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    // $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        <div class="promotion1_1 ">
            <a href="<?php echo $wr_href; ?>" class="img-fluid about-image"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>
            <?php
           

            echo "<a href=\"".$wr_href."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
            
            echo "</a>";
			


            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

			// echo $list[$i]['icon_reply']." ";
			// if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            // if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

          

            ?>

</div>
    <?php }  ?>
  
 
   

</div>