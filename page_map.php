<?php
/*
Template Name: AccessMap Page
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
                <li class="level-3 sub tail current">所在地・地図
                </li>
            </ul><!-- pressRelease -->
            <div class="clear-fix main" id="pressRelease">
                <!-- contents -->
                <div class="fLeft" id="contents">
                    <div class="sectionHeader">
                        <h2><strong>
                            所在地・地図 </strong>
                        </h2>
                    </div><!-- sectionHeader -->
                    <div id="edit-area">
                        <p style="padding-top: 10px;">
                            [本社所在地]
                        </p>
                        <p class="tit">
                            〒545-0052 大阪市阿倍野区阿倍野筋1丁目3番21号
                        </p>
                        
	                        <div>
	                        <p style="padding-top: 10px;">
	                            [アクセス]
	                        </p>
	                              <p>
									※	当社へのアクセスは公共交通機関をご利用ください<br/>
									 	 ●ＪＲ各線をご利用の場合は、天王寺駅南出口より徒歩約5分<br/>
										 ●地下鉄御堂筋線をご利用の場合は、天王寺駅⑧番出口より徒歩約4分<br/>
										 ●地下鉄谷町線をご利用の場合は、阿倍野駅①番出口より徒歩約1分<br/>
										 ●近鉄南大阪線をご利用の場合は、大阪阿部野橋駅西出口より徒歩約3分<br/>
	                                </p>

									<!-- Google map start -->
										<style>
											.map-wrapper {
											  max-width: 480px; /* 最大幅 */
											  min-width: 280px; /* 最小幅 */
											  margin: 20px 0;
											  padding: 4px;
											  border: 1px solid #CCC;  /* ボーダー（枠線） */
											}
											.googlemap {
											  position: relative;
											  padding-bottom: 56.25%; /* 縦横比を 16:9 */
											  height: 0;
											  overflow: hidden;
											}
											.googlemap iframe {
											  position: absolute;
											  top: 0;
											  left: 0;
											  width: 100%;
											  height: 100%;
											}
										 </style>
										 
						             <div class="googlemap">
		                            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.3660586431847!2d135.51090151553126!3d34.64545719368207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000ddf1d15af617%3A0xbfca04f70bcd7723!2z44CSNTQ1LTAwNTIg5aSn6Ziq5bqc5aSn6Ziq5biC6Zi_5YCN6YeO5Yy66Zi_5YCN6YeO562L77yR5LiB55uu77yT4oiS77yS77yR!5e0!3m2!1sja!2sjp!4v1641562894230!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									</div>
									<br>
									<!-- Google map end -->
	                        </div>

									
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
                <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320">
                  <a href="<?php echo bloginfo('url').'/policy'; ?>">ミッション・バリュー</a></li>
                <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330 ">
                  <a href="<?php echo bloginfo('url').'/story'; ?>">企業沿革</a></li>
                <li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340  current_page_item  current-menu-item">
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