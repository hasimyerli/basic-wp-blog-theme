<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
    <style>

    </style>
<body>
    <!-- üst kısım !-->
    <div class="container-fluid ust-kisim">
      <div class="container" style="padding: 0px 10px;">
        <div class="col-md-12 logo">
          <a href="<?php bloginfo('url') ?>">Haşim YERLİ - Soft şeyler</a>
        </div>
      </div>
    </div>
<!-- orta kısım !-->
<div class="container orta">

  <!-- menü kısım !-->
  <div class="col-md-9 default">
    <div class="menu">
      <ul>
        <li><a href="<?php bloginfo('url') ?>">Anasafya</a></li>
        <?php wp_list_pages("title_li"); ?>
        <div class="" style="clear:both"></div>
      </ul>
    </div>
  </div>
  <div class="col-md-3 default">
    <div class="search">
      <form role="search" method="get" action="">
				<div>
          <!-- name="s" zorunlu kısım !-->
					<input id="searchText" type="text" name="s" placeholder="Ne aramak istiyorsun">
					<input id="searchButtton" type="submit" value="Ara">
				</div>
			</form>
    </div>
  </div>
  <!-- menü kısım !-->
