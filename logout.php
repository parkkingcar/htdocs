<?php
session_unset();
setcookie('guest', '', time()-3600);
setcookie('password', '', time()-3600);
echo "<script>window.location.href='index.php'</script>"
?>
