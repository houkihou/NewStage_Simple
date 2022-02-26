<?php

//require_once get_template_directory() .'/cs-framework/cs-framework.php';

ini_set('error_reporting','E_ALL & ~E_NOTICE'); //提示除去 E_NOTICE 之外的所有错误信息


/**
 *  JS・CSSファイルを読み込む
 */
function focusScripts() {  
    //Enqueue Javascripts
    //wp_register_script( 'bootstrap',get_template_directory_uri().'/static/js/bootstrap.min.js');

    wp_register_script( 'easyselectbox',get_template_directory_uri().'/static/js/easyselectbox.min.js');
	wp_register_script( 'simple-sidebar',get_template_directory_uri().'/static/js/jquery.simple-sidebar.min.js');
	wp_register_script( 'sp_script',get_template_directory_uri().'/static/js/sp_script.js');
	wp_register_script( 'script',get_template_directory_uri().'/static/js/script.js');	
	wp_register_script( 'hover',get_template_directory_uri().'/static/js/hover.js');
		
	    //Enqueue Css Style  highlighs
    wp_register_style('bootstrap',get_template_directory_uri().'/static/css/bootstrap.min.css');
	wp_register_style('editor_style',get_template_directory_uri().'/static/css/editor-style.css');
	wp_register_style('page_style',get_template_directory_uri().'/static/css/page_style.css');
	wp_register_style('site_style',get_template_directory_uri().'/static/css/site_style.css');
	wp_register_style('jquery_bxslider',get_template_directory_uri().'/static/css/jquery_bxslider.css');
	wp_register_style('top_style',get_template_directory_uri().'/static/css/top_style.css');
	
	wp_register_style('common_style',get_template_directory_uri().'/static/css/common_style.css');
	wp_register_style('style',get_template_directory_uri().'/static/css/style.css');		


    if ( !is_admin() ) {
        //wp_enqueue_script( 'bootstrap' );
        //wp_deregister_script( 'jquery' );	// 禁止加载默认jq库
        
        
        //wp_enqueue_script('jquery_min','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');        
		//wp_enqueue_script('jquery_ui','https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');
		//wp_enqueue_script('jquery_ui','https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');
		
		wp_register_script( 'jquery_min_local',get_template_directory_uri().'/static/js/jquery.min.js');
		wp_enqueue_script( 'jquery_min_local' );
		wp_register_script( 'jquery_ui_local',get_template_directory_uri().'/static/js/jquery-ui.min.js');
		wp_enqueue_script( 'jquery_ui_local' );
		
        wp_enqueue_script( 'easyselectbox' );
		wp_enqueue_script( 'simple-sidebar' );
		wp_enqueue_script( 'sp_script' );
		wp_enqueue_script( 'script' );
		wp_enqueue_script( 'hover' );
		
        //wp_enqueue_style( 'bootstrap' );
		wp_enqueue_style( 'editor_style' );       
		wp_enqueue_style( 'page_style' );       
		wp_enqueue_style( 'site_style' );
		wp_enqueue_style( 'jquery_bxslider' );
		wp_enqueue_style( 'top_style' );
		wp_enqueue_style( 'common_style' );
		wp_enqueue_style( 'style' );

        wp_deregister_script( 'l10n' );
    }  
}  
add_action( 'init','focusScripts' );



//////////////////////////////////////////theme Custom Start//////////////////////////////////////////////////////////
// set permalink
function set_permalink(){
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/archives/%post_id%.html');
}
add_action('init', 'set_permalink');



/**  
*参数$title 字符串 页面标题  
*参数$slug  字符串 页面别名  
*参数$page_template 字符串  模板名  
*无返回值  
**/  
function themes_auto_add_pages($title,$slug,$page_template=''){  
    $allPages = get_pages();//获取所有页面  
    $exists = false;  
    foreach( $allPages as $page ){  
        //通过页面别名来判断页面是否已经存在  
        if( strtolower( $page->post_name ) == strtolower( $slug ) ){  
            $exists = true;  
        }  
    }  
    if( $exists == false ) {  
        $new_page_id = wp_insert_post(  
            array(  
                'post_title' => $title,  
                'post_type'     => 'page',  
                'post_name'  => $slug,  
                'comment_status' => 'closed',  
                'ping_status' => 'closed',  
                'post_content' => '',  
                'post_status' => 'publish',  
                'post_author' => 1,  
                'menu_order' => 0  
            )  
        );  
        //如果插入成功 且设置了模板  
        if($new_page_id && $page_template!=''){  
            //保存页面模板信息  
            update_post_meta($new_page_id, '_wp_page_template',  $page_template);  
        }  
    }  
}

