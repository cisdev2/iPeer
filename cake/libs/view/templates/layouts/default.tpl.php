<?php
/* SVN FILE: $Id: default.tpl.php,v 1.3 2006/06/20 18:46:44 zoeshum Exp $ */

/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright (c)	2006, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright (c) 2006, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package			cake
 * @subpackage		cake.cake.libs.view.templates.pages
 * @since			CakePHP v 0.10.0.1076
 * @version			$Revision: 1.3 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2006/06/20 18:46:44 $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CakePHP : The PHP Rapid Development Framework :: <?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="<?php echo $html->url('/favicon.ico');?>" type="image/x-icon" />
<?php echo $html->charset('UTF-8')?>
<?php echo $html->css('cake.basic', 'stylesheet', array("media"=>"all" ));?>
<?php echo $html->css('cake.forms', 'stylesheet', array("media"=>"all" ));?>
</head>
<body class="main">
  <div id="container">
		<div id="header">
			<h1 class="logo">
				<a href="http://cakephp.org"></a>
			</h1>
			<div id="navigation">
				<ul>
					<li class="active"><a href="http://cakephp.org"><span>Home</span></a></li>
					<li><a href="http://cakephp.org/downloads/"><span>Downloads</span></a></li>
					<!--<li><a href="#"><span>Screencasts coming soon!</span></a></li>-->
					<li><a href="http://manual.cakephp.org"><span>Manual</span></a></li>
					<li><a href="http://api.cakephp.org/"><span>API</span></a></li>
					<li><a href="http://bakery.cakephp.org"><span>Bakery</span></a></li>
					<li><a href="https://trac.cakephp.org"><span>Trac</span></a></li>
					<li><a href="http://cakeforge.org"><span>CakeForge</span></a></li>
				</ul>
			</div> <!-- #navigation -->
		</div> <!-- #header -->
		<div id="content">
				<?php if ($this->controller->Session->check('Message.flash')) $this->controller->Session->flash(); ?>
				<?php echo $content_for_layout?>
				<div class="clear"></div>
		</div> <!-- #content -->
		<div id="footer">
			<p>
				CakePHP : <a href="http://www.cakefoundation.org/pages/copyright/">&copy; 2006 Cake Software Foundation, Inc.</a>
			</p>
				<a href="http://www.w3c.org/" target="_new">
					<?php echo $html->image('w3c_css.png', array('alt'=>"valid css", 'border'=>"0"))?>
				</a>
				<a href="http://www.w3c.org/" target="_new">
					<?php echo $html->image('w3c_xhtml10.png', array('alt'=>"valid xhtml", 'border'=>"0"))?>
				</a>
				<a href="http://www.cakephp.org/" target="_new">
					<?php echo $html->image('cake.power.png', array('alt'=>"CakePHP : Rapid Development Framework", 'border'=>"0"))?>
				</a>
			</div>
			<?php echo $cakeDebug;?>
	</div> <!-- #container -->
</body>
</html>