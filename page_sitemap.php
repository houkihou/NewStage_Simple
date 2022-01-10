<?php
/*
Template Name: Sitemap Page
Template Post Type: page
*/
?>
<?php
include 'header.php';
?>
      <div id="hero">
        <div id="lNaviArea" class="lnavi-area-container">
          <ul class="clear-fix" id="lNavi">
            <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10  current_page_item">
              <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
            <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
              <a href="<?php echo bloginfo('url').'/company'; ?>">企業情報</a></li>
            <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30">
               <a href="<?php echo bloginfo('url').'/service'; ?>">事業内容</a></li>
            <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
              <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
            <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
              <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
            <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60">
              <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
          </ul>
        </div
    　</div>
      <ul class="bread_crumb">
        <li class="level-1 top">
          <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
        <li class="level-2 sub tail current">サイトマップ</li></ul>
      <!-- pressRelease -->
      <div class="clear-fix main" id="pressRelease">
        <!-- contents -->
        <div class="fLeft" id="contents">
          <div class="sectionHeader">
            <h2>サイトマップ</h2></div>
          <!-- sectionHeader -->
 
          <div id="edit-area">
            <div class="mod-2clm">
              <div class="left">
                <div class="sitemap-list">
                  <h3>企業情報</h3>
                  <ul>
                    <li id="menu-item-20326" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20326">
                      <a href="<?php echo bloginfo('url').'/company'; ?>">会社概要</a></li>
                    <li id="menu-item-675" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-675">
						<a href="<?php echo bloginfo('url').'/message'; ?>">トップメッセージ</a></li>
                    <li id="menu-item-676" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-676">
						<a href="<?php echo bloginfo('url').'/policy'; ?>">ミッション・バリュー</a></li>
                    <li id="menu-item-677" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-677">
                      <a href="<?php echo bloginfo('url').'/story'; ?>">企業沿革</a></li>
                    <li id="menu-item-681" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-681">
    					<a href="<?php echo bloginfo('url').'/map'; ?>">所在地・地図</a></li>
                  </ul>
                </div>
    

       			 <div class="sitemap-list">
                  <h3>事業内容</h3>
                  <ul>
                    <li id="menu-item-678" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678">
                      <a href="<?php echo bloginfo('url').'/service'; ?>">サービス内容</a></li>
                  </ul>
                </div>

        		<div class="sitemap-list">
                  <h3>ニュース</h3>
                  <ul>
                    <li id="menu-item-74042" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74042">
                     <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
                  </ul>
                </div>
      			 <div class="sitemap-list">
                  <h3>採用情報</h3>
                  <ul>
                    <li id="menu-item-74042" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74042">
                     <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
                  </ul>
                </div>
               <div class="sitemap-list">
                  <h3>お問い合わせ</h3>
                  <ul>
                    <li>
                		<a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
                  </ul>
                </div>
                  
                 <div class="sitemap-list">
                  <h3>その他</h3>
                  <ul class="last">
                    <li>
                    	<a href="<?php echo bloginfo('url').'/privacy'; ?>">個人情報保護方針</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- edit-area -->


				
        </div>
        <!-- contents -->
  
 <?php
include 'sidebar.php';
?> 
      <!-- pressRelease --></div>
  
  <?php
include 'footer.php';
?>