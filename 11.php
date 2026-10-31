<?php
if (isset($_POST['color'])) {
    setcookie("bgcolor", $_POST['color'], time() + 86400 * 30, "/");
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$color = $_COOKIE['bgcolor'] ;
?>

<!DOCTYPE html>
<html>
<body style="background-color: <?php echo htmlspecialchars($color); ?>;">
<form method="post">
    <select name="color">
        <option value="white"></option>
        <option value="red"></option>
        <option value="blue"></option>
        <option value="yellow"></option>
        <option value="green"></option>
    </select>
    <input type="submit" value="Choose Color">
</form>

</body>
</html>