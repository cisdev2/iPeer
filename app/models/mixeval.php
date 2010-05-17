<?php
/* SVN FILE: $Id: mixeval.php,v 1.2 2006/08/28 18:31:49 rrsantos Exp $ */

/**
 * Enter description here ....
 *
 * @filesource
 * @copyright    Copyright (c) 2006, .
 * @link
 * @package
 * @subpackage
 * @since
 * @version      $Revision: 1.2 $
 * @modifiedby   $LastChangedBy$
 * @lastmodified $Date: 2006/08/28 18:31:49 $
 * @license      http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * Mixeval
 *
 * Enter description here...
 *
 * @package
 * @subpackage
 * @since
 */
class Mixeval extends AppModel
{
    var $name = 'Mixeval';

	function beforeSave(){
		$allowSave = true;
		if (empty($this->data[$this->name]['name'])) {
			//check empty name
			$this->errorMessage='Mixed evaluation name is required.';
			$allowSave = false;
			//check the duplicate mixeval					
		} else 
			$allowSave = $this->__checkDuplicateMixeval();
		return $allowSave;
	}	
	
	function __checkDuplicateMixeval() {
		$duplicate = false;
		$field = 'name';
		$value = $this->data[$this->name]['name'];
		if ($result = $this->find($field . ' = "' . $value.'"', $field.', id')){
		  if ($this->data[$this->name]['id'] == $result[$this->name]['id']) {
		    $duplicate = false;
		  } else {
  		  $duplicate = true;
  		}
		 }

		if ($duplicate) {
		  $this->errorMessage='Duplicate Mixed evaluation found. Please change the rubic name.';
		  return false;
		}
		else {
		  return true;
		}
	}
	//sets the current userid and merges the form values into the data array
	function prepData($tmp=null, $userid){
		
//		$tmp = array_merge($tmp['data']['Mixeval'], $tmp['form']);
    $ttlQuestionNo = $tmp['data']['Mixeval']['total_question'];
    $questions = array();
    for ($i = 1; $i < $ttlQuestionNo; $i++) {
      //Format questions for mixed eval
      $question['question_num'] = $i;
      $question['title'] = $tmp['data']['Mixeval']['title'.$i];
      isset($tmp['data']['Mixeval']['text_instruction'.$i])? $question['instructions'] = $tmp['data']['Mixeval']['text_instruction'.$i] : $question['instructions'] = null;
      $question['question_type'] = $tmp['data']['Mixeval']['question_type'.$i];
      isset($tmp['data']['Mixeval']['text_require'.$i])? $question['required'] = $tmp['data']['Mixeval']['text_require'.$i] : $question['required'] = 0;
      isset($tmp['form']['criteria_weight_'.$i])? $question['multiplier'] = $tmp['form']['criteria_weight_'.$i] : $question['multiplier'] = 0;
      $question['scale_level'] = $tmp['data']['Mixeval']['scale_max'];
      isset($tmp['data']['Mixeval']['response_type'.$i])? $question['response_type'] = $tmp['data']['Mixeval']['response_type'.$i] : $question['response_type'] = null;
      $questions[$i]['MixevalsQuestion'] = $question;
      
      //Format lickert descriptors
      if ($question['question_type'] == 'S') {
        for ($j = 1; $j <= $question['scale_level']; $j++) {
         $desc['question_num'] = $question['question_num'];
         $desc['scale_level'] = $j;
         $desc['descriptor'] = $tmp['data']['Mixeval']['criteria_comment_'.$question['question_num'].'_'.$j];
         $questions[$i]['MixevalsQuestion']['descriptor'][$j] = $desc;
        }
         
      }
      
    }
		
		return $questions;
	}
}

?>