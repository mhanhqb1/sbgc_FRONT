<li>
    <a href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['slug'];?>" data-wpel-link="internal">
        <img width="299" height="186" src="<?php echo $post['image'];?>" class="attachment-showcase_wp_thumbnail-blog size-showcase_wp_thumbnail-blog wp-post-image" alt="" title="">
    </a>
    <a href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['slug'];?>" title="<?php echo $post['name'];?>" data-wpel-link="internal">
        <h4><?php echo $post['name'];?></h4>
    </a>
    <div class="footer-data">
        <div class="thumbs-rating-container" id="thumbs-rating-<?php echo $post['id'];?>" data-content-id="<?php echo $post['id'];?>">
            <span class="thumbs-rating-up thumbs-rating-voted" onclick="thumbs_rating_vote(<?php echo $post['id'];?>, 1);"><i class="fa fa-thumbs-o-up"></i> <?php echo !empty($post['total_like']) ? $post['total_like'] : 0;?></span> 
            <span class="thumbs-rating-down thumbs-rating-voted" onclick="thumbs_rating_vote(<?php echo $post['id'];?>, 2);"><i class="fa fa-thumbs-o-down"></i> <?php echo !empty($post['total_dislike']) ? $post['total_dislike'] : 0;?></span>
            <span class="thumbs-rating-already-voted" data-text="You already voted!"></span>
        </div>              
    </div><!-- end .footer-data -->                                                  
</li>