<?

/*
Template Name: landing-en
Template Post Type: page
*/

?>

<? get_header(); ?>
    <main>
        <div class="main">
            <div class="main-title">
                <h1><?= get_post_meta($post->ID, 'main-title', true)?></h1>
                <button class="button">DOWNLOAD TELLUS APP</button>
            </div>
    
            <div class="text-links-wrapper">
                <ul class="text-links">
                    <?
                        wp_nav_menu(array(
                            'theme_location' => 'links',
                            'container' => false,
                            'menu_class' => 'text-links',
                            'fallback_cb' => false
                        ));
                    ?>
                </ul>
            </div>
    
            <div class="text-window">
                <div class="text-window-title">
                    <h2>PELLENTESQUE TELLUS POTENTI PLATEA ULTRICIES ETIAM</h2>
                </div>
                <div class="text-window-p">
                    <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Urna dignissim non arcu cursus nostra molestie? Vestibulum ad penatibus dictumst nostra lobortis ornare urna ultricies. Faucibus massa suspendisse aptent lacinia, ullamcorper massa interdum ligula. Facilisi leo nibh sit elementum eget odio morbi condimentum semper. Eleifend cubilia ac at curae curae condimentum et.</p>
                </div>
            </div>
    
            <div class="text-window-wrapper">
                <img src="<?= get_template_directory_uri() . "/img/photo-phone1.png"?>" alt="" id="img-phone1-mobile">
                <div class="text-window">
                    <div class="text-window-title">
                        <h2>PELLENTESQUE TELLUS POTENTI PLATEA ULTRICIES ETIAM</h2>
                    </div>
                    <div class="text-window-p">
                    <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Urna dignissim non arcu cursus nostra molestie? Vestibulum ad penatibus dictumst nostra lobortis ornare urna ultricies. Faucibus massa suspendisse aptent lacinia, ullamcorper massa interdum ligula. Facilisi leo nibh sit elementum eget odio morbi condimentum semper. Eleifend cubilia ac at curae curae condimentum et.</p>
                        <p>Pellentesque tellus potenti platea ultricies etiam. Commodo scelerisque nostra class facilisis elit ac donec placerat. Imperdiet pulvinar dictum vulputate facilisi congue, quam vulputate fames. Mollis habitasse dui tempus feugiat blandit torquent fusce. Est taciti mi ridiculus placerat tincidunt nostra dolor. Lobortis nullam nibh litora class blandit duis accumsan. Efficitur eget mi fermentum porttitor ante tempus diam molestie. Curae mattis urna convallis pulvinar laoreet taciti. Mollis convallis in magnis dictum habitasse commodo libero finibus.</p>
                        <p>Dui placerat fermentum odio fames lacinia accumsan. Justo enim dapibus placerat imperdiet dui ridiculus ornare. Imperdiet nostra tincidunt ipsum dignissim quisque; malesuada purus fames? Commodo iaculis est lacus sagittis nisl posuere. Libero auctor lobortis aenean purus euismod habitasse penatibus blandit posuere. Commodo dapibus ac dolor rutrum lacus nostra.</p>
                        <p>Dui fringilla dictumst ipsum per blandit, lectus risus lobortis amet. Taciti enim rhoncus sit ipsum a. Donec ligula id sed feugiat velit primis lorem. Rhoncus eget nibh, pulvinar hac amet magna. Class magna senectus suscipit pellentesque ultricies arcu augue sociosqu platea? Aptent luctus sagittis</p>
                        <p>Ultricies commodo conubia ultrices erat ut justo. Quisque nascetur venenatis ante potenti diam ligula. Magna porta convallis metus varius faucibus ultricies imperdiet augue. Mattis dui class malesuada libero adipiscing, viverra imperdiet. Turpis cras habitasse imperdiet tempor odio; dui himenaeos libero. </p>
                        <p>Magna porta convallis</br>
                        Cubilia platea pretium parturient penatibus fusce varius velit. Ligula hac tempus proin adipiscing amet; in inceptos consectetur. Interdum nam pellentesque litora purus pellentesque tincidunt. Dictumst ornare tristique condimentum vitae elit blandit tristique.</p>
                    </div>
                </div>
                <img src="<?= get_template_directory_uri() . "/img/photo-phone1.png"?>" alt="" id="img-phone1">
            </div>
    
            <div class="blocks-wrapper">
                <div class="text-window-title-blocks">
                    <h2>PELLENTESQUE TELLUS POTENTI PLATEA</h2>
                </div>
                <div class="blocks">
                    <div class="blocks-line">
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/Paper.png"?>" alt="">
                            <h3>Description</h3>
                            <p>Feature</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/Calendar.png"?>" alt="">
                            <h3>2019</h3>
                            <p>Established</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/license.png"?>" alt="">
                            <h3>Licensed by Curasao</h3>
                            <p>Licence</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/support.png"?>" alt="">
                            <h3>Live Chat, Email, FAQ</h3>
                            <p>Customer Support</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/mobile_app.png"?>" alt="">
                            <h3>Android and IOS</h3>
                            <p>Mobile App</p>
                        </div>
                    </div>
                    <div class="blocks-line">
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/sports_offered.png"?>" alt="">
                            <h3>Football, Basketball, 
                                Cricket, Esports</h3>
                                <p>Sports Offered</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/Wallet.png"?>" alt="">
                            <h3>Bank transfer, E-wallets,
                                Credit/Debit Cards</h3>
                                <p>Payment methods</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/bonus.png"?>" alt="">
                            <h3>Up to 100%</br>
                                on first deposit</h3>
                                <p>Welcome Bonus</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/promotions.png"?>" alt="">
                            <h3>Regular bonuses
                                and cashback offers</h3>
                                <p>Promotions</p>
                        </div>
                        <div class="block">
                            <img src="<?= get_template_directory_uri() . "/img/blocks/languages_supported.png"?>" alt="">
                            <h3>Multiple languages
                                including English </h3>
                                <p>Languages Supported</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="text-window-wrapper">
                <img class="img-phone-2" src="<?= get_template_directory_uri() . "/img/photo-phone2.png"?>" alt="">
                <div class="text-window">
                    <div class="text-window-title">
                        <h2>PELLENTESQUE TELLUS POTENTI</h2>
                    </div>
                    <div class="text-window-p" id="text-window-p">
                        <p>Lorem ipsum odor amet, consectetuer adipiscing elit. Urna dignissim non arcu cursus nostra molestie? Vestibulum ad penatibus dictumst nostra lobortis ornare urna ultricies:</p>
                        <p>Pellentesque tellus potenti platea ultricies etiam. Commodo scelerisque nostra class facilisis elit ac donec placerat. Imperdiet pulvinar dictum vulputate facilisi congue, quam vulputate fames. Mollis habitasse dui tempus feugiat blandit torquent fusce. Est taciti mi ridiculus placerat tincidunt nostra dolor.</p>
                        <p>Dui placerat fermentum odio fames lacinia accumsan. Justo enim dapibus placerat imperdiet dui ridiculus ornare. Imperdiet nostra tincidunt ipsum dignissim quisque; malesuada purus fames? Commodo iaculis est lacus sagittis nisl posuere. Libero auctor lobortis aenean purus euismod habitasse penatibus blandit posuere. Commodo dapibus ac dolor rutrum lacus nostra. </p>
                        <p>Dui fringilla dictumst ipsum per blandit, lectus risus lobortis amet. Taciti enim rhoncus sit ipsum a. Donec ligula id sed feugiat velit primis lorem. Rhoncus eget nibh, pulvinar hac amet magna. Class magna senectus suscipit pellentesque ultricies arcu augue sociosqu platea? Aptent luctus sagittis</p>
                        <p>Ultricies commodo conubia ultrices erat ut justo. Quisque nascetur venenatis ante potenti diam ligula. Magna porta convallis metus varius faucibus ultricies imperdiet augue. Mattis dui class malesuada libero adipiscing, viverra imperdiet. Turpis cras habitasse imperdiet tempor odio; dui himenaeos libero. Cubilia platea pretium parturient penatibus fusce varius velit. Ligula hac tempus proin adipiscing amet; in inceptos consectetur.</p>
                    </div>
                </div>
            </div>
    
            <div class="text-window-bottom">
                <div class="text-window-title">
                    <h2>PELLENTESQUE TELLUS POTENTI</h2>
                </div>
                <div class="text-window-p">
                    <p>Ultricies commodo conubia ultrices erat ut justo. Quisque nascetur venenatis ante potenti diam ligula. Magna porta convallis metus varius faucibus ultricies imperdiet augue. Mattis dui class malesuada libero adipiscing, viverra imperdiet. Turpis cras habitasse imperdiet tempor odio; dui himenaeos libero. Cubilia platea pretium parturient penatibus fusce varius velit. Ligula hac tempus proin adipiscing amet; in inceptos consectetur.</p>
                    <p>Dui placerat fermentum odio fames lacinia accumsan. Justo enim dapibus placerat imperdiet dui ridiculus ornare. Imperdiet nostra tincidunt ipsum dignissim quisque; malesuada purus fames? Commodo iaculis est lacus sagittis nisl posuere. Libero auctor lobortis aenean purus euismod habitasse penatibus blandit posuere. Commodo dapibus ac dolor rutrum lacus nostra.</p>
                </div>
            </div>
    
            <div class="text-window-bottom">
                <div class="text-window-title">
                    <h2>PELLENTESQUE TELLUS POTENTI PLATEA</h2>
                </div>
                <div class="text-window-p">
                    <p>Egestas quisque aliquam blandit augue conubia mollis natoque litora. Litora pellentesque fusce pretium duis class finibus. At sagittis est habitant; vel lobortis nibh. Non massa nec ut, quam augue sociosqu. Lacinia penatibus etiam ligula vehicula per. Pellentesque molestie leo elementum ornare a morbi.</p>
                    <p>Orci vivamus eget suscipit nam lectus. Dignissim dolor integer pharetra nec vivamus velit vestibulum integer. Dignissim aliquet ex metus sem rhoncus ultrices dictum ut. Nec volutpat magnis efficitur feugiat egestas dui. Aliquet at habitant penatibus nostra sagittis curabitur. Non risus vulputate augue habitasse rutrum. Natoque natoque litora diam litora non nullam.</p>
                </div>
            </div>
    
            <div class="text-window-bottom">
                <div class="text-window-title">
                    <h2>PELLENTESQUE TELLUS</h2>
                </div>
                <div class="text-window-p">
                    <p>Primis orci nascetur potenti nulla purus a mauris adipiscing. Ultrices donec sodales ipsum odio dapibus, donec dapibus curabitur. Mattis potenti quam efficitur dignissim eleifend feugiat malesuada sapien. Consequat etiam ligula consectetur etiam molestie cras. Nostra metus penatibus himenaeos semper tellus augue tortor. Eleifend amet ridiculus primis a, bibendum primis mus magnis. Id orci convallis nascetur ridiculus tempor integer magna ad. Feugiat vehicula maximus praesent nunc urna nam pharetra egestas ultrices.</p>
                    <p>Ligula lacus neque integer cras nam. Amet odio consequat imperdiet; bibendum sit vitae. Laoreet erat varius elementum tristique ad himenaeos convallis litora. Cras fames integer vulputate dignissim in eros. Lobortis sollicitudin pellentesque aliquet facilisis hendrerit id commodo urna. Ex rhoncus vulputate elementum penatibus lacinia adipiscing inceptos vulputate aptent. Nulla nostra efficitur tincidunt augue donec auctor per vestibulum.</p>
                    <p>Pharetra convallis ridiculus eget purus facilisi interdum penatibus. Pretium accumsan parturient nisl eu sed elementum eleifend urna. Ultricies mus sagittis aliquam vehicula dapibus. Consequat elit porttitor porta, gravida congue dis. Vel taciti curabitur pretium pharetra nascetur, fringilla viverra erat. Lacus nullam pulvinar, phasellus et elit congue. Sagittis condimentum ante ligula ipsum pharetra netus sem. Urna hendrerit maecenas pulvinar egestas cubilia mattis venenatis. Aenean primis leo congue felis ornare, in tempor netus. Curabitur netus enim mus hendrerit porta auctor orci.</p>
                </div>
            </div>
    
            <button class="button" id="button-bottom">DOWNLOAD TELLUS APP</button>
        </div>
    </main>
    
    <? get_footer(); ?>