<?php
$new = htmlspecialchars($_POST['Textbox'], ENT_QUOTES);
print $new.'が送られました';
?>