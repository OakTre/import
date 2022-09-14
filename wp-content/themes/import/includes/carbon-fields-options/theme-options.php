<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Контакты')
  ->set_page_menu_position(4)
  ->set_icon('dashicons-image-filter')
  ->add_tab('Контакты', [
    Field::make('image', 'site_logo', 'Логотип')->set_width(50),
    Field::make('text', 'email', 'Контактный email')->set_width(50),
    Field::make('text', 'phone', 'Номер телефона(Специалист Вэд UAE)')->set_width(50),
    Field::make('text', 'phone2', 'Номер телефона(Специалист Вэд RUS)')->set_width(50),
    Field::make('text', 'email2', 'Почта(Специалист Вэд)')->set_width(50),
    Field::make('text', 'name', 'Имя(Специалист Вэд)')->set_width(50),
    Field::make('text', 'social_linked', 'Ссылка на LinkedIn')->set_width(50),
    Field::make('text', 'social_wt', 'Ссылка на WhatsUp')->set_width(50),
    Field::make('text', 'export_link', 'Стать экспортером')->set_width(50),
    Field::make('text', 'it_agro', 'IT в сельском хозяйстве')->set_width(50),
  ]);
