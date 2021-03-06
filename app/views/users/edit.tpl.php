<table width="100%"  border="0" cellpadding="8" cellspacing="0" bgcolor="#FFFFFF">
<tr>
<td><script type="text/javascript" language="javascript">
<!--
  var total_course_count = <?php echo $course_count?>;
  var course_count = 1;
//-->
</script>
<?php echo $javascript->link('user')?>
<form name="frm" id="frm" method="POST" action="<?php echo $html->url(empty($params['data']['User']['id'])?'add':'edit') ?>" onSubmit="return validate()">
  <?php echo empty($params['data']['User']['id']) ? null : $html->hidden('User/id'); ?> <?php echo empty($params['data']['User']['role']) ? null: $html->hidden('User/role'); ?>
  <input type="hidden" name="required" id="required" value="last_name first_name" />
  <?php echo empty($params['data']['User']['id']) ? $html->hidden('User/creator_id', array('value'=>$rdAuth->id)) : $html->hidden('User/updater_id', array('value'=>$rdAuth->id)); ?>
  <table width="95%" align="center" cellpadding="4" cellspacing="2">
    <tr class="tableheader">
      <td align="center" colspan="3"><?php echo empty($params['data']['User']['id'])?'Add':'Edit' ?> User </td>
      </tr>
    <tr class="tablecell2">
      <td width="130" id="username_label">Username:*</td>
      <td width="337"><?php echo $html->input('User/username', array('size'=>'50')); ?>
      <td width="663" id="username_msg" class="error"></td>
    </tr>
    <tr class="tablecell2">
      <td width="130" id="last_name_label">Last Name:</td>
      <td width="337"><?php echo $html->input('User/last_name', array('id'=>'last_name', 'size'=>'50', 'class'=>'validate required TEXT_FORMAT last_name_msg Invalid_Text._At_Least_One_Word_Is_Required.'))?></td>
      <td width="663" id="last_name_msg" class="error"></td>
    </tr>
    <tr class="tablecell2">
      <td width="130" id="first_name_label">First Name:</td>
      <td><?php echo $html->input('User/first_name', array('id'=>'first_name', 'size'=>'50', 'class'=>'validate required TEXT_FORMAT first_name_msg Invalid_Text._At_Least_One_Word_Is_Required.')) ?> </td>
      <td width="663" id="first_name_msg" class="error"></td>
    </tr class="tablecell2">
    <?php if (isset($params['data']['User']['role']) && $params['data']['User']['role'] == 'S') { ?>
        <tr class="tablecell2">
        <td width="130" id="student_no_label">Student No.:</td>
        <td><?php echo $html->input('User/student_no', array('id'=>'student_no', 'size'=>'50', 'class'=>'validate none TEXT_FORMAT student_no_msg Invalid_Text._At_Least_One_Word_Is_Required.')) ?> </td>
        <td width="663" id="student_no_msg" class="error"></td>
        </tr>
    <?php } else { ?>
    <tr class="tablecell2">
      <td width="130" id="title_label">Title:</td>
      <td><?php echo $html->input('User/title', array('id'=>'title', 'size'=>'50', 'class'=>'validate none TEXT_FORMAT title_msg Invalid_Text._At_Least_One_Word_Is_Required.')) ?> </td>
      <td width="663" id="title_msg" class="error"></td>
    </tr>
    <?php } ?>
    <tr class="tablecell2">
      <td width="130" id="email_label">Email:</td>
      <td><?php echo $html->input('User/email', array('id'=>'email', 'size'=>'50', 'class'=>'validate none EMAIL_FORMAT email_msg Invalid_Email_Format.')) ?> </td>
      <td width="663" id="email_msg" class="error"></td>
    </tr>
    <?php if (isset($params['data']['User']['role']) &&($params['data']['User']['role'] == 'S') && (($rdAuth->role == 'I') || ($rdAuth->role == 'A'))):?>
    <tr class="tablecell2">
      <td width="130" id="courses_label">This student's<br />Courses:</td>
      <td colspan=2>
        <?php
        // Render the course list, with check box selections
        echo $this->renderElement("list/checkBoxList", array(
            "eachName" => "Course",
            "setName" => "Courses",
            "verbIn" => "add",
            "verbOut" => "remove",
            "list" => $simpleCoursesList,
            "selection" => $simpleEnrolledList)); ?>
        <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
        <div id="adddelcourses"></div>
      </td>
    </tr>
    <?php endif;?>
<?php if (isset($params['data']['User']['role']) &&($params['data']['User']['role'] == 'S'))  {
         if (!(isset($rdAuth->customIntegrateCWL) && $rdAuth->customIntegrateCWL)) :?>
          <tr class="tablecell2">
            <td id="password_label">Password:</td>
            <td colspan="2"><?php echo $html->link('Reset Password', '/users/resetPassword/'.$params['data']['User']['id'], '', 'Are you sure to reset the password of the current user?') ?> </td>
        	</tr>
<?php    endif; ?>
<?php  } else { ?>
          <tr class="tablecell2">
            <td id="password_label">Password:</td>
            <td colspan="2"><?php echo $html->link('Reset Password', '/users/resetPassword/'.$params['data']['User']['id'], '', 'Are you sure to reset the password of the current user?') ?> </td>
        	</tr>
<?php  }  ?>

    <tr class="tablecell2">
      <td align="center" colspan="3" id="password_label">
      <input type="button" name="Back" value="Back" onClick="window.location='<?php echo $this->webroot . "users/index" ?>'";>

      <?php echo $html->submit('Save') ?>

	  </td>
      </tr>
  </table>
  <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5E5E5">
    <tr>
      <td align="left"><?php echo $html->image('layout/corner_bot_left.gif',array('align'=>'middle','alt'=>'corner_bot_left'))?></td>
      <td align="right"><?php echo $html->image('layout/corner_bot_right.gif',array('align'=>'middle','alt'=>'corner_bot_right'))?></td>
    </tr>
  </table>
</form></td>
</tr>
</table>
