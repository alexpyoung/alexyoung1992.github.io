<?php

/*

EXAMPLE
Current URL: /path/to/file/index.php
Output: 'index.php'

*/

function get_current_page_name() {
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

?>