function custom_themes_auto_add_pages() {  
    global $pagenow;  
    //判断是否为激活主题页面  
    if ( 'themes.php' == $pagenow && isset( $_GET['activated'] ) ){
        //需要注意的是模板名称是php文件的文件名哦
        themes_auto_add_pages('企業情報','company','page_company.php'); //企業情報
        themes_auto_add_pages('トップメッセージ','message','page_message.php'); //トップメッセージ
        themes_auto_add_pages('ミッション・バリュー','policy','page_company_policy.php'); //ミッション・バリュー
        themes_auto_add_pages('企業沿革','story','page_story.php'); //企業沿革
        themes_auto_add_pages('アクセス','access','page_map.php'); //アクセス
        themes_auto_add_pages('事業内容','service','page_service.php'); //事業内容
        themes_auto_add_pages('ニュース','news','page_news.php'); //ニュース
        themes_auto_add_pages('採用情報','recruit','page_recruit.php'); //採用情報
        themes_auto_add_pages('お問い合わせ','contact','page_contact.php'); //お問い合わせ
        themes_auto_add_pages('サイトマップ','sitemap','page_sitemap.php'); //サイトマップ
        themes_auto_add_pages('個人情報保護方針','privacy','page_privacy.php'); //お問い合わせ
    }  
}  
add_action( 'load-themes.php', 'custom_themes_auto_add_pages' );  



//自动创建分类
function my_theme_category_setup() {
    if( file_exists( ABSPATH . '/wp-admin/includes/taxonomy.php' ) ) :
        require_once( ABSPATH . '/wp-admin/includes/taxonomy.php' );

            if( ! category_exists( 'ニュース' ) ) :
                // カテゴリーを定義
                $my_cat = array(
                    'cat_name' => 'ニュース', 
                    'category_description' => '企業ニュース', 
                    'category_nicename' => 'latestnews', 
                    'category_parent' => '' );
                
                // カテゴリーを作成
                $my_cat_id = wp_insert_category( $my_cat );


            endif;// Category exists
            if( ! category_exists( 'リクルート' ) ) :

                $my_cat = array(
                    'cat_name' => 'リクルート', 
                    'category_description' => '企業採用情報', 
                    'category_nicename' => 'jobs', 
                    'category_parent' => '' );
                
                // カテゴリーを作成
                $my_cat_id = wp_insert_category( $my_cat );

            endif;// Category exists

    endif;// File exists 

}
add_action( 'after_setup_theme', 'my_theme_category_setup' );
//////////////////////////////////////////theme Custom End//////////////////////////////////////////////////////////


/**
 * 移除 WordPress 加载的JS和CSS链接中的版本号
 */
function version_remove_cssjs_ver( $src ) {
    if( strpos( $src,'ver=' ) )
        $src = remove_query_arg( 'ver',$src );
    return $src;
}
add_filter( 'style_loader_src','version_remove_cssjs_ver',999 );
add_filter( 'script_loader_src','version_remove_cssjs_ver',999 );

/**
 * 清除wordpress自带的meta标签
 */
