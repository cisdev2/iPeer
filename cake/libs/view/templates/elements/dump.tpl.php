<?php
/* SVN FILE: $Id: dump.tpl.php,v 1.3 2006/06/20 18:46:39 zoeshum Exp $ */

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
 * @subpackage		cake.cake.libs.view.templates.elements
 * @since			CakePHP v 0.10.5.1782
 * @version			$Revision: 1.3 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2006/06/20 18:46:39 $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<div>
	<h2>Controller dump:</h2>
		<pre>
			<?php print_r($this->controller); ?>
		</pre>
</div>