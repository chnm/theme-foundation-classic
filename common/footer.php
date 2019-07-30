        </div><!-- end content -->

    </div><!-- end wrap -->


    <footer role="contentinfo">

        <div id="footer-text">
            <?php if ($footerText = get_theme_option('Footer Text')): ?>
            <?php echo $footerText; ?>
            <?php else: ?>
            <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>
            <?php endif; ?>
            
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
        </div>

        <?php fire_plugin_hook('public_footer', array('view' => $this)); ?>

    </footer><!-- end footer -->

    <script type="text/javascript">
    jQuery(document).ready(function () {
        Omeka.skipNav();
        jQuery(document).foundation();

        jQuery('#resource-list').masonry({
          itemSelector: '#resource-list .card',
        });
    });
    </script>

</body>
</html>