function ashuwp_clean_theme_meta(){
  remove_action( 'wp_head','print_emoji_detection_script',7,1);
  remove_action( 'wp_print_styles','print_emoji_styles',10,1);
  remove_action( 'wp_head','rsd_link',10,1);
  remove_action( 'wp_head','wp_generator',10,1);
  remove_action( 'wp_head','feed_links',2,1);
  remove_action( 'wp_head','feed_links_extra',3,1);
  remove_action( 'wp_head','index_rel_link',10,1);
  remove_action( 'wp_head','wlwmanifest_link',10,1);
  remove_action( 'wp_head','start_post_rel_link',10,1);
  remove_action( 'wp_head','parent_post_rel_link',10,0);
  remove_action( 'wp_head','adjacent_posts_rel_link',10,0);
  remove_action( 'wp_head','adjacent_posts_rel_link_wp_head',10,0);
  remove_action( 'wp_head','wp_shortlink_wp_head',10,0);
  remove_action( 'wp_head','rest_output_link_wp_head',10,0);
  remove_action( 'wp_head','wp_oembed_add_discovery_links',10,1);
  remove_action( 'wp_head','rel_canonical',10,0);
}
add_action( 'after_setup_theme','ashuwp_clean_theme_meta' ); //清除wp_head带入的meta标签
function ashuwp_deregister_embed_script(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer','ashuwp_deregister_embed_script' ); //清除wp_footer带入的embed.min.js

/**
 * 替换Gavatar头像地址
 */
function get_ssl_avatar($avatar) {
    if (preg_match_all(
        '/(src|srcset)=["\']https?.*?\/avatar\/([^?]*)\?s=([\d]+)&([^"\']*)?["\']/i',
        $avatar,
        $matches
    ) > 0) {
        $url = 'https://secure.gravatar.com';
        $size = $matches[3][0];
        $vargs = array_pad(array(), count($matches[0]), array());
        for ($i = 1; $i < count($matches); $i++) {
            for ($j = 0; $j < count($matches[$i]); $j++) {
                $tmp = strtolower($matches[$i][$j]);
                $vargs[$j][] = $tmp;
                if ($tmp == 'src') {
                    $size = $matches[3][$j];
                }
            }
        }
        $buffers = array();
        foreach ($vargs as $varg) {
            $buffers[] = vsprintf(
            '%s="%s/avatar/%s?s=%s&%s"',
            array($varg[0], $url, $varg[1], $varg[2], $varg[3])
           );
        }
        return sprintf(
                '<img alt="avatar" %s class="avatar avatar-%s" height="%s" width="%s" />',
                implode(' ', $buffers), $size, $size, $size
            );
    } else {
        return false;
    }
}
add_filter('get_avatar', 'get_ssl_avatar');

/**
 * 防pingback攻击
 */
add_filter( 'xmlrpc_methods','remove_xmlrpc_pingback_ping' );
function remove_xmlrpc_pingback_ping( $methods ) {
    unset( $methods['pingback.ping'] );
    return $methods;
};

/**
 * 开启自定义菜单
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'nav' => 'MyCustomMenus'
    )
  );
}
add_action( 'init','register_my_menus' );

/**
 * 移除wp_nav_menu()多余的CSS选择器
 */
function uazoh_css_attributes_filter($var) {  
    return is_array($var) ? array() : '';  
}  
add_filter('nav_menu_css_class', 'uazoh_css_attributes_filter', 100, 1);  
add_filter('nav_menu_item_id', 'uazoh_css_attributes_filter', 100, 1);  
add_filter('page_css_class', 'uazoh_css_attributes_filter', 100, 1);

/**
 * 移除顶部工具条
 */
add_filter('show_admin_bar','__return_false');

/**
 * 文章统计
 */
function custom_the_views($post_id,$echo=true,$views='') {
    $count_key = 'views';  
    $count = get_post_meta($post_id,$count_key,true);  
    if ($count == '') {  
        delete_post_meta($post_id,$count_key);  
        add_post_meta($post_id,$count_key,'0');  
        $count = '0';  
    }  
    if ($echo)  
        echo number_format_i18n($count) . $views;  
    else  
        return number_format_i18n($count) . $views;  
}  
function set_post_views() {  
    global $post;  
    $post_id = $post->ID;  
    $count_key = 'views';  
    $count = get_post_meta($post_id,$count_key,true);  
    if (is_single() || is_page()) {  
        if ($count == '') {  
            delete_post_meta($post_id,$count_key);  
            add_post_meta($post_id,$count_key,'0');  
        } else {  
            update_post_meta($post_id,$count_key,$count + 1);  
        }  
    }  
}  
add_action('get_header','set_post_views');


/**
 * 去除分类链接
 */
add_action( 'load-themes.php', 'no_category_base_refresh_rules');
add_action('created_category','no_category_base_refresh_rules');
add_action('edited_category','no_category_base_refresh_rules');
add_action('delete_category','no_category_base_refresh_rules');
function no_category_base_refresh_rules() {
    global $wp_rewrite;
    $wp_rewrite -> flush_rules();
}

add_action('init','no_category_base_permastruct');
function no_category_base_permastruct() {
    global $wp_rewrite,$wp_version;
    if (version_compare($wp_version,'3.4','<')) {      // For pre-3.4 support      $wp_rewrite -> extra_permastructs['category'][0] = '%category%';
    } else {
        $wp_rewrite -> extra_permastructs['category']['struct'] = '%category%';
    }
}
// Add our custom category rewrite rules
add_filter('category_rewrite_rules', 'no_category_base_rewrite_rules');
function no_category_base_rewrite_rules($category_rewrite) {
    //var_dump($category_rewrite); // For Debugging
    $category_rewrite = array();
    $categories = get_categories(array('hide_empty' => false));
    foreach ($categories as $category) {
        $category_nicename = $category -> slug;
        if ($category -> parent == $category -> cat_ID)// recursive recursion
            $category -> parent = 0;
        elseif ($category -> parent != 0)
            $category_nicename = get_category_parents($category -> parent, false, '/', true) . $category_nicename;
        $category_rewrite['(' . $category_nicename . ')/(?:feed/)?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
        $category_rewrite['(' . $category_nicename . ')/page/?([0-9]{1,})/?$'] = 'index.php?category_name=$matches[1]&paged=$matches[2]';
        $category_rewrite['(' . $category_nicename . ')/?$'] = 'index.php?category_name=$matches[1]';
    }
    // Redirect support from Old Category Base
    global $wp_rewrite;
    $old_category_base = get_option('category_base') ? get_option('category_base') : 'category';
    $old_category_base = trim($old_category_base, '/');
    $category_rewrite[$old_category_base . '/(.*)$'] = 'index.php?category_redirect=$matches[1]';
    //var_dump($category_rewrite); // For Debugging
    return $category_rewrite;
}
// Add 'category_redirect' query variable
add_filter('query_vars', 'no_category_base_query_vars');
function no_category_base_query_vars($public_query_vars) {
    $public_query_vars[] = 'category_redirect';
    return $public_query_vars;
}
// Redirect if 'category_redirect' is set
add_filter('request', 'no_category_base_request');
function no_category_base_request($query_vars) {
    //print_r($query_vars); // For Debugging
    if (isset($query_vars['category_redirect'])) {
        $catlink = trailingslashit(get_option('home')) . user_trailingslashit($query_vars['category_redirect'], 'category');
        status_header(301);
        header("Location: $catlink");
        exit();
    }
    return $query_vars;
}

/**
 * 上传文件重命名
 */
function git_upload_filter($file) {
    $time = date("YmdHis");
    $file['name'] = $time . "" . mt_rand(1,100) . "." . pathinfo($file['name'],PATHINFO_EXTENSION);
    return $file;
}
add_filter('wp_handle_upload_prefilter','git_upload_filter');

//disable srcset on images
function disable_srcset( $sources ) {
return false;
}
add_filter( 'wp_calculate_image_srcset','disable_srcset' );



function focus_page_navi() {
    $p = 3;
    if ( is_singular() ) return;
    global $wp_query, $paged;
    $max_page = $wp_query->max_num_pages;
    if ( $max_page == 1 ) return; 
   echo "<ul class=\"page_navi\">\n";
    if ( empty( $paged ) ) $paged = 1;
    echo '<li class="prev">'; previous_posts_link('前へ'); echo '</li>';
    if ( $paged > $p + 1 ) _paging_link( 1, '<li class="prev" >最初</li>' );
    if ( $paged > $p + 2 ) echo "<li><span>···</span></li>";
    for( $i = $paged - $p; $i <= $paged + $p; $i++ ) { 
        if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<li class=\"current\"><span>{$i}</span></li>" : _paging_link( $i );
    }
    if ( $paged < $max_page - $p - 1 ) echo "<li><span> ... </span></li>";
    echo '<li class="next">'; next_posts_link('次へ'); echo '</li>';
    echo '</ul>';
}

function _paging_link( $i, $title = '' ) {
    if ( $title == '' ) $title = "第 {$i} 页";
    echo "<li><a href='", esc_html( get_pagenum_link( $i ) ), "'>{$i}</a></li>";
}



/**
 * 禁用 WordPress 4.4+ 的响应式图片功能及缩略图裁剪的所有功能
 */
function zg_disable_wp_tailoring( $sizes ){
    unset( $sizes[ 'thumbnail' ]);//缩略图大小
    unset( $sizes[ 'medium' ]);//中等大小
    unset( $sizes[ 'medium_large' ] );//自动生成的768图片选项
    unset( $sizes[ 'large' ]);//大尺寸
    unset( $sizes[ 'full' ] );//全尺寸
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced','zg_disable_wp_tailoring' );


function get_archives_by_year( $args = '' ) {
  global $wpdb, $wp_locale;
  $defaults = array (
    'post_type' => 'post', //投稿タイプ
    'limit' => '',
    'format' => 'html',
    'before' => '',
    'after' => '',
    'show_post_count' => false,
    'echo' => 1
  );
  $parse = wp_parse_args( $args, $defaults );
  extract ( $parse, EXTR_SKIP );
  if ( '' != $limit ) {
    $limit = absint( $limit );
    $limit = ' LIMIT ' . $limit;
  }
  $arcresults = (array) $wpdb->get_results(
    "SELECT YEAR(ADDDATE(post_date, INTERVAL -3 MONTH)) AS `year`, COUNT(ID) AS `posts`
    FROM $wpdb->posts
    WHERE post_type = '$post_type' AND post_status = 'publish'
    GROUP BY YEAR(ADDDATE(post_date, INTERVAL -3 MONTH))
    ORDER BY post_date DESC
    $limit"
  );
  return $arcresults;
}



/**
 * 只搜索文章标题
 */
function wp_search_by_title( $search,$wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;
        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';
        $search = array();
        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s",$n . $wpdb->esc_like( $term ) . $n );
        if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''";
        $search = ' AND ' . implode( ' AND ',$search );
    }
    return $search;
}
add_filter( 'posts_search','wp_search_by_title',10,2 );

/**
 * 搜索结果排除所有页面
 */
function search_filter_page($query) {
    if ($query->is_search) {
        $query->set('post_type','post');
    }
    return $query;
}
add_filter('pre_get_posts','search_filter_page');


?>
