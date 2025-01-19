<?

{ //Подключение стилей
    function activate_style() {

        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', array(), null);
        wp_enqueue_style('adaptive-style', get_template_directory_uri() . '/css/adaptive.css', array(), null);
    }
    add_action('wp_enqueue_scripts', 'activate_style');
}

{ //Подключение скриптов
    function activate_scripts() {

        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js', array(), null, true);
    }
    add_action('wp_enqueue_scripts', 'activate_scripts');
}

{ //Динамический логотип
    function main_logo() {
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'main_logo');
}

{ //Список соц. сетей
    function my_theme_setup() {
        add_theme_support('menus');
    }

    add_action('after_setup_theme', 'my_theme_setup');

    function socials() {
        register_nav_menus(array(
            'socials' => 'Соц. сети',
            'main' => 'Главное меню',
            'links' => 'Текст-ссылки'
        ));
    }
    
    add_action('after_setup_theme', 'socials'); 


    //добавление поля для изображения в меню
    function add_menu_image_field($item_id, $item) {
        $image_url = get_post_meta($item_id, '_menu_item_image', true); // Получаем сохранённую иконку
        ?>
        <p class="field-image description description-wide">
            <label for="edit-menu-item-image-<?php echo $item_id; ?>">
                Изображение (URL):
                <input type="text" id="edit-menu-item-image-<?php echo $item_id; ?>" class="widefat" name="menu-item-image[<?php echo $item_id; ?>]" value="<?php echo esc_attr($image_url); ?>" />
            </label>
        </p>
        <?php
      }
      add_filter('wp_nav_menu_item_custom_fields', 'add_menu_image_field', 10, 2);
      
      // Сохранение изображения для элемента меню
      function save_menu_item_image($menu_id, $menu_item_db_id) {
        if (isset($_POST['menu-item-image'][$menu_item_db_id])) {
            update_post_meta($menu_item_db_id, '_menu_item_image', sanitize_text_field($_POST['menu-item-image'][$menu_item_db_id]));
        }
      }
      add_action('wp_update_nav_menu_item', 'save_menu_item_image', 10, 2);


      class Walker_Social_Menu extends Walker_Nav_Menu {
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

            $social_icon = get_post_meta($item->ID, '_menu_item_image', true);
            $social_text = $item->title;

            $output .= '<li>';

            /* //SVG через image
            if ($social_icon) {
                $icon_html = '<img class="social-img" src="'. $social_icon .'">';
            } else {
                $icon_html = ''; //Если иконка не задана, просто пусто
            }
            */

            // Если есть SVG иконка, добавляем ее в начало ссылки
            if ($social_icon) {
                $svg_content = file_get_contents($social_icon);
            // Если содержимое было успешно получено, вставляем SVG напрямую
            if ($svg_content !== false) {
                // Можно добавить дополнительные классы, если нужно
                $icon_html = '<div class="social-icon-svg">' . $svg_content . '</div>';
            } else {
                // Если не удалось загрузить SVG, ставим пустое значение
                $icon_html = '';
            }
            } else {
                $icon_html = ''; // Если иконка не задана, просто пусто
            }

            //Если есть текст, добавляем его
            if ($social_text) {
                $text_html = '<span>' . esc_html($social_text) . '</span>';
            } else {
                $text_html = ''; //Если иконка не задана, просто пусто
            }

            //Формируем вывод элемента меню с ссылкой
            $output .= '<a href="' . esc_url($item->url) . '" class="social">';
            $output .= $icon_html; //Иконка
            $output .= $text_html; //Текст
            $output .= '</a>';

            //Закрытие элемента
            $output .= '</li>';

        }
    }
}


{ //Меню соц. сетей для футера
    class Walker_Footer_Social_Menu extends Walker_Social_Menu {
        // Переопределяем метод start_el
        function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
            // Вызов родительского метода, чтобы не дублировать весь код
            parent::start_el($output, $item, $depth, $args, $id);
    
            // Заменяем класс в ссылке на 'footer-social'
            $output = preg_replace('/class="social"/', 'class="footer-social"', $output, 1);

            $output = preg_replace('/class="social-icon-svg"/', 'class="footer-social-icon-svg"', $output, 1);
        }
    }
}
