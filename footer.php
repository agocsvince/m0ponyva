    <?php include get_theme_file_path( '/includes/footersection.php' ); ?>
    <?php include get_theme_file_path( '/includes/backtotop.php' ); ?>
    <!-- ====== All Scripts -->

    <script src="<?php bloginfo('template_url') ?>/assets/js/main.js"></script>
    <?php if (is_home()) { include get_theme_file_path( '/includes/home-scripts.php' ); }?>
    
    <?php wp_footer(); ?>
</body>

</html>