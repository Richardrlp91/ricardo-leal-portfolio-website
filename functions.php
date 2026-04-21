<?php
/**
 * Ricardo Leal Portfolio functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'ricardo_leal_enqueue_styles', 10 );
function ricardo_leal_enqueue_styles() {
    // Carga el estilo del tema padre (GeneratePress)
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    // Carga el estilo de este tema hijo
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ), '1.0.0' );
}

// Script para el Toggle de Modo Oscuro/Claro
add_action('wp_footer', function() {
    ?>
    <script>
        const toggleBtn = document.getElementById('theme-toggle');
        const body = document.body;
        const currentTheme = localStorage.getItem('theme');

        // Verificar preferencia guardada
        if (currentTheme === 'light') {
            body.classList.add('light-mode');
        }

        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                body.classList.toggle('light-mode');
                
                let theme = 'dark';
                if (body.classList.contains('light-mode')) {
                    theme = 'light';
                }
                localStorage.setItem('theme', theme);
            });
        }
    </script>
    <?php
});