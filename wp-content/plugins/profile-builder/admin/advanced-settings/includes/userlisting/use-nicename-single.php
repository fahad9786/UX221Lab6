<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

add_filter('wppb_userlisting_get_user_by_id', '__return_false');
