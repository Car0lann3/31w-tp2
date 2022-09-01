<?php
/**
 * Plugin Name: short_1
 * Author:
 * Description: Une premier exemple d'extension utilisant shortcode
 *Author URI: 
 */ 
function genere_adresse() {
    /////////////////////CSS
    $contenu = '<style>
            .code__adresse {
                margin: 10px;
                padding: 10px;
                color: red;
            }
    </style>';
    ///////////////////HTML
    $contenu .=  '<code class="code__adresse">';
    $contenu .= '3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131';
      /////////////////////CSS
    $contenu .= '</code>';
    $contenu .= '<button id="mon_bouton">click</button>';
    ///////////////////////SCRIPT
    $contenu .= "<script>
    (function() {
        let elmOk = document.querySelector('#mon_bouton');

        elmOk.addEventListener('mousedown', function() {
            console.log('Brave fonctionne')
        });
    })();
    </script>";
    return $contenu;
}

add_shortcode('adresse','genere_adresse');

