<?php

if ($view) {
  //For view page; display the name only
  echo $eventList[$eventId]['event'];
}
else {
  //For Edit or Add pages; shows the selection box
  echo '<select name="event_id" id="event_id" '.$disabled.'>';

  if ($defaultOpt == '1') {
    echo '<option value="-1" SELECTED >No event Selected</option>';
  }// else if ($defaultOpt == 'A') {
  //  echo '<option value="A" SELECTED > --- All events --- </option>';
  //}

  foreach($eventList as $index => $value) {
    //print_r($value);
    $sticky = $sticky_event_id == $value['Event']['id'] ? 'selected':'';
    if ($eventId == null) {
      echo '<option value="'.$value['Event']['id'].'" '.$sticky.'>'.$value['Event']['title'].'</option>';
    } else {
      if ($eventId == $index){
        echo '<option value="'.$value['Event']['id'].'" '.$sticky.'>'.$value['Event']['title'].'</option>';
      }
    }
  }
  echo '</select>';
}?>