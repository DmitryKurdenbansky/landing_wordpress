<footer>
        <div class="footer-main">
            <div class="logo">
            <? if(has_custom_logo()):?>
                <? the_custom_logo(); ?>
            <?endif?>
            </div>
            <div class="footer-contacts">
                <?
                    wp_nav_menu(array(
                        'theme_location' => 'socials',
                        'container' => false,
                        'menu_class' => 'header-contacts-social',
                        'walker' => new Walker_Footer_Social_Menu(), //Использование кастомного Walker
                        'fallback_cb' => false
                    ));
                ?>
                <div class="header-contacts-phone-addres">
                    <div class="footer-phone-addres" id="header-phone">
                        <svg class="phone-path" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path  fill-rule="evenodd" clip-rule="evenodd" d="M2.99033 5.18797C3.30665 4.66421 5.0495 2.75919 6.29322 2.8167C6.665 2.84751 6.99364 3.07242 7.26067 3.33327C7.87379 3.93199 9.62897 6.19644 9.72859 6.67296C9.97096 7.84164 8.57833 8.51533 9.00454 9.69326C10.0911 12.3521 11.9634 14.2242 14.6233 15.3097C15.8003 15.7359 16.474 14.3434 17.6428 14.5867C18.1183 14.6864 20.3839 16.4414 20.9826 17.0545C21.2425 17.3205 21.4684 17.6502 21.4992 18.0219C21.5454 19.3313 19.5222 21.0987 19.1278 21.3247C18.1974 21.9901 16.9834 21.9788 15.5035 21.2908C11.3739 19.5727 4.77426 13.0976 3.02422 8.81212C2.35461 7.34048 2.30839 6.11839 2.99033 5.18797Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span><?= get_post_meta($post->ID, 'phone', true)?></span>
                    </div>
                    <div class="footer-phone-addres">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.23926 8.70691C1.25367 4.46632 4.70302 1.04033 8.94361 1.05473C13.1842 1.06914 16.6102 4.51849 16.5958 8.75908V8.84604C16.5436 11.6026 15.0045 14.1504 13.1175 16.1417C12.0384 17.2623 10.8333 18.2544 9.52621 19.0982C9.17672 19.4005 8.65832 19.4005 8.30882 19.0982C6.36033 17.83 4.65019 16.2287 3.25665 14.3678C2.01461 12.745 1.30942 10.7753 1.23926 8.73299L1.23926 8.70691Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="8.9179" cy="8.85442" r="2.46087" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span><?= get_post_meta($post->ID, 'addres', true)?></span>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-p">Copyright © 2024. All rights reserved.</p>
    </footer>

    <? wp_footer();?>
</body>
</html>