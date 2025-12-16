<?php
session_start();

if (!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if (isset($_POST["menos"])) {
    $_SESSION['numero'] -= 1;
}elseif (isset($_POST["mas"])) {
    $_SESSION['numero'] += 1;
}
?>

<form action='' method = 'post'>
<button name='menos'>-</button>
<p><?php echo $_SESSION['numero']; ?></p>
<button name='mas'>+</button>
</form>