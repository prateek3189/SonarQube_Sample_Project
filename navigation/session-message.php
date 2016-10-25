<?php
    if(isset($_SESSION['message']) && $_SESSION['message'] !== '') {
?>
    <div class="session_message"><?php  echo $_SESSION['message']; ?></div>
<?php
        unset($_SESSION['message']);
    }
?>
