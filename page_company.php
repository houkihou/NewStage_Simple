<?php
/*
Template Name: Company Page
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
             <li class="level-3 sub tail current">企業情報</li></ul>
      <!-- pressRelease -->
      <div class="clear-fix main" id="pressRelease">
        <!-- contents -->
        <div class="fLeft" id="contents">
          <div class="sectionHeader">
            <h2>会社概要</h2></div>
          <!-- sectionHeader -->
          <div id="edit-area">
            <div class="section">
              <table class="overviewTableStyle">
                <tbody>
                  <tr>
                    <th>会社名</th>
                    <td>株式会社クーセント</td></tr>
                  <tr>
                    <th>本社所在地</th>
                    <td>〒545-0052
                      <br />大阪市阿倍野区阿倍野筋1丁目3番21号
                      <br />
                      <a href="<?php echo bloginfo('url').'/map'; ?>">アクセスマップ</a></td>
                  </tr>
                  <tr>
                    <th>代表者</th>
                    <td>代表取締役社長　佐藤直樹
                     </tr>
                  <tr>
                    <th>設立</th>
                    <td>2020年12月</td></tr>
                
                  <tr>
                    <th>資本金</th>
                    <td>500万円</td></tr>
                  <tr>
                    <th>従業員数</th>
                    <td>25名（2021年12月末 現在）
                      <br />※派遣社員及びアルバイトを除く従業員ベース</td></tr>
                </tbody>
              </table>
 
            </div>
          </div>
          <!-- edit-area --></div>
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
                <li id="menu-item-300" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-48 menu-item-300     current_page_item  current-menu-item">
 				  <a href="<?php echo bloginfo('url').'/company'; ?>">会社概要</a></li>
                <li id="menu-item-310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-310">
                  <a href="<?php echo bloginfo('url').'/message'; ?>">トップメッセージ</a></li>
                <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320">
                  <a href="<?php echo bloginfo('url').'/policy'; ?>">ミッション・バリュー</a></li>
                <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330 ">
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
          
          
        <!-- pressRelease --></div>
<?php
include 'footer.php';
?>