<?php
    get_template_part( 'head_part' );
?>

  <body data-rsssl="1" id="pageTop" class="home">
    <div id="wrapper">
      <div id="spHeader">
        <h1 id="spHeaderLogo">
          <a href="<?php echo bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a></h1>
        <div class="spSidebarOpen">Menu</div></div>
      <nav class="spSidebar">
        <div class="spSidebarClose">Close</div>
        <ul>
          <li id="menu-item-39" class="spSidebarToggle menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-39">
            <a>企業情報</a>
            <ul class="sub-menu">
              <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40">
                <a href="<?php echo bloginfo('url').'/company'; ?>">会社概要</a></li>
              <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41">
                <a href="<?php echo bloginfo('url').'/message'; ?>">トップメッセージ</a></li>
              <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42">
                	<a href="<?php echo bloginfo('url').'/policy'; ?>">ミッション・バリュー</a></li>
              <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47">
                 <a href="<?php echo bloginfo('url').'/story'; ?>">企業沿革</a></li>
              <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48">
                <a href="<?php echo bloginfo('url').'/map'; ?>">所在地・地図</a></li>
            </ul>
          </li>
      
      
            <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81">
           <a href="<?php echo bloginfo('url').'/service'; ?>">事業内容</a></li>
           	<li id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82">
           <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
            <li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84">
           <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
           <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
	       <li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86">
            <a href="<?php echo bloginfo('url').'/privacy'; ?>">個人情報保護方針</a></li>
          <li id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85">
            <a href="<?php echo bloginfo('url').'/sitemap'; ?>">サイトマップ</a></li>
        </ul>
        <!-- 
        <div class="spSidebarLanguage">
          <div class="spSidebarLanguageJa">Japanese</div>
          <div class="spSidebarLanguageEn">
            <a href="<?php echo bloginfo('url'); ?>">English</a>
          </div>
        </div>
        -->   
         <div class="spSidebarLanguage">
             <?php echo do_shortcode('[gtranslate]'); ?>
         </div>
      </nav>


      <div id="header">
        <div id="headerArea" class="clear-fix">
          <h1 class="fLeft" id="headerLogo">
            <a href="<?php echo bloginfo('url'); ?>"></a></h1>
          <div class="fRight clear-fix headfunction" id="headerInfo">
            </br>
            <div class="clear-fix headbtn">
            <!--     
              <p id="headerLanguage">
                <a href="<?php echo bloginfo('url'); ?>">English</a></p>
              <p id="headerLanguage">
                <a href="<?php echo bloginfo('url'); ?>">中文</a></p>
             -->   
             
            <p id="headerLanguage"><?php echo do_shortcode('[gtranslate]'); ?></p>
            </div>
            <div id="headerSearch">
              <!-- searchForm -->
              <form method="get" id="searchForm" action="<?php echo home_url('/');?>">
                <!-- searchArea -->
                <ul id="searchArea">
                  <li class="clear-fix">
                    <input id="s" type="text" value="<?php echo get_search_query(); ?>" name="s" class="keywords fLeft" />
                    <input type="submit" name="btn" id="btn_headerSearch" style="float: left" /></li>
                </ul>
                <!-- searchArea --></form>
              <!-- searchForm --></div>
          </div>
         
        </div>
      </div>
          
          
