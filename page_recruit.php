<?php
/*
Template Name: Recruit Page
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
            <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50 current_page_item">
              <a href="<?php echo bloginfo('url').'/recruit'; ?>">採用情報</a></li>
            <li id="menu-item-60" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-60">
              <a href="<?php echo bloginfo('url').'/contact'; ?>">お問い合わせ</a></li>
          </ul>
        </div>

      <ul class="bread_crumb">
        <li class="level-1 top">
          <a href="<?php echo bloginfo('url'); ?>">ホーム</a></li>
        <li class="level-2 sub tail current">採用情報</li></ul>
      <!-- pressRelease -->
      <div class="clear-fix main" id="pressRelease">
        <!-- contents -->
        <div class="fLeft" id="contents">
          <div class="sectionHeader">
            <h2>採用情報</h2></div>
          <!-- sectionHeader -->
	      <div id="edit-area">
	          <div class="section">
	            <p class="lead-text">クーセントでは、専門技術者集団として創造と挑戦を続き、日々高度化するお客様のニーズに的確に応えると共に、より先進的に、
	          	より価値あるサービスをお客様へ提供できるよう努めて参ります。私たちのビジネスを加速させる優秀な人材を積極的に求めています。<p>
	       <p>これまでのキャリアやスキルをベースに、新しいステージに挑戦しませんか。</p>
	          </div>

		         <h4>新卒採用</h4>
					 <p>現在、新卒採用は行っておりません。</p></br>
    			
		      	  <h4>中途採用</h4>
		      	  	 
		          <ul class="articleListArea">
		          <?php query_posts('cat=3&showposts=10'); //リクルートの分類がcat=3 ?>
		           <?php if (! have_posts() ) {
		              echo "<span>現在、キャリア採用は行っておりません。</span> <br><br> <strong><font color='#FF0000'> リクルートの文章分類に採用情報を追加してください。</font></strong>";
		          	} 
		          	?>
		          <?php while ( have_posts() ) : the_post(); ?>
		          <li>
		            <span class="articleListDate"><?php the_time('Y年n月j日'); ?></span>
		            <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
		          </li>
		          <?php endwhile; wp_reset_query(); ?> 
		        </ul>
		      </div>
		      <!-- edit-area -->
          
             		
        <!--
          <h3>募集職種</h3>
              
               <div class="section">
	              <table class="overviewTableStyle">
	                <tbody>
	                  <tr>
	                    <th>募集職種</th>
	                    <td>組込み系ブリッジSE</td></tr>
	                  <tr>
	                    <th>勤務地：</th>
	                    <td>大阪府</td>
	                  </tr>
	                  <tr>
	                    <th>業務内容</th>
	                    <td>クライアントとの打ち合わせ<br/>
							ソフトウェアの要件定義・基本設計、<br/>
							一部のオンサイト開発、オフショア開発の管理
	                     </tr>
	                  <tr>
	                    <th>年俸</th>
	                    <td>600万円～900万円</td></tr>
	                
	                  <tr>
	                    <th>求める人物像</th>
	                    <td>論理的なコミュニケーション能力がある<br/>
							協調性に優れ、前向きに物事に取り組める<br/>
							高いチームワーク意識、リーダーシップ</td></tr>
	                  <tr>
	                    <th>雇用形態</th>
	                    <td>正社員・契約社員（正社員登用制度あり）</td></tr>
	                  <tr>
	                    <th>応募条件</th>
	                    <td>車載機器（カーナビ、カーオーディオ）、デジタル家電、PC製品、携帯端末などの組込みシステムにおける開発経験が3年程度ある方<br />
							プロジェクトマネジメント / リーダ経験のある方歓迎</td></tr>
	                  <tr>
	                    <th>応募方法</th>
	                    <td>履歴書・職務経歴書などご準備の上、<br/>メール：hr@kucent.comにてご送信下さい</td></tr>
	                </tbody>
	              </table>
             </div>
             -->

        </div>
        <!-- contents -->
        
   <?php
include 'sidebar.php';
?>
        
      <!-- pressRelease --></div>
<?php
include 'footer.php';
?>