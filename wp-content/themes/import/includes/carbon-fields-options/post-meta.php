<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
  ->show_on_page(7)

  ->add_tab('Первый экран', [
    Field::make('rich_text', 'intro_heading', 'Заголовок')
      ->set_width(50),
    Field::make('image', 'intro_img', 'Изображение на фоне')->set_width(50)
  ])

  ->add_tab('Второй экран(Привезём вам)', [
    Field::make('text', 'delivery_heading', 'Заголовок'),
    Field::make('complex', 'delivery_list', 'Список слайдера')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'title', 'Заголовок')->set_width(50),
        Field::make('rich_text', 'descr', 'Описание')->set_width(50),
      ]),
  ])

  ->add_tab('Логотипы компаний', [
    Field::make('media_gallery', 'companies_gallery1', 'Логотипы первая линия')->set_type(['image']),
    Field::make('media_gallery', 'companies_gallery2', 'Логотипы вторая линия')->set_type(['image']),
  ])

  ->add_tab('География импорта', [
    Field::make('text', 'geo_heading', 'Заголовок'),
    Field::make('text', 'geo_text', 'Описание'),
    Field::make('text', 'geo_num', 'От x дней'),
    Field::make('text', 'geo_add', 'Текст предупреждение'),
    Field::make('complex', 'geo_list', 'Список слайдера')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'title', 'Заголовок')->set_width(50),
      ]),
  ])

  ->add_tab('О нас', [
    Field::make('rich_text', 'about_text', 'Текст')
      ->set_width(50),
    Field::make('image', 'about_img', 'Изображение на фоне')->set_width(50)
  ])

  ->add_tab('Мы возьмём на себя', [
    Field::make('text', 'we_take_heading', 'Заголовок'),
    Field::make('complex', 'we_take_list', 'Список слайдера')
      ->add_fields([
        Field::make('image', 'img', 'Изображение')->set_width(50),
        Field::make('text', 'title', 'Заголовок')->set_width(50),
      ]),
  ])

  ->add_tab('Схемы работы', [
    Field::make('rich_text', 'howitworks_text', 'Текст')
      ->set_width(50),
    Field::make('image', 'howitworks_img', 'Изображение на фоне')->set_width(50)
  ]);
