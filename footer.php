
    <!-- wrapper -->
    <div id="footer">
      <div id="footerNavArea">
        <div class="sp_footer_search">
          <form action="<?php echo home_url('/');?>" id="searchForm" method="get">
            <ul id="searchArea" class="clear-fix">
              <li>
                <input class="keywords fLeft" id="s" name="s" type="text" value="" />
                <input class="fLeft" id="btn_headerSearch" name="btn" type="submit" /></li>
            </ul>
          </form>
        </div>
        <div class="sp_footer_menu">
          <ul>
            <li id="menu-item-540" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-540 current_page_item">
              <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
            <li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-541">
              <a href="<?php echo bloginfo('url').'/company'; ?>">企業情報</a></li>
            <li id="menu-item-542" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-542">
     		    <a href="<?php echo bloginfo('url').'/service'; ?>">事業内容</a></li>
            <li id="menu-item-543" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-543">
               <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
            <li id="menu-item-544" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-544">
               <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
            <li id="menu-item-545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-545">
              <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
            <li id="menu-item-546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-546">
				<a href="<?php echo bloginfo('url').'/sitemap'; ?>">サイトマップ</a></li>
          </ul>
        </div>
        <div class="clear-fix" id="footerNav">
          <ul>
            <li class="footer_nav_title">
              <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
            <li id="menu-item-545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-545">
              <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
            <li id="menu-item-546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-546">
               <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
            <li id="menu-item-544" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-544">
				<a href="<?php echo bloginfo('url').'/sitemap'; ?>">サイトマップ</a></li>
          </ul>
          <ul>
            <li class="footer_nav_title">
              <a href="<?php echo bloginfo('url').'/company'; ?>">企業情報</a></li>
            <li id="menu-item-539" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-539">
     		   <a href="<?php echo bloginfo('url').'/company'; ?>">会社概要</a></li>
            <li id="menu-item-535" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-535">
              <a href="<?php echo bloginfo('url').'/message'; ?>">トップメッセージ</a></li>
            <li id="menu-item-536" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-536">
              <a href="<?php echo bloginfo('url').'/policy'; ?>">ミッション・バリュー</a></li>
            <li id="menu-item-538" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-538">
             <a href="<?php echo bloginfo('url').'/story'; ?>">企業沿革</a></li>
            <li id="menu-item-541" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-541">
              <a href="<?php echo bloginfo('url').'/map'; ?>">所在地・地図</a></li>
          </ul>
          <ul>
            <li class="footer_nav_title">
              <a href="<?php echo bloginfo('url').'/company'; ?>">事業内容</a></li>
            <li id="menu-item-537" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-537">
              <a href="<?php echo bloginfo('url').'/service'; ?>">サービス内容</a></li>
             <li id="menu-item-545" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-545">
		        <a href="<?php echo bloginfo('url').'/privacy'; ?>">個人情報保護方針</a></li>
          </ul>
          <ul>
            <li class="footer_nav_title">
              <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
            <li id="menu-item-23190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23190">
              <a href="<?php echo bloginfo('url').'/news'; ?>">ニュース</a></li>
        </div>
      </div>
   
   <!-- back top start -->
   
	<style>

        #back_top {
        	width: 40px;
        	height: 40px;
        	text-align: center;
        	line-height: 39px;
        	position: fixed;
        	right: 15px;
        	bottom: 50px;
        	color: #fff;
        	border-radius: 50%;
        	z-index: 100;
        	cursor: pointer;
        	display: none;
        	background: #005bac url(<?php echo get_template_directory_uri().'/static/css/resource/images/backtop.svg'; ?>)  center center/40% auto no-repeat
        }

	    body {
            overflow - x: hidden;
        }
	 </style>

         <!-- 回到顶部 Start -->    
  		  <a id="back_top" href="script:;">   <span></span></a>
   		 <!-- 回到顶部 End --> 

		<script>
			 $(function(){
			        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
			        $(function () {
			            $(window).scroll(function(){
			                if ($(window).scrollTop()>100){
			                    $("#back_top").fadeIn(1000);
			                }
			                else
			                {
			                    $("#back_top").fadeOut(1000);
			                }
			            });
			 
			            //当点击跳转链接后，回到页面顶部位置
			            $("#back_top").click(function(){
			                if ($('html').scrollTop()) {
			                    $('html').animate({ scrollTop: 0 }, 100);//动画效果
			                    return false;
			                }
			                $('body').animate({ scrollTop: 0 }, 100);
			                return false;
			            });
			        });
			    });
		</script>

       <!-- back top end -->  
      
      <p id="copyright">Copyright &copy; Kucent.com, Inc. All Rights Reserved.</p></div>
  
  
  
  </body>

</html>
  <?php wp_footer();?>	

