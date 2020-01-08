<div class="widget widget_tag_cloud">
    <div class="widget-title">
        <h3>Most used tags</h3>
    </div>
    <div class="clear"></div>
    <div class="tagcloud">
        <?php foreach ($tags as $k => $t): ?>
        <a href="<?php echo $BASE_URL;?>/tag/<?php echo $t['slug'];?>" class="tag-cloud-link tag-link-position-<?php echo $k+1;?>" aria-label="<?php echo $t['name'];?>" data-wpel-link="internal"><?php echo $t['name'];?><span class="tagcount"> <?php echo $t['total_post'];?> items</span></a>
        <?php endforeach; ?>
    </div>
</div>
<div class="clear"></div>