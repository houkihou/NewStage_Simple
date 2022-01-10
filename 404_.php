<?php
/*
Template Name: Page
Template Post Type: page
*/
?>
<?php
include 'header.php';
?>
<div id="hero">
  <div id="lNaviArea" class="lnavi-area-container">
    <ul class="clear-fix" id="lNavi">
      <li
        id="menu-item-10"
        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"
      >
        <a href="<?php echo bloginfo('url'); ?>">ホーム</a>
      </li>
      <li
        id="menu-item-20"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"
      >
        <a href="<?php echo bloginfo('url').'/company'; ?>">企業情報</a>
      </li>
      <li
        id="menu-item-30"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30"
      >
        <a href="<?php echo bloginfo('url').'/service'; ?>">事業内容</a>
      </li>
      <li
        id="menu-item-40"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"
      >
        <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a>
      </li>
      <li
        id="menu-item-50"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"
      >
        <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a>
      </li>
      <li
        id="menu-item-60"
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60"
      >
        <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a>
      </li>
    </ul>
  </div>

  <ul class="bread_crumb">
    <li class="level-1 top">
      <a href="<?php echo bloginfo('url'); ?>">ホーム</a>
    </li>
    <li class="level-2 sub tail current">404 Not Found</li>
  </ul>
  <!-- pressRelease -->
  <div class="clear-fix main" id="page-404">
    <!-- contents -->
    <div class="fLeft" id="contents">
				<p>申し訳ございません。<br />お客さまがアクセスされたページのURLが見つかりませんでした。<br />お探しのページは移動、もしくは削除された可能性があります。<br />ページ右上にありますページ内検索をご利用いただくか、下記リンクをご参照ください。</p>

				<ul class="link-404">
					<li><a href="<?php echo bloginfo('url').'/sitemap'; ?>">サイトマップ</a></li>

											<li><a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
					
					<li><a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
				</ul>
    </div>
    <!-- contents -->
<?php
include 'sidebar.php';
?>
    <!-- pressRelease -->
  </div>

  <?php
include 'footer.php';
?>
</div>
