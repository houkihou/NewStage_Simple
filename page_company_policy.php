<?php
/*
Template Name: CompanyPolicy Page
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
            <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20 current_page_item">
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
        </div>
      <ul class="bread_crumb">
                <li class="level-1 top">
                    <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
                <li class="level-2 sub">
 					<a href="<?php echo bloginfo('url').'/company'; ?>">企業情報</a></li>
                <li class="level-3 sub tail current">ミッション・バリュー
                </li>
            </ul><!-- pressRelease -->
    
            <div class="clear-fix main" id="pressRelease">
                <!-- contents -->
                <div class="fLeft" id="contents">
                    <div class="sectionHeader">
                        <h2>
                            ミッション・バリュー
                        </h2>
                    </div><!-- sectionHeader -->
                    <div id="edit-area">
                
                        <h4>
                            MISSION
                        </h4>
                        	<p> テクノロジーを通じて、世界中の人々を幸せに。</p></br>
                        <h4>
                             VISION
                        </h4>
                        	<p>
							今までにない価値ある商品を創造し、多くの人に感動を届ける。</p> </br>

                        <h4>
                             VALUE
                        </h4>
                        	<p>
							当社は、企業である前に各従業員が家族の一員であると考えています。</br>
							お客様が私たちを動かす一方で、当社のバリューは私たち自身を導きます。</p>
                        <ul class="valuelist">
                            <li>●敬意<br><span>敬意を重んじることで生まれるコミュニケーションが会社の価値を上げます</span>
                            </li>
                            <li>●感謝<br><span>感謝の気持ちを伝える事で生まれる信頼が次への原動力になります</span>
                            </li>
                            <li>●創造<br><span>創造することを絶えず実践、そして行動して世界に新しい価値を発信します</span>
                            </li>
                            <li>●挑戦<br><span>挑戦の先にある感動で世界一の企業を目指します </span>
                            </li>
                        </ul>

                        	
                    </div><!-- edit-area -->
                </div><!-- contents -->
         <!-- sidebar -->
            </br>    </br>
        <div class="fRight" id="sidebar">
          <!-- sideMainNav -->
          <h2 class="sideLayerNavTitle">
            <span>企業情報</span></h2>
          <!-- sideLayerNav -->
         <ul class="sideSection" id="sideLayerNav">
            <li id="nav_menu-4" class="widget widget_nav_menu">
              <ul>
                <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-48 menu-item-300">
 				  <a href="<?php echo bloginfo('url').'/company'; ?>">会社概要</a></li>
                <li id="menu-item-310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310">
                  <a href="<?php echo bloginfo('url').'/message'; ?>">トップメッセージ</a></li>
                <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320  current_page_item  current-menu-item">
                  <a href="<?php echo bloginfo('url').'/policy'; ?>">ミッション・バリュー</a></li>
                <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330">
                  <a href="<?php echo bloginfo('url').'/story'; ?>">企業沿革</a></li>
                <li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340">
                  <a href="<?php echo bloginfo('url').'/map'; ?>">所在地・地図</a></li>
              </ul>
            </li>
          </ul>
          <!-- sideLayerNav -->
          <ul class="sideSection sideMainNav">
            <li>
              <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
          </ul>
          <!-- sidebar --></div> 
            			
            			<!-- pressRelease -->
        </div><!-- wrapper -->
    
   <?php
include 'footer.php';
?>