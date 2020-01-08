<header>
    <div class="main-menu">
        <div class="sticky-on">
            <div class="wrap">
                <!-- Logo -->    
                <a href="<?php echo $BASE_URL;?>" data-wpel-link="internal">
                    <img class="logo" src="<?php echo $_settings['company']['logo'];?>" alt="<?php echo $_settings['company']['name'];?>">
                </a>
                <!-- Social Icons -->
                <ul class="top-social">
                    <?php if (!empty($_settings['company']['facebook'])): ?>
                    <li>
                        <a href="<?php echo $_settings['company']['facebook'];?>" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if (!empty($_settings['company']['twitter'])): ?>
                    <li>
                        <a href="<?php echo $_settings['company']['twitter'];?>" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if (!empty($_settings['company']['youtube'])): ?>
                    <li>
                        <a href="<?php echo $_settings['company']['youtube'];?>" data-wpel-link="external" target="_blank" rel="nofollow external noopener noreferrer">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if (!empty($AppUI)): ?>
                    <li class="btn-login">
                        <a href="<?php echo $BASE_URL;?>/users/logout" class="btn btn-login" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php else: ?>
                    <li class="btn-login">
                        <a href="<?php echo $BASE_URL;?>/login" class="btn btn-login" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>

                <!-- Navigation Menu -->
                <nav class="nav-showcase_wp">
                    <ul>
                        <li class="menu-item current-menu-item">
                            <a href="<?php echo $BASE_URL;?>" aria-current="page" data-wpel-link="internal">HOME</a>
                        </li>
                        <?php if (!empty($_cates)):?>
                        <?php foreach ($_cates as $cate): ?>
                        <li class="menu-item">
                            <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $cate['data']['slug'];?>" data-wpel-link="internal"><?php echo $cate['data']['name'];?></a>
                            <?php if (!empty($cate['child_data'])): ?>
                            <span class="arrow"><i class="fa fa-angle-down"></i></span>
                            <ul class="sub-menu" style="display: none;">
                                <?php foreach ($cate['child_data'] as $cd): ?>
                                <li class="menu-item">
                                    <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $cd['slug'];?>" data-wpel-link="internal"><?php echo $cd['name'];?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif;?>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <li class="menu-item">
                            <a href="<?php echo $BASE_URL;?>/premium" aria-current="page" data-wpel-link="internal" style="color: #FFD700 !important;">Premium</a>
                        </li>
                    </ul>            
                    <div class="nav-bars"><i class="fa fa-bars"></i></div>
                </nav><!-- end #myjquerymenu -->

            </div><!-- end .wrap -->
        </div>
    </div><!-- end .main-menu --> 
</header>