  <footer class="footer cf" role="contentinfo">

    <div>
		<p>24/7 Service: <?php echo $site->phone() ?></p>
    	<ul>
    		<li><a href="#">Jobs</a></li>
    		<li><a href="#">Client Login</a></li>
    		<li><a href="#">B4 Boots</a></li>
    	</ul>
      	<?php echo $site->copyright()->kirbytext() ?>
    </div>

	<div class="social">
		<ul>
			<li><a href="<?php echo $site->twitter() ?>">Twitter</a></li>
			<li><a href="<?php echo $site->facebook() ?>">Facebook</a></li>
			<li><a href="<?php echo $site->linkedin() ?>">LinkedIn</a></li>
			<li><a href="<?php echo $site->youtube() ?>">Youtube</a></li>
		</ul>
	</div>
  </footer>

</body>
</html>