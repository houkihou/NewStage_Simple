<?php
/*
Template Name: Contact Page
Template Post Type: page
*/
?>
<?php
include 'header.php';
?>
	     <div id="hero">
	        <div id="lNaviArea" class="lnavi-area-container">
	          <ul class="clear-fix" id="lNavi">
	            <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10">
	              <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
	            <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
	              <a href="<?php echo bloginfo('url').'/company'; ?>">企業情報</a></li>
	            <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30">
	               <a href="<?php echo bloginfo('url').'/service'; ?>">事業内容</a></li>
	            <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
	              <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
	            <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50">
	              <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
	            <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60 current_page_item">
	              <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
	          </ul>
        </div>

      <ul class="bread_crumb">
        <li class="level-1 top">
          <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
        <li class="level-2 sub tail current">お問い合わせ</li>
      </ul>
      <!-- pressRelease -->
      <div class="clear-fix main" id="pressRelease">
        <!-- contents -->
        <div class="fLeft" id="contents">
          <div class="sectionHeader">
            <h2>お問い合わせ</h2></div>
          <!-- sectionHeader -->
          <div id="edit-area">
            <div class="form-wrap">
              <div id="trust-form" class="contact-form contact-form-input">
                <dl class="choiceList">
                  <dt>採用に関するお問い合わせ</dt>
                  <dd>採用に関するお問い合わせは、下記のメールにて受け付けております。
                	<br />メール：hr_jp@kucent.comメールの件名：お問い合わせ内容
				
                    <br />
                    <a class="formlink" href="mailto:hr_jp@kucent.com?subject=採用に関するお問い合わせ&amp;body=">お問い合わせをする</a></dd>
                </dl>
                <dl class="choiceList">
                  <dt>サービス内容に関するお問い合わせ</dt>
                  <dd>各サービス・事業内容に関するお問い合わせは、下記のメールにて受け付けております。
                	<br />メール：service_jp@kucent.comメールの件名：お問い合わせ内容
                    <br />
                    <a class="formlink" href="mailto:service_jp@kucent.com?subject=サービス・事業内容に関するお問い合わせ&amp;body=">お問い合わせをする</a></dd>
                </dl>
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