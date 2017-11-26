<!doctype html>
<html class="no-js">
<?php
    include_once 'header.php';
?>

<?php
$_page = $_GET['page'];

switch ($_page)
{
    case 'user':
        include_once 'user.php';
        break;
    case 'home':
        include_once 'home.php';
        break;
}

?>

<?php
    include_once 'footer.php';
?>
</body>
</html>
