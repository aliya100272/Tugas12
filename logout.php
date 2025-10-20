<?php
session_start();
session_destroy();
echo "<script>
    alert('Anda berhasil logout');
    window.location='login.php';
</script>";
exit();
?>
<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
