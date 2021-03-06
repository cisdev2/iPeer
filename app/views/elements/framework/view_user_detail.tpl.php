<table width="100%"  border="0" cellpadding="8" cellspacing="0" bgcolor="#FFFFFF">
<tr>
<td>
  <form name="frm" id="frm" method="post" action="<?php echo $html->url(empty($params['data']['User']['id'])?'add':'edit') ?>">
    <table width="95%" align="center" cellpadding="4" cellspacing="2">
      <tr class="tableheader">
        <td colspan="4" align="center">View User </td>
      </tr>
      <tr class="tablecell2">
        <td width="12%" id="username_label">Username:</td>
        <td width="38%" ><?php echo $data['User']['username']; ?></td>
        <td width="12%" id="username_label"> Role:
        <td width="38%" > <?php
            $role = $data['User']['role'];
            switch ($role) {
                case "S" : echo "Student"; break;
                case "I" : echo "Instructor"; break;
                case "A" : echo "Admin"; break;
                default  : echo "Unknown User Role ' $role '";
            }
            ?></td>
      </tr>
      <tr class="tablecell2">
        <td id="last_name_label">Last Name:</td>
        <td align="left" colspan="3"><?php echo $data['User']['last_name']; ?> </td>
      </tr>
      <tr class="tablecell2">
        <td id="first_name_label">First Name:</td>
        <td align="left" colspan="3"><?php echo $data['User']['first_name']; ?> </td>
      </tr>
      <?php if ($data['User']['role'] == 'S'): ?>
      <tr class="tablecell2">
        <td id="student_no_label">Student No.:</td>
        <td align="left" colspan="3"><?php echo $data['User']['student_no']; ?> </td>
      </tr>
      <?php else: ?>
      <tr class="tablecell2">
        <td id="title_label">Title:</td>
        <td align="left" colspan="3"><?php echo $data['User']['title']; ?> </td>
      </tr>
      <?php endif;?>
      <tr class="tablecell2">
        <td id="email_label">Email:</td>
        <td align="left" colspan="3"><?php echo $html->image('icons/email_icon.gif',array('border'=>'0','alt'=>'Email'));?>
          <a href="mailto:<?php if(!empty($data['User']['email'])) echo $data['User']['email']; ?>"><?php echo $data['User']['email']; ?></a>
           </td>
      </tr>
      <tr class="tablecell2">
        <td id="creator_label">Creator:</td>
        <td align="left"><?php
        $params = array('controller'=>'users', 'userId'=>$data['User']['creator_id']);
        echo $this->renderElement('users/user_info', $params);
        ?></td>
        <td id="updater_label">Updater:</td>
        <td align="left"><?php
        $params = array('controller'=>'users', 'userId'=>$data['User']['updater_id']);
        echo $this->renderElement('users/user_info', $params);
        ?></td>
      </tr>
      <tr class="tablecell2">
        <td id="created_label">Create Date:</td>
        <td align="left"><?php echo $data['User']['created']; ?></td>
        <td id="updated_label">Update Date:</td>
        <td align="left"><?php echo $data['User']['modified']; ?></td>
      </tr>
      <tr class="tablecell2">
        <td colspan="4" align="center">
        <input type="button" name="Back" value="Back" onClick="javascript:(history.length > 1) ? history.back() : window.close();"></td>
        </tr>
    </table>
    <table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5E5E5">
      <tr>
        <td align="left"><?php echo $html->image('layout/corner_bot_left.gif',array('align'=>'middle','alt'=>'corner_bot_left'))?></td>
        <td align="right"><?php echo $html->image('layout/corner_bot_right.gif',array('align'=>'middle','alt'=>'corner_bot_right'))?></td>
      </tr>
    </table>
  </form>
  </td>
</tr>
</table>