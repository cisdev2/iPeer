<?php
/* SVN FILE: $Id: missing_component_file.tpl.php,v 1.3 2006/06/20 18:46:43 zoeshum Exp $ */

/**
 *
 *
 *
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
 * @subpackage		cake.cake.libs.view.templates.errors
 * @since			CakePHP v 0.10.0.1076
 * @version			$Revision: 1.3 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2006/06/20 18:46:43 $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<h1>Missing Component File</h1>

<p class="error">You are seeing this error because the component file <em><?php echo "app".DS."controllers".DS."components".DS.$file; ?></em>
  can't be found or doesn't exist.
</p>

<p>
<span class="notice"><strong>Notice:</strong> this error is being rendered by the <code>app/views/errors/missing_component_file.tpl.php</code>
view file, a user-customizable error page for handling non-existent component class files.</span>
</p>

<p>
<strong>Fatal</strong>: Create the Class:
</p>
<p>
<p>&lt;?php<br />
&nbsp;&nbsp;&nbsp;&nbsp;class <?php echo $component;?>Component extends Object<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Your component functions here<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function <em>myComponentFunction</em> ()<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
?&gt;<br />
</p>
in file : <?php echo "app".DS."controllers".DS."components".DS.$file; ?>
</p>