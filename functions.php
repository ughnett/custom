<?php

/**
 * Theme customizations
 *
 * @package	Custom
 * @author	Annette Ruchala
 * @link	https://github.com/ughnett/Custom
 * @copyright	Copyright (c) 2018, Annette Ruchala
 * @license	GPL-2.0+
 */

add_action( 'Genesis_setup', 'custom_setup',15);

  // Load child theme textdomain.
load_child_theme_textdomain( 'custom' );

function custom_setup(){}