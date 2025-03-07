<?php do_action( 'bp_before_sidebar' ); ?>

<!--div id="sidebar22" class="sidebar col-xs-3 hidden-sm hidden-xs" role="complementary"-->
<div id="sidebar_blog" class="sidebar col col-xs-3 col-md-3 hidden-xs" role="complementary">
	<div class="padder">

	<?php do_action( 'bp_inside_before_sidebar' ); ?>

	<?php if ( is_user_logged_in() ) : ?>

		<?php do_action( 'before_sidebar' ); ?>

		<div id="sidebar-me">
			<a href="<?php echo bp_loggedin_user_domain(); ?>">
				<?php bp_loggedin_user_avatar( 'type=thumb&width=80&height=80' ); ?>
			</a>

			<h4><?php echo bp_core_get_userlink( bp_loggedin_user_id() ); ?></h4>
			<a class="button logout" href="<?php echo wp_logout_url( wp_guess_url() ); ?>"><?php _e( 'Log Out', 'buddypress' ); ?></a>

			<?php do_action( 'bp_sidebar_me' ); ?>
		</div>

		<?php do_action( 'bp_after_sidebar_me' ); ?>

		<?php if ( bp_is_active( 'messages' ) ) : ?>
			<?php bp_message_get_notices(); /* Site wide notices to all users */ ?>
		<?php endif; ?>

	<?php else : ?>

		<?php #do_action( 'bp_before_sidebar_login_form' ); ?>

		<?php if ( bp_get_signup_allowed() ) : ?>
		
			<p id="login-text">

				<?php printf( __( 'Please <a href="%s" title="Create an account">create an account</a> to get started.', 'buddypress' ), bp_get_signup_page() ); ?>

			</p>

		<?php endif; ?>

		<form name="login-form" id="sidebar-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ); ?>" method="post">
			<label><?php _e( 'Username', 'buddypress' ); ?><br />
			<input type="text" name="log" id="sidebar-user-login" class="input" value="<?php if ( isset( $user_login) ) echo esc_attr(stripslashes($user_login)); ?>" tabindex="97" /></label>

			<label><?php _e( 'Password', 'buddypress' ); ?><br />
			<input type="password" name="pwd" id="sidebar-user-pass" class="input" value="" tabindex="98" /></label>

			<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="sidebar-rememberme" value="forever" tabindex="99" /> <?php _e( 'Remember Me', 'buddypress' ); ?></label></p>

			<?php do_action( 'bp_sidebar_login_form' ); ?>
			<?php do_action( 'wordpress_social_login' ); ?>
			<input type="submit" class="button btn btn-black" name="wp-submit" id="sidebar-wp-submit" value="<?php _e( 'Log In', 'buddypress' ); ?>" tabindex="100" />

			<input type="hidden" name="testcookie" value="1" />
		</form>

		 
		<?php do_action( 'bp_after_sidebar_login_form' ); ?>

	<?php endif; ?>

	<?php /* Show forum tags on the forums directory */
	if ( bp_is_active( 'forums' ) && bp_is_forums_component() && bp_is_directory() ) : ?>
		<div id="forum-directory-tags" class="widget tags">
			<h3 class="widgettitle"><?php _e( 'Forum Topic Tags', 'buddypress' ); ?></h3>
			<div id="tag-text"><?php bp_forums_tag_heat_map(); ?></div>
		</div>
	<?php endif; ?>

		



	<?php do_action( 'bp_inside_after_sidebar' ); ?>
	

	<?php show_lang_options(true); ?>

	<?php show_most_recent_task(); ?>

	<?php
	global $reverter_filtro_de_categoria_pra_forcar_funcionamento;
	$reverter_filtro_de_categoria_pra_forcar_funcionamento = true;

	#if(gethostname()=="note-samsung")
	#echo do_shortcode('[product id="4530"]');  

	//global $reverter_filtro_de_categoria_pra_forcar_funcionamento;
	$reverter_filtro_de_categoria_pra_forcar_funcionamento = false;
	//unset($reverter_filtro_de_categoria_pra_forcar_funcionamento);
	?>
	<?php
	/*global $reverter_filtro_de_categoria_pra_forcar_funcionamento;
	$reverter_filtro_de_categoria_pra_forcar_funcionamento = true;
	 do_shortcode('[recent_products per_page="12" columns="4"]');  ?>
	<?php do_shortcode('[recent_products per_page="12" columns="4"]');  ?>	
	<?php do_shortcode('[product id="3966"]');*/  ?>

	<h3 class="widget-title">Apoie-nos</h3>
	<?php echo do_shortcode('[product id="5160"]'); ?>
	
	<?php #dynamic_sidebar( 'blog' ); ?>
	<?php the_widget('WP_Widget_Recent_Posts', 'title=Posts Recentes');  ?>

		</div><!-- .padder -->
</div><!-- #sidebar -->

<?php do_action( 'bp_after_sidebar' ); ?>