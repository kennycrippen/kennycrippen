	</div><!-- #main -->
	</div><!-- #container -->
	<div id="footer">
			<p>&copy; Copyright 2015 Kenny Crippen. I get by with a little help from my <a href="friends">friends</a>.</p>
	</div><!-- #footer -->
<!-- Tell WP this is the footer -->
<?php wp_footer(); ?>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php  echo get_template_directory_uri(); ?>/js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="<?php  echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  <!--   Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5193722-11', 'kennycrippen.com');
  ga('send', 'pageview');

  </script>
</body>
</html>
