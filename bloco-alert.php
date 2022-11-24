<?php
/**
 * Plugin Name: Bloco Alert
 * Description: Criação do primeiro bloco para o Gutemberg
 * Version: 1.0
 * Author: Tiago Bernardes
 * Author URI: https://tiagobernardes.com.br
 */
 
defined( 'ABSPATH' ) || exit;
 
function init_bloco_teste() {
	// JavaScript do  editor.
	wp_register_script(
		'bloco-alert',
		plugins_url( 'bloco-alert.js', __FILE__ ),
		array( 'wp-blocks', 'wp-element', 'wp-editor' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'bloco-alert.js' )
	);
 
	// CSS do front e editor.
	wp_register_style(
		'bloco-alert',
		plugins_url( 'front.css', __FILE__ ),
		array(),
		filemtime( plugin_dir_path( __FILE__ ) . 'front.css' )
	);
 
	// CSS do editor.
	wp_register_style(
		'bloco-alert-editor',
		plugins_url( 'editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
 
	// Registro do bloco.
	register_block_type(
		'bloco-alert/bloco-alert',
		array(
			'style'         => 'bloco-alert',
			'editor_style'  => 'bloco-alert-editor',
			'editor_script' => 'bloco-alert',
		)
	);
}
add_action( 'init', 'init_bloco_teste' );