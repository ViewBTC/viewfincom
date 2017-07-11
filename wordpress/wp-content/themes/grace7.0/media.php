<?php /* Template Name: media page */ ?>
<?php get_header(); ?>
   <link rel="stylesheet" href="/viewfin/css/bundle.css">
     <!-- <link rel="stylesheet" href="/viewfin/css/hody-icons.css">-->
<style type="text/css">
    #header{
            z-index: 9999 !important;
    }
</style>
  <!--<link rel="stylesheet" href="/viewfin/css/font-awesome.min.css">-->

<!--
    <script type="text/javascript" src="/viewfin/js/jquery.js"></script>
    <script type="text/javascript" src="/viewfin/js/bundle.js"></script>
    <script type="text/javascript" src="/viewfin/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="/viewfin/js/main.js"></script>
    <script type="text/javascript" src="/viewfin/js/w3.js"></script>
    <script>
        w3.includeHTML();
    </script>

     -->
<!--
<div id="page-content" >
	<div class="container">
		<div class="row">
			<div class="article  col-xs-12 col-sm-8 col-md-8">
				<div class="post page">
					<?php if(have_posts()): while(have_posts()):the_post();  ?>
					<div class="post-title">
						<?php the_tags('<div class="post-entry-categories">','','</div>'); ?>
						<h1 class="title"><?php the_title(); ?></h1>
					</div>
					<div class="post-content">
						<div class="item-intro-content">
							<?php if(has_excerpt()): ?>
								<p class="post-abstract">
								<span class="abstract-tit">摘要：</span>
								<?php echo get_the_excerpt(); ?>
								</p>
							<?php endif;?>
							<?php the_content();?>
						</div>

					</div>
				</div>
				<div class="clear"></div>
				<?php if (comments_open()) comments_template( '', true ); endwhile;  endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
-->

<!-- <!DOCTYPE html>

<html lang="en">

<head>
    <title>Viewfin,the new reality is comming</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="viewfin, blockchain, metaverse, avatar, oracle, smart property, eric gu, fintech">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" href="/viewfin/css/bundle.css">
    <link rel="stylesheet" href="/viewfin/css/hody-icons.css">
    <link rel="stylesheet" href="/viewfin/css/style.css"> -->

    <!--<link rel="stylesheet" href="/viewfin/css/font-awesome.min.css">-->


    <!--[if lt IE 9]->
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- </head>

<body> -->
    <!-- Preloader-->
    <!-- <div id="loader">
        <div class="centrize">
              <div class="v-center">
                <div id="mask">
                    <span></span>
                </div>
            </div>
        </div>
    </div>-->
    <!-- End Preloader-->
    <!-- <div w3-include-html="top.html"></div>-->


<section id="newsNmedia">
    <div class="container">
        <div class="title center">
            <h2>Metaverse BlockChain</h2>

        </div>

        <div class="col-md-12">

            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img1.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img2.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img3.jpg" style="width:100%">
            </div>

            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img4.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img5.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img6.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img7.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img8.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img9.jpg" style="width:100%">
            </div>
            <div class="col-md-4 col-sm-6  col-xs-12" style="padding:5px;">
                <img src="/viewfin/images/media/img10.jpg" style="width:100%">
            </div>
        </div>
    </div>


</section>


<!-- -->

    <script type="text/javascript" src="/viewfin/js/jquery.js"></script>
    <script type="text/javascript" src="/viewfin/js/bundle.js"></script>
    <script type="text/javascript" src="/viewfin/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="/viewfin/js/main.js"></script>
    <script type="text/javascript" src="/viewfin/js/w3.js"></script>
    <script>
        w3.includeHTML();
    </script>


<!-- 
</body>
ƒ




</html> -->
<!-- -->
<?php get_footer(); ?>


