<!-- elements::ajax_group_validate end -->
<?php
if (empty($fieldvalue)) $fieldvalue = '';

if (!empty($data[0])){
  echo '<font color="red">Group "'.$data.'" already exists.</font>';
}

echo ' <input type="hidden" name="data[Group][group_num]"  value="'.$fieldvalue.'" />';
?>
<!-- elements::ajax_group_valiate end -->
