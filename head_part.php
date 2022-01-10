<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>
    <?php if (is_home()) {
        bloginfo('name');
        echo " - ";
        bloginfo('description');
    } elseif (is_category()) {
        single_cat_title();
        echo " - ";
        bloginfo('name');
    } elseif (is_single() || is_page()) {
         bloginfo('name');
        echo " - ";
        single_post_title();
    } elseif (is_search()) {
        bloginfo('name');
        echo " - ";
        echo "Search result";
    } elseif (is_404()) {
        bloginfo('name');
        echo " - ";
        echo 'Not Found !';
    } else {
        wp_title('',true);
    }
    ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="株式会社クーセントの公式企業サイトです。" />
    <meta name="keywords" content="Kucent,株式会社クーセント" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/favicon.ico'; ?>" />

    <?php wp_head();?>

</head>
