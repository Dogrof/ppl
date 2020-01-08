<?php

add_action('wp_enqueue_scripts', 'plusppl_style');

function plusppl_style(){

			wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', [] );

			wp_enqueue_script('jq', get_template_directory_uri() . '/assets/js/jquery.min.js', [], '2.2', true );
			wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jq'], '2.2', true );
			wp_enqueue_script('js', get_template_directory_uri() . '/assets/js/js.js', ['jq','slick'], '2.2', true ); 
	}



	function plusPpl_img($path){
		$base = get_template_directory_uri() . '/assets';
		echo $base . $path;
	}



















































?>