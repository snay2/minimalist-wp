<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <nav>
          <p><ul class="links">
            <li><a href="/about">Curriculum vitae</a></li>
            <li><a href="http://www.twitter.com/snay2">Twitter</a></li>
            <li><a href="https://github.com/snay2">GitHub</a></li>
            <!--<li><a href="http://stackoverflow.com/users/191521/steve-nay">Stack Overflow</a></li>-->
            <li class="last"><a href="http://www.linkedin.com/in/nsteven">LinkedIn</a></li>
          </ul></p>
        </nav>
      </header>

