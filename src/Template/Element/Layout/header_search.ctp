<section class="front-overlay-content" style="<?php echo !empty($_settings['company']['header_bg_image']) ? "background-image:url({$_settings['company']['header_bg_image']})" : "";?>">
    <div class="front-overlay-wrap">
        <h1><span>&nbsp;</span></h1>
        <div class="search-box">
            <form id="searchform2" class="header-search" method="get" action="<?php echo $BASE_URL; ?>/tim-kiem">
                <input placeholder="Nhập nội dung cần tìm" type="text" name="s" id="s">
                <input type="submit" value="Search" class="buttonicon">
            </form>
            <div class="clear"></div>
        </div>
    </div><!-- end .front-overlay-wrap -->
</section>