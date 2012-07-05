<?php
/**
 * UserTutor
 *
 * @uses AppModel
 * @package   CTLT.iPeer
 * @author    Pan Luo <pan.luo@ubc.ca>
 * @copyright 2012 All rights reserved.
 * @license   MIT {@link http://www.opensource.org/licenses/MIT}
 */
class UserTutor extends AppModel
{
    public $name = 'UserTutor';

    public $belongsTo = array('User');
    public $actsAs = array('Traceable');

}
