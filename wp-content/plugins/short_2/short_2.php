<?php
    /**
     * Plugin name: Short_2
     * Description: structure d'extension utilisant plusieurs dossiers et permettant d'afficher une adresse
     * Author: 
     * Plugin URI: https://github.com/Carolanne
     */

    function sh2_31w_enqueue(){
        // définir la version des scripts
        $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
        $version_js = filemtime(plugin_dir_path(__FILE__) . "script/message.js"); 

        wp_enqueue_style('sh2_31w_css', plugin_dir_url(__FILE__, "/style.css"), array(), $version_css);
        wp_enqueue_script('sh2_31w_hjs', plugin_dir_url(__FILE__, "/script/message.js"), array(), $version_js, true);
    }
add_action('wp_enqueue_scripts', 'sh2_31w_enqueue');

function genere_adresse(){
       ///////////////////HTML
       $contenu =  '<code class="code__adresse">';
       $contenu .= '3 800, rue Sherbrooke Est Montréal (Québec) H1X 2A2 | 514 254-7131';
         /////////////////////CSS
       $contenu .= '</code>';
       $contenu .= '<button id="mon_bouton">OK</button>';
       return $contenu;
   }
   
   add_shortcode('adr','genere_adresse');
   
   
