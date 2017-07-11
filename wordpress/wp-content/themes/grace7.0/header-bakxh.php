<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if( suxingme('suxingme_dis_seo', true ) ) : include('includes/modules/seo.php'); endif; ?>
<?php if( suxingme( 'suxingme_favicon', true ) ) { ?>
<link rel="shortcut icon" href="<?php echo suxingme( 'suxingme_favicon', '' ); ?>" type="image/x-icon" >
<?php } else { ?>
<link rel="Shortcut Icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" type="image/x-icon" />
<?php }?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE;chrome=1">
<?php wp_head(); ?>
</head>
<body

<?php body_class( suxingme_bodyclass() ); ?>>
<!--
<div id="header" class=" navbar-fixed-top zdyindexwrap">
	<div class="container">
		<h1 class="logo">
			<a  href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" style="background-image: url(<?php if( suxingme('suxingme_logo') ) { echo suxingme('suxingme_logo'); }else{
				echo get_template_directory_uri() . '/img/logo.png'; }?>);"/>

			</a>
		</h1>
		<?php
			if(!wp_is_mobile()):
		?>
		<div role="navigation"  class="site-nav  primary-menu">
			<div class="menu-fix-box">
				 <?php if ( function_exists( 'wp_nav_menu' ) && has_nav_menu('top-nav') ) {
					wp_nav_menu(
								array(
										'theme_location'   => 'top-nav',
										'sort_column'	   => 'menu_order',

										'fallback_cb' => 'cmp_nav_fallback',
										'container' => false,
										'menu_id' =>'menu-navigation',
										'menu_class' =>'menu',
									)
							);
				?>
				 <?php } else { ?>
					<ul id="menu-navigation" class="menu">
					<li>请到[后台->外观->菜单]中设置菜单。</li>
					</ul><!-- topnav end -->
				<?php } ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="right-nav">
			<?php
				if(!wp_is_mobile() && suxingme('suxingme_top_g',false) ):
			?>
				<div class="js-toggle-message">
				    <button id="sitemessage" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    	<i class="icon-megaphone"></i>
                        <?php
                            $arg1 = array(
                                'ignore_sticky_posts' => 1,
                                'showposts' => 1,
                                'cat' => suxingme('suxingme_top_g_cat'),
                            );
                            $g_query1 = new WP_Query( $arg1 );
                            if( $g_query1->have_posts() ):
                                while( $g_query1->have_posts() ):
                                    $g_query1->the_post();
                                    $time = get_the_time('Y-m-d H:i:s');
                                    $now_time = date('Y-m-d H:i:s');
                                    $point_time = suxingme('suxingme_top_g_red',1);
                                    $second1 = strtotime($time);
                                    $second2 = strtotime($now_time);
                                    if ($second1 < $second2) {
                                        $tmp = $second2;
                                        $second2 = $second1;
                                        $second1 = $tmp;
                                    }
                                    $diff = ($second1 - $second2) / 86400;
                                    if( $diff < $point_time ):
                                        echo '<span class="red-tips"></span>';
                                    endif;
                                endwhile;
                                wp_reset_query();
                            endif;
                        ?>
					</button>
					<div class="dropdown-menu" role="menu" aria-labelledby="sitemessage">
						<ul>
							<?php
								$arg = array(
									'ignore_sticky_posts' => 1,
									'showposts' => suxingme('suxingme_top_g_cat_num',5),
									'cat' => suxingme('suxingme_top_g_cat'),
								);
								$g_query = new WP_Query( $arg );
								$i = 1;

								$firstclass = '';
								if( $g_query->have_posts() ):
									while( $g_query->have_posts() ):
										$g_query->the_post();
										if( $i == 1 ):
											$firstclass = ' class="first"';
										else :
											$firstclass = '';
										endif;
										echo '<li'.$firstclass.'><span class="time">'.substr_replace(get_the_time('Y.m.d'),'',0,2).'</span><a target="_blank" href="'.get_permalink().'">'.get_the_title().'</a></li>';
										$i++;
									endwhile;
									wp_reset_query();
								else :
									echo '<li>暂无通知。</li>';
								endif;

							?>
					    </ul>
					    <div class="more-messages"><a target="_blank" href="<?php echo get_category_link(suxingme('suxingme_top_g_cat')); ?>">更多</a></div>
					</div>
				</div>
			<?php endif; ?>
			<button class="js-toggle-search"><i class=" icon-search"></i></button>
		</div>

		<?php
			if(wp_is_mobile()):
		?>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              	<span class="icon-bar"></span>
              	<span class="icon-bar"></span>
              	<span class="icon-bar"></span>
            </button>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
		            <?php if ( function_exists( 'wp_nav_menu' ) && has_nav_menu('mobile-nav') ) { wp_nav_menu(
						array(
								'theme_location'   => 'mobile-nav',
								'depth'           => 2,
								'fallback_cb' => 'cmp_nav_fallback',
								'container' => false,
								'items_wrap' => '%3$s',
								'menu_class' =>'menu',
							)
						);
					?>
					<?php } else { ?>
						<li><a href="#">请到[后台->外观->菜单]中设置菜单。</a></li>
					<?php } ?>
			    </ul>
			</div>
			<div class="body-overlay"></div>
   		<?php endif; ?>
	</div>
</div>
-->

<!-- Navigation Bar-->
<header id="topnav">
    <div class="container">
        <!-- Logo container-->
        <div class="logo">
            <a href="index.html">
                <img class="logo-light" src="/viewfin/images/logo_light.png" alt="">
                <img class="logo-dark" src="/viewfin/images/logo_dark.png" alt="">
            </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item toggle-nav">
                <!-- Mobile menu toggle-->
                <a class="menu-toggle" href="#" onclick="$('#navigation').toggle();if($(this).hasClass('is-active')){$(this).removeClass('is-active');}else{$(this).addClass('is-active');}">
                    <div class="toggle-inner"></div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <div id="navigation">
            <ul class="navigation-menu nav">
                <li><a href="/" onclick="$('#navigation').toggle()" data-scroll="true">Home</a>
                </li>
                <li><a href="#tm" onclick="$('#navigation').toggle()" data-scroll="true">The Metaverse</a>
                </li>
                <li><a href="#tme" onclick="$('#navigation').toggle()" data-scroll="true">The Ecosystem</a>
                </li>
                <li><a href="#tmw" onclick="$('#navigation').toggle()" data-scroll="true">The Wallet</a>
                </li>
                <li><a href="#team" onclick="$('#navigation').toggle()" data-scroll="true">Team</a>
                </li>
                <li><a href="http://192.168.1.35/viewfinblog/" onclick="$('#navigation').toggle()" data-scroll="true">blog</a>
                </li>
                <li><a href="http://192.168.1.35/news/" onclick="$('#navigation').toggle()" data-scroll="true">news</a>
                 </li>
            </ul>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->

