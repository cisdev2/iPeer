<?php
$output = "<p style=\"background:#DBA941;padding:4px;font-size: 16px;\">Your database configuration file is <?php echo  file_exists(CONFIGS.'database.php') ?' present.' . \$filePresent = ' ' : ' not present.'; ?></p>\n";
$output .= "<?php if (!empty(\$filePresent)):?>\n";
$output .= "<?php \$db = ConnectionManager::getInstance(); ?>\n";
$output .= "<?php \$connected = \$db->getDataSource('default'); ?>\n";
$output .= "<p style=\"background:#DBA941;padding:4px;font-size: 16px;\">Cake<?php echo \$connected->isConnected() ? ' is able to' : ' is not able to';?> connect to the database.</p>\n";
$output .= "<br />\n";
$output .= "<?php endif; ?>\n";
$output .= "<h1>CakePHP just \"Baked\" your application: ".Inflector::humanize($app)."</h1>\n";
$output .= "<h2>Editing this Page</h2>\n";
$output .= "<p>\n";
$output .= "To change the content of this page, edit: ".$dir.DS."views".DS."pages".DS."home.tpl.php.<br />\n";
$output .= "To change its layout, edit: ".$dir.DS."views".DS."layouts".DS."default.tpl.php.<br />\n";
$output .= "You can also add some CSS styles for your pages at: ".$dir.DS."webroot/css/.\n";
$output .= "</p>\n";
?>