<?php
/**
 * SurveyInputFixture
 *
 * @uses CakeTestFixture
 * @package   CTLT.iPeer
 * @author    Pan Luo <pan.luo@ubc.ca>
 * @copyright 2012 All rights reserved.
 * @license   MIT {@link http://www.opensource.org/licenses/MIT}
 */
class SurveyInputFixture extends CakeTestFixture
{
    public $name = 'SurveyInput';

    public $fields = array(
        'id' => array('type'=> 'integer', 'key' => 'primary', 'null' => false, 'default' => false),
        'survey_id' => array('type' => 'integer', 'null' => false, 'default' => 0),
        'user_id' => array('type' => 'integer', 'null' => false, 'default' => 0),
        'question_id' => array('type' => 'integer', 'null' => false, 'default' => 0),
        'sub_id' => array('type' => 'integer', 'null' => true),
        'response_text' => array('type' => 'string', 'null' => true),
        'response_id' => array('type' => 'integer', 'null' => true)
    );

    public $records = array(
        array('id' => 1, 'survey_id' => 1, 'user_id' => 1, 'question_id' => 1, 'response_id' => 1),
        array('id' => 2, 'survey_id' => 2, 'user_id' => 2, 'question_id' => 2, 'response_id' => 1),
        array('id' => 3, 'survey_id' => 1, 'user_id' => 3, 'question_id' => 2, 'response_id' => 2),
        array('id' => 4, 'survey_id' => 1, 'user_id' => 4, 'question_id' => 6, 'response_id' => 2)
    );
}
