<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="sky-overlay"></div>
    <header class="topbar">
      <div class="logo">Arkana Duszy</div>
      <nav class="nav">
        <a href="#odczyt">Odczyt Duszy</a>
        <a href="#proces">Proces</a>
        <a href="#sciezki">Ścieżki</a>
        <a href="#opinie">Opinie</a>
        <a href="#kontakt">Kontakt</a>
      </nav>
      <button class="cta" type="button">Zamów Odczyt</button>
    </header>

    <main>
