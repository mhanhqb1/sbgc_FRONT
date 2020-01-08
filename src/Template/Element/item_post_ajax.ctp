<li class="wptp-list-item">
    <div class="wpt_thumbnail wpt_thumb_small wpt_thumb_align_left">
        <a title="<?php echo $post['name'];?>" href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['slug'];?>">
            <img width="65" height="65" src="<?php echo $post['image'];?>" class="attachment-wp_review_small size-wp_review_small wp-post-image" alt="" title="" sizes="(max-width: 65px) 100vw, 65px" />																		</a>
    </div>
    <div class="entry-title">
        <a title="<?php echo $post['name'];?>" href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['slug'];?>"><?php echo $post['name'];?></a>
    </div>
    <div class="wpt-postmeta">
        <?php echo date('d-m-Y', $post['created']);?>
        &bull;
        <span class="comments-number"><?php echo $post['total_view'];?></span> Views									
    </div> <!--end .entry-meta-->
    <div class="clear"></div>
</li>