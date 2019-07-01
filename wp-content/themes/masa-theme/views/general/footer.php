<footer class="footer">
    
    <div class="footer__contenedor">
        <div class="grid__container">
            <?php
                wp_nav_menu(array(
                    'menu'           => "main",
                    'theme_location' => 'footer_menu',
                    'menu_class'     => 'lista',
                ));
            ?>
        </div>
        
    </div>
</footer>