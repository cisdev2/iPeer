<table width="100%"  border="0" cellpadding="8" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td>
<?php echo $javascript->link('ricobase')?>
<?php echo $javascript->link('ricoeffects')?>
<?php echo $javascript->link('ricoanimation')?>
<?php echo $javascript->link('ricopanelcontainer')?>
<?php echo $javascript->link('ricoaccordion')?>
	<?php echo empty($params['data']['Evaluation']['id']) ? null : $html->hidden('Evaluation/id'); ?>
    <!-- Render Event Info table -->
	  <?php
	  if (isset($memberScoreSummary[$rdAuth->id])) {
	    $receviedAvePercent = $memberScoreSummary[$rdAuth->id]['received_ave_score'] / $mixeval['Mixeval']['total_marks'] * 100;
	    $releaseStatus = $scoreRecords[$rdAuth->id]['grade_released'];
	  } else {
  	  $receviedAvePercent = 0;
  	  $releaseStatus = array();
  	}
    $params = array('controller'=>'evaluations', 'event'=>$event, 'gradeReleaseStatus'=>$releaseStatus, 'aveScore'=>number_format($receviedAvePercent).'%', 'groupAve'=>null);
    echo $this->renderElement('evaluations/student_view_event_info', $params);
    ?>
<div id='mixeval_result'>

<?php
$numerical_index = 1;  //use numbers instead of words; get users to refer to the legend
$color = array("", "#FF3366","#ff66ff","#66ccff","#66ff66","#ff3333","#00ccff","#ffff33");
$membersAry = array();  //used to format result
$groupAve = 0;

//unset($scoreRecords[$rdAuth->id]);

$gradeReleased = !empty($scoreRecords[$rdAuth->id]['grade_released']) ?
        $scoreRecords[$rdAuth->id]['grade_released'] :
        "No Grades Released";
$commentReleased = !empty($scoreRecords[$rdAuth->id]['comment_released']) ?
        $scoreRecords[$rdAuth->id]['comment_released'] :
        "No Comments Released";

?>
			 <!--br>Total: <?php /*$memberAve = number_format($membersAry[$user['id']]['received_ave_score'], 2);
			                  echo number_format($membersAry[$user['id']]['received_ave_score'], 2);
			                  echo '('.number_format($membersAry[$member['User']['id']]['received_ave_score_%']) .'%)';
			                  if ($memberAve == $groupAve) {
			                    echo "&nbsp;&nbsp;<< Same Mark as Group Average >>";
			                  } else if ($memberAve < $groupAve) {
			                    echo "&nbsp;&nbsp;<font color='#FF6666'><< Below Group Average >></font>";
			                  } else if ($memberAve > $groupAve) {
			                    echo "&nbsp;&nbsp;<font color='#000099'><< Above Group Average >></font>";
			                  }*/
			                  ?>
			        <br><br-->

<table width="95%" border="0" align="center" cellpadding="4" cellspacing="2">
	<tr>
		<td>
<div id="accordion">
    <!-- Panel of Evaluations Results -->
		<div id="panelResults">
		  <div id="panelResultsHeader" class="panelheader">
		  	<?php echo 'Evaluation Results From Your Teammates. (Randomly Ordered)       ';
		  	if ( !$gradeReleased && !$commentReleased) {
          echo '<font color="red">Comments/Grades Not Released Yet.</font>';
		  	}	else if ( !$gradeReleased) {
		  	  echo '<font color="red">Grades Not Released Yet.</font>';
        }	else if ( !$commentReleased) {
		  	  echo '<font color="red">Comments Not Released Yet.</font>';
        }
?>
		  </div>
		  <div style="height: 200px;" id="panelResultsContent" class="panelContent">
  	  <?php
    $params = array('controller'=>'evaluations', 'mixeval'=>$mixeval, 'mixevalQuestion'=>$mixevalQuestion, 'membersAry'=>$groupMembers, 'evalResult'=>$evalResult, 'userId'=>$rdAuth->id, 'scoreRecords'=>$scoreRecords);
    echo $this->renderElement('evaluations/student_view_mixeval_details', $params);
    ?>

		  </div>
		</div>
    <!-- Panel of Evaluations Reviews -->
		<div id="panelReviews">
		  <div id="panelReviewsHeader" class="panelheader">
		  	<?php echo 'Review Evaluations From You.'?>
		  </div>
		  <div style="height: 200px;" id="panelReviewsContent" class="panelContent">

  	  <?php
    $params = array('controller'=>'evaluations', 'mixeval'=>$mixeval, 'mixevalQuestion'=>$mixevalQuestion, 'membersAry'=>$groupMembers, 'evalResult'=>$reviewEvaluations, 'userId'=>$rdAuth->id, 'scoreRecords'=>null);
    echo $this->renderElement('evaluations/student_view_mixeval_details', $params);
    ?>
		  </div>
		</div>
</div>
		</td>
	</tr>

</table>
	<script type="text/javascript"> new Rico.Accordion( 'accordion',
								{panelHeight:500,
								 hoverClass: 'mdHover',
								 selectedClass: 'mdSelected',
								 clickedClass: 'mdClicked',
								 unselectedClass: 'panelheader'});

	</script>
</div>

<table width="95%"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#E5E5E5">
  <tr>
    <td align="left"><?php echo $html->image('layout/corner_bot_left.gif',array('align'=>'middle','alt'=>'corner_bot_left'))?></td>
    <td align="right"><?php echo $html->image('layout/corner_bot_right.gif',array('align'=>'middle','alt'=>'corner_bot_right'))?></td>
  </tr>
</table>
	</td>
  </tr>
</table>
