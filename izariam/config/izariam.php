<?php
/*
 * Project: iZariam
 * File: izariam/config/izariam.php & install/include/izariam.php & install/include/izariam.tpl
 * Edited: 08/03/2105
 * By: OnABox
 * Info: izariam@onapi.co.za
 */
/*
 * Game name
 */
$config['game_name'] = 'iZariam';

/*
 * Game worlds
 * Put true if in you database you have the same prefix (alpha_users or beta_users)
 */
$config['alpha'] = true;
$config['beta'] = true;
$config['chi'] = true;
$config['delta'] = true;
$config['epsilon'] = true;
$config['eta'] = true;
$config['gamma'] = true;
$config['kappa'] = true;
$config['lambda'] = true;
$config['lota'] = true;
$config['my'] = true;
$config['ny'] = true;
$config['omikron'] = true;
$config['phi'] = true;
$config['pi'] = true;
$config['psi'] = true;
$config['rho'] = true;
$config['sigma'] = true;
$config['tau'] = true;
$config['theta'] = true;
$config['xi'] = true;
$config['ypsilon'] = true;
$config['zeta'] = true;

/*
 * Universe array
 * Only put if you have the world tables in the database
 * Examples:
 * array('alpha');
 * array('alpha', 'beta');
 */
$config['uni_array'] = array('alpha', 'beta', 'chi', 'delta', 'epsilon', 'eta', 'gamma', 'kappa', 'lambda', 'lota', 'my', 'ny', 'omikron', 'phi', 'pi', 'psi', 'rho', 'sigma', 'tau', 'theta', 'xi', 'ypsilon', 'zeta'); // Only put if you have the world tables in the database

/*
 * Game version
 */
$config['game_version'] = '0.1.0';
$config['working_version'] = '0.0.1';
$config['new_version'] = '0.4.5';

/*
 * URLs
 */
$config['style_url'] = 'http://izariam.onapi.co.za/design/';   // URL - skin
$config['style_version'] = $config['working_version'];  // Skin version
$config['script_url'] = 'http://izariam.onapi.co.za/design/';  // URL - scripts
$config['script_version'] = $config['working_version']; // Scripts version
$config['forum_url'] = 'http://forum.onapi.co.za/categories/izariam';    // URL - forum

/*
 * Designs
 */
$config['easter'] = false;                           // Easter design
$config['winter'] = false;                           // Winter design
$config['christmas'] = false;                        // Christmas design
$config['halloween'] = false;                        // Halloween design
$config['design_4'] = TRUE;                          // 0.4.5 design

/*
 * Mail config
 */
$config['game_email'] = true;                       // To resolve sending of letters (Adjust SMTP)
$config['email_from'] = 'izariam@onapi.co.za';            // The address from which the letter comes

/*
 * Safe
 */
$config['double_login'] = false;                     // Multi-Accounting check

/*
 * Game options
 */
$config['standart_capacity'] = 3000;                 // Default storage capacity
$config['transport_capacity'] = 2500;                 // Default cargo capacity
$config['town_queue_size'] = 9;                      // Buildings - construction list size
$config['army_queue_size'] = 9;                      // Army -  construction list size
$config['notes_default'] = 200;                      // Notes length
$config['notes_premium'] = 8192;                     // Premium notes length
$config['trade_route_time'] = 6048;                // Duration of a trading route in seconds

/*
 * News
 */
$config['head_news'] = 'Welcome to ' . $config['game_name'] . '!';

/*
 * Others
 */
$config['happyhour'] = false;
$config['happyhour_duration'] = 3600*60*1;
/*
 * Footer analytics code
 */
$config['analytics'] = '';
?>
