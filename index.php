
<?php
include 'header.php';
?>
      
      <div id="hero">
        <div id="lNaviArea" class="lnavi-area-container">
          <ul class="clear-fix" id="lNavi">
            <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10 current_page_item">
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
        </div>
          
        <div id="mainImage">ユーザー本位の価値あるサービスを創出しつづける 生活者視点の新しい価値を提供して、日々の生活を豊かに</div>
        </div>
      <!-- index -->
      <div class="clear-fix main" id="index">
        <!-- contents -->
        <div class="fLeft" id="contents">
          <!-- section -->
          <div class="section">
            <!-- sectionHeader -->
            <div class="sectionHeader">
              <h2>ニュース</h2>
              <!-- sectionHeaderDescription01 -->
              <p class="sectionHeaderDescription01">企業最新ニュースを掲載しています</p>
              <!-- sectionHeaderDescription01 -->
              <!-- sectionHeaderLink -->
              <p class="sectionHeaderLink">
               <a href="<?php echo bloginfo('url').'/news'; ?>">一覧へ</a></p>
              <!-- sectionHeaderLink --></div>
            <!-- sectionHeader -->
            <!-- articleListArea -->
            <ul class="articleListArea">

			<?php query_posts('cat=2&showposts=5'); //ニュースの分類がcat=2 ?>
				
            <?php if (! have_posts() ) {
              echo "<br> <strong><font color='#FF0000'> ニュースの文章分類にニュースを追加してください。</font></strong>";
          	} 
          	?>
			<?php while (have_posts()) : the_post(); ?>
              <li>
                <div class="articleListDate"><?php the_time('Y年n月j日'); ?></div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <!-- 
                  <span class="top_dataPdf">
                    <a target="_blank" href="#">PDF</a></span>
                -->
				</h3>
              </li>
			<?php endwhile; wp_reset_query(); ?> 
            </ul>
            <!-- articleListArea --></div>
          <!-- section --></div>
        <!-- contents -->
        <!-- sidebar -->
        <div class="fRight" id="sidebar">
          <!-- sideMainNav -->
          <div class="top_side_container">
            <ul class="sideSection sideMainNav">
              <li id="menu-item-200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-200">
               <a href="<?php echo bloginfo('url').'/company'; ?>">企業情報</a></li>
              <li id="menu-item-210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-210">
                  <a href="<?php echo bloginfo('url').'/service'; ?>">事業内容</a></li>
              <li id="menu-item-220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-220">
               <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
              <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230">
                <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
              <li id="menu-item-240" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240">
                <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
            </ul>
          </div>
          <!-- sideLayerNav --></div>
        <!-- sidebar --></div>
      <!-- index --></div>
 <?php
include 'footer.php';
?>