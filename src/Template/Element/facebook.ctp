<?php if (!empty($_settings['company']['facebook'])): ?>
    <div class="widget widget_easy_facebook_page_plugin"><div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=395202813876688";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script> 
        <div class="efbl-like-box 1">
            <div class="fb-page" data-animclass="fadeIn " data-href="<?php echo $_settings['company']['facebook']; ?>" data-hide-cover=false data-width="300" data-height="" data-show-facepile=true  data-show-posts=false data-adapt-container-width=true data-hide-cta=false data-small-header="false"></div> 
        </div>
    </div>
    <div class="clear"></div>
<?php endif; ?>