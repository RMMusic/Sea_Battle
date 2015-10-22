<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 9:33
 */
?>
<?php include'header.php'?>

<form action="gameController.php" method="post">
<?php for ($x = 0; $x <= 9; $x++):
    for($y = 0; $y <= 9; $y++):?>
        <input type="checkbox" name="<?php echo $x ?>,<?php echo $y ?>">
    <?php endfor ?>
    <br>
    <?php endfor ?>
    <button type="submit">Go!!!</button>
</form>
