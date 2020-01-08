<footer>
    <div class="wrap-middle">
        <div class="footer_1col_half">
            <div class="widget-title"><h3>Top Articles by likes</h3></div>
            <ul class="footer-posts">
                <?php if (!empty($_settings['top_like_posts'])): ?>
                <?php foreach ($_settings['top_like_posts'] as $p): ?>
                    <?php echo $this->element('item_post_top_like', array('post' => $p));?>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

        <div class="footer_1col_last">
            <?php if (!empty($_settings['cates'])): ?>
            <?php foreach ($_settings['cates'] as $sc): ?>
                <div class="footer_4col">
                    <ul class="footer-links">
                        <li><a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $sc['slug'];?>" data-wpel-link="internal"><?php echo $sc['name'];?></a></li>
                    </ul>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="clear"></div>
            <div class="company-info pc">
                <p><?php echo $_settings['company']['footer_description'];?></p>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="company-info sp">
        <p><?php echo $_settings['company']['footer_description'];?></p>
    </div>
    <div class="footer-navigation">
        <div class="wrap">
            <div class="copyright">
                © 2020 Powered by <a href="<?php echo $BASE_URL;?>" data-wpel-link="internal"><?php echo $_settings['company']['name'];?></a>          
            </div>

            <div class="copyright_right">
                Content by <a href="<?php echo $BASE_URL;?>" data-wpel-link="internal"><?php echo $_settings['company']['author_name'];?></a>          
            </div>
        </div><!-- end .wrap -->
    </div>
    <div class="clear"></div>
    <p id="back-top" style="display: block;"><a href="#top"><span></span></a></p>
</footer>