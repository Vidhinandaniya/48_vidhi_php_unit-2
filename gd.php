<?php
if(extension_loaded('gd')&&
function_exists('gd_info'))
{
echo "gd installed";
}
else
{
echo "gd not installed";
}
echo phpinfo();
?>
