<?php
/**
 * QuestionFixture
 *
 * @uses CakeTestFixture
 * @package   CTLT.iPeer
 * @author    Pan Luo <pan.luo@ubc.ca>
 * @copyright 2012 All rights reserved.
 * @license   MIT {@link http://www.opensource.org/licenses/MIT}
 */
class QuestionFixture extends CakeTestFixture
{
    public $name = 'Question';
    public $fields = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
        'prompt' => array('type' => 'string', 'null' => false, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
        'type' => array('type' => 'string')
    );
    public $records = array(
        array('id' => 1, 'prompt' => 'Did you learn a lot from this course ?', 'type' => 'M'),
        array('id' => 2, 'prompt' => 'What was the hardest part ?', 'type' => 'M'),
        array('id' => 3, 'prompt' => 'First Question', 'type' => 'M'),
        array('id' => 4, 'prompt' => 'Second Question', 'type' => 'M'),
        array('id' => 5, 'prompt' => 'Third Question', 'type' => 'M'),
        array('id' => 6, 'prompt' => 'Did u like the prof ?', 'type' => 'A')
    );
}
