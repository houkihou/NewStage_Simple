<?php
/*
Template Name: category
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
      <?php $category = get_the_category(); echo $category[0]->cat_name; ?>
    </li>
  </ul>
  <!-- pressRelease -->
  <div class="clear-fix main" id="pressRelease">
    <!-- contents -->
    <div class="fLeft" id="contents">
      <!-- sectionHeader -->
      <div class="sectionHeader">
        <h2>
          <?php $category = get_the_category(); echo $category[0]->cat_name; ?>
        </h2>
        <!-- sectionHeaderDescription01 -->
        <p class="sectionHeaderDescription01"> 一覧を掲載しています。</p>
    
        <!-- sectionHeaderDescription01 -->

      </div>
      <!-- sectionHeader -->
      <div id="edit-area">
          <ul class="articleListArea">
          <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <span class="articleListDate"><?php the_time('Y年n月j日'); ?></span>
            <span
              ><a href="<?php the_permalink(); ?>"
                ><?php the_title(); ?></a
              ></span
            >
          </li>
          <?php endwhile; ?>
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
