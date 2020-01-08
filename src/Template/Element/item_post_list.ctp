<li class="sticky hentry" data-post-id="<?php echo $post['id'];?>">
    <div class="content-art">
        <?php if (!empty($post['is_premium'])): ?>
        <div class="sticky-art"><i class="fa fa-bookmark"></i></div>  
        <?php endif; ?>
        <a href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['slug'];?>" title="<?php echo $post['name'];?>" data-wpel-link="internal"><h2><?php echo $post['name'];?></h2></a>
        <span class="meta-art">
            <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $post['cate_slug'];?>" data-wpel-link="internal"><?php echo $post['cate_name'];?></a>                     
        </span>
        <div class="box-image">
            <a href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['slug'];?>" data-wpel-link="internal">
                <img width="300" height="186" src="<?php echo $post['image'];?>" class="attachment-showcase_wp_thumbnail-blog size-showcase_wp_thumbnail-blog wp-post-image" alt="" title="">
            </a>
        </div><!-- end .box-image -->
        <div class="home-meta">
            <div class="an-display-time"><?php echo date('d-m-Y', $post['created']);?></div>      
            <div class="home-data">
                <div class="thumbs-rating-container" id="thumbs-rating-<?php echo $post['id'];?>" data-content-id="<?php echo $post['id'];?>">
                    <span class="thumbs-rating-up thumbs-rating-voted" onclick="thumbs_rating_vote(<?php echo $post['id'];?>, 1);"><i class="fa fa-thumbs-o-up"></i> <?php echo !empty($post['total_like']) ? $post['total_like'] : 0;?></span> 
                    <span class="thumbs-rating-down thumbs-rating-voted" onclick="thumbs_rating_vote(<?php echo $post['id'];?>, 2);"><i class="fa fa-thumbs-o-down"></i> <?php echo !empty($post['total_dislike']) ? $post['total_dislike'] : 0;?></span>
                    <span class="thumbs-rating-already-voted" data-text="You already voted!"></span>
                </div>                        
            </div><!-- end .home-data -->                        
            <div class="clear"></div> 
        </div><!-- Meta ( time and comments ) --> 
    </div><!-- end .content-art -->
</li>