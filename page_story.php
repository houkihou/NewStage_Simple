<?php
/*
Template Name: CompanyStory Page
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
                <li class="level-3 sub tail current">企業沿革
                </li>
            </ul><!-- pressRelease -->
    
            <div class="clear-fix main" id="pressRelease">
                <!-- contents -->
                <div class="fLeft" id="contents">
                    <div class="sectionHeader">
                        <h2>
                            企業沿革
                        </h2>
                    </div><!-- sectionHeader -->
                    <div id="edit-area">

                        <table class="historyTableStyle story">
                            <tbody>
                                <tr>
                                    <th>
                                        2021年
                                    </th>
                                    <td>
                                        <dl>
                                            <dt>
                                                4月
                                            </dt>
                                            <dd>
                                                 株式会社クーセント設立
                                            </dd>
                                        </dl>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- edit-area -->
                </div>
                			
                			<!-- contents -->
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
                <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320">
                  <a href="<?php echo bloginfo('url').'/policy'; ?>">ミッション・バリュー</a></li>
                <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330 current_page_item  current-menu-item">
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