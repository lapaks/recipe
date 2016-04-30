<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="<?php echo the_title(); ?>"/>
<meta property="og:description" content="<?php echo $excerpt; ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php echo the_permalink(); ?>"/>
<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
<meta property="og:image" content="<?php echo $img_src; ?>"/>

<meta property="og:url" 		content='<?php while ( have_posts() ) : the_post(); the_excerpt(); endwhile; ?>'/>
<meta property="og:title" 		content='<?php the_title(); ?>'/>
<meta property="og:description" content='<?php echo get_the_twitter_excerpt();?>'/>
<meta property="og:image" 		content='<?php the_post_thumbnail();?>'/>
<meta property="og:site_name" 	content='<?php echo get_bloginfo(); ?>'/>
<meta property="og:type" 		content="website"/>

<title>Pattake's Recipes</title>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" media="screen" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pattake.min.css"  type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" defer></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body>
