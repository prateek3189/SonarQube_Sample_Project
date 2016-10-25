<div class="left_side">
  <ul class="notification-bar">
    <li class="<?php if($page === 'GR') {echo  'selected';}?>">
        <a href="<?php echo FOLDER_PATH_HTTP;?>dashboard.php"><strong>Generate Report</strong></a>
    </li>
    <li class="<?php if($page === 'ST') {echo  'selected';}?>">
        <a href="<?php echo FOLDER_PATH_HTTP;?>settings.php"><strong>Settings</strong></a>
    </li>
    <li>
        <a href="<?php echo FOLDER_PATH_HTTP;?>logout.php"><strong>Logout</strong></a>
    </li>
  </ul>
</div>
