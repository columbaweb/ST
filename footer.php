<footer>
   <div class="container">
      <div class="row">
         <div class="span4">
            <h2>Sign Up To Our Newsletter</h2>
            <p class="desc">Maecenas pellentesque dignissim sapien vel vulputate. Integer et massa vitae quam sagittis venenatis</p>
            <form method="get" id="newsletter" action="<?php bloginfo('url'); ?>/">
	       <input type="text" name="sss" id="sss" value="email:" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
	       <input type="submit" id="subsribe" value="Subscribe!" />
	    </form>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?><?php endif; ?>
         </div>
         <div class="span2">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?><?php endif; ?>
         </div>
         <div class="span3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?><?php endif; ?>
         </div>
         <div class="span3">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?><?php endif; ?>
         </div>
      </div>
   </div>
   
 <div id="footer-copy">
    <div class="container">
      <div class="row">
         <p class="span6">© <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. <a href="http://www.reynoldsdigital.com">Web design</a> by Reynolds Digital</p>
         <div class="span6">
            <?php wp_nav_menu( array( 'theme_location' => 'footnav' ) ); ?>
         </div>
      </div>
   </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>