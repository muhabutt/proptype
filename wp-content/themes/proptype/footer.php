<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col">
	            <div class="d-block d-md-flex justify-content-between align-items-center">
		            <ul class="list-style-none d-md-flex justify-content-center align-items-center">
			            <li class="list-item">
				            <span class="nav-link text-break">
		                        Copyright:© <?php echo date( "Y" ); ?>:<a class="color-white pl-1 text-break "
		                                                                  href="https://www.proptype.com">www.proptype.com</a>
	                        </span>
			            </li>
		            </ul>

		            <?php
		            wp_nav_menu(
			            array(
				            'menu'           => 'secondary_menu',
				            'container'      => '<ul></ul>',
				            'theme_location' => 'primary_menu',
				            'items_wrap'     => '<ul id="footer-nav" class="d-md-flex justify-content-center align-items-center">%3$s</ul>'
			            )
		            );
		            ?>
	            </div>
            </div>
        </div>
    </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Vendor JS Files -->
<?php wp_footer() ?>

</body>

</html>
