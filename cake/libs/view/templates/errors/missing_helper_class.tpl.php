<?php
/* SVN FILE: $Id: missing_helper_class.tpl.php,v 1.3 2006/06/20 18:46:43 zoeshum Exp $ */

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
<h1>Missing Helper Class</h1>

<p class="error">You are seeing this error because the view helper class <em><?php echo $helperClass;?></em>
  can't be found or doesn't exist in <em><?php echo "app".DS."views".DS."helpers".DS.$file; ?></em>
</p>


<p>
<span class="notice"><strong>Notice:</strong> this error is being rendered by the <code>app/views/errors/missing_helper_class.tpl.php</code>
view file, a user-customizable error page for handling non-existent view helper classes.</span>
</p>
<p>
<strong>Fatal</strong>: Create the Class:
</p>
<p>
<p>&lt;?php<br />
&nbsp;&nbsp;&nbsp;&nbsp;class <?php echo $helperClass;?> extends Helper<br />
&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Your helper functions heree<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;function <em>myHelperFunction</em> ()<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
&nbsp;&nbsp;&nbsp;&nbsp;}<br />
?&gt;<br />
</p>
in file : <?php echo "app".DS."views".DS."helpers".DS.$file; ?>
</p>