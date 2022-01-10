<?php
/*
Template Name: date
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
        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40 current_page_item"
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
    <li class="level-2 sub tail current">
      <?php echo get_query_var( 'year' ).'年'; ?>
    </li>
  </ul>
  <!-- pressRelease -->
  <div class="clear-fix main" id="pressRelease">
    <!-- contents -->
    <div class="fLeft" id="contents">
      <!-- sectionHeader -->
      <div class="sectionHeader">
        <h2>
          <?php echo get_query_var( 'year' ).'年'; ?>
        </h2>
        <!-- sectionHeaderDescription01 -->
        <p class="sectionHeaderDescription01"> 一覧を掲載しています。</p>
    
        <!-- sectionHeaderDescription01 -->

      </div>
      <!-- sectionHeader -->
  		 	  
      <div id="edit-area">
          <div>
			<select style= "font-size: 14px;text-align-last: auto;"  class="easy-select-box" name="archive-dropdown"onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value="">選択してください</option>
			<?php wp_get_archives( 'type=yearly&format=option&before=&after=年の一覧&show_post_count=0' ); ?>
			</select>
		 </div>
		 	  
          <ul class="articleListArea">
				<?php
				    //クエリの内容
				    $nowY = get_query_var( 'year' ); // そのページの年を取得
				    $nextY = ( $nowY + 1 ); // 翌年を定義
				    $args = array(
				        'post_type' => 'post', // 「投稿」を指定
				        'cat' => '2', // 投稿分類の指定
				        'date_query' => array(
				            array(
				                'after' => array( // その年の1/1から
				                    'year'  => $nowY,
				                    'month' => 1,
				                    'day'   => 1,
				                ),
				                'before' => array( // 翌年の1/1まで
				                    'year'  => $nextY,
				                    'month' => 1,
				                    'day'   => 1,
				                ),
				                'inclusive' => true,
				                'compare' => 'BETWEEN',
				            ),
				        ),
				        'posts_per_page' => -1,
				    );
				    $the_query = new WP_Query( $args );
				?>
				
				
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li>
                <span class="articleListDate"><?php the_time('Y年n月j日'); ?></span>
                <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
              </li>
      		  <?php endwhile; ?>
      		  <?php wp_reset_postdata(); ?>
        </ul>
      </div>
      <!-- edit-area -->
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
