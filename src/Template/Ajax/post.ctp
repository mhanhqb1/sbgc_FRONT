<ul class="wptp-list">
    <?php if (!empty($data)): ?>
    <?php foreach ($data as $p): ?>
    <?php echo $this->element('item_post_ajax', array('post' => $p));?>
    <?php endforeach; ?>
    <?php endif; ?>
</ul>
<div class="clear"></div>
<!--<div class="wpt-pagination">
    <a href="#" class="next"><span>Next &raquo;</span></a>
</div>                   -->
<div class="clear"></div>
<input type="hidden" class="page_num" name="page_num" value="1" />