<?php echo $this->element('Layout/header_search');?>
<div class="wrap-middle" style="position: relative">
    <div class="wrap-content">
        <h3 class="index-title">Search results for: <?php echo $cateName;?></h3>
        <ul class="modern-articles modern-grid">
            <?php if (!empty($data['home_posts']['data'])):?>
            <?php foreach ($data['home_posts']['data'] as $hp): ?>
                <?php echo $this->element('item_post_list', array('post' => $hp));?>
            <?php endforeach; endif;?>
        </ul>
        <div class="clear"></div>
        <?php echo $this->Paginate->render($data['home_posts']['total'], $params['limit']); ?>
    </div>

    <div class="sidebar-wrapper">
        <aside id="sidebar" class="sb-right">
            <?php echo $this->element('home_widget');?>
            <?php echo $this->element('facebook');?>
            <?php echo $this->element('home_widget_2');?>
            <?php if (!empty($data['home_tags'])): ?>
            <?php echo $this->element('list_home_tag', array('tags' => $data['home_tags']));?>
            <?php endif;?>
        </aside>
        <div class="clear"></div>
    </div>    <!-- end #sidebar (right) --> 
    <div class="clear"></div>
</div>
<div class="clear"></div>