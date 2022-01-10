<?php
/*
Template Name: Service Page
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
            <li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30 current_page_item">
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
         <li class="level-3 sub tail current">事業内容</li></ul>
    <!-- pressRelease -->
  
    <div class="clear-fix main" id="pressRelease">
      <!-- contents -->
      <div class="fLeft" id="contents">
        <div class="sectionHeader">
          <h2>事業内容</h2>
        </div>
        <!-- sectionHeader -->
        <div id="edit-area">
          <div class="section">
            <p class="lead-text">クーセントは、業務系ビジネスシステムや車載機器、デジタル複合機など身近な製品に組み込まれるソフトウェアなど、幅広い分野のソフトウェア開発に携わっています。お客様先へのソフトウェアエンジニアの派遣や受託開発などをはじめ、運用・保守、品質管理まで、システム開発に関するさまざまなご要望にお応えします。</p>
            <p>
            	<p><a href="#" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-226" src="<?php echo get_template_directory_uri().'/static/css/resource/images/page_images/service_page.png'; ?>" width="450" /></a></p>
        

          </div>
          <h3>サービス内容</h3>
    		<div class="service mod-2clm">
				<div class="left">
				<h4>WEBシステム開発<br />
				<small>ECサイト・業務システム・コーポレートサイトなど各種開発</small></h4>
				<p>長年の技術的積み上げと開発実績で得たノウハウを活かし、Webアプリケーションの企画・立案から、 設計・構築・運用・アフターサービスまで、皆様のビジネスをサポートするシステムや サービスをご提供しております。

				</p>
				</div>
				<div class="right">
				<p><a href="#" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-243" src="<?php echo get_template_directory_uri().'/static/css/resource/images/page_images/service_img_01.png'; ?>" alt="WEBシステム開発" width="360" /></a></p>
				</div>
			</div>
					
    		<div class="service mod-2clm">
				<div class="left">
				<h4>オープンシステム設計・開発<br />
				 <small>金融・医療・物流など各種開発</small></h4>
				<p>グローバルに連携し、円滑なプロジェクト推進を実現するとともに、上流設計⇒製造・単体テスト⇒結合テスト工程に至るまでのトータルサポートをご提供する体制が整っております。　
				金融、通信、公共・医療、製造・物流の領域における、システムコンサルティングから設計・構築・運用・保守に至るまで、より高品質なトータル･ソリューションサービスを世界各国のサイトよりご提供いたします。

				</p>
				</div>
				<div class="right">
				<p><a href="#" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-243" src="<?php echo get_template_directory_uri().'/static/css/resource/images/page_images/service_img_02.png'; ?>" alt="業務系システム開発" width="360" /></a></p>
				</div>
			</div>
					
			<div class="service mod-2clm">
				<div class="left">
				<h4>組込みソフトウェア設計・開発<br />
				 <small>家電・携帯・車載など各種開発</small></h4>
				<p>近年、組込機器におけるIoT化の普及とともに多機能化が進み、開発は複雑化し、より重要度が上がっております。
				我社は車載ソフトウェアおよび民生機器組み込みソフトウェアをはじめとした豊富な開発経験により、お客様の事業フェーズに合わせた最適なソリューションをご提供するとともに、高品質技術の提供をお約束いたします。</p>
				</div>
				<div class="right">
				<p><a href="#" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-226" src="<?php echo get_template_directory_uri().'/static/css/resource/images/page_images/service_img_03.png'; ?>" alt="組込みソフトウェア開発" width="360" /></a></p>
				</div>
			</div>
        
			<div class="service mod-2clm">
				<div class="left">
				<h4>ソフトウェア評価/検証・サポート<br />
				<small>業務システム・組み込みソフト・スマホアプリなど各種検証</small></h4>
				<p>システムテストに向けて効率的で効果的なテストを推進できるよう、開発段階の評価ポイント調査からテスト計画立案、テストプロセスの提案・要求を行いながら、
				テスト設計から不具合分析、次モデルへのフィードバック、生産後の保守対応まで幅広くフォローします。</p>
				</div>
				<div class="right">
				<p><a href="#" target="_blank" rel="noopener noreferrer"><img class="alignnone size-full wp-image-226" src="<?php echo get_template_directory_uri().'/static/css/resource/images/page_images/service_img_04.png'; ?>" alt="ソフトウェア評価/検証・サポート" width="360" /></a></p>
				</div>
			</div>
        
        
        </div>
        <!-- edit-area -->

      </div>
      <!-- contents -->
    <?php
include 'sidebar.php';
?> 
    <!-- pressRelease --></div>
 <?php
include 'footer.php';
?>