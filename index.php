<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 9:33
 */
?>
<?php include'header.php'?>

<table>
    <?php for ($x = 0; $x <= 9; $x++):
        echo '<tr>';
        for($y = 0; $y <= 9; $y++):?>
            <td class="item" data-coordinates="<?php echo $x ?>,<?php echo $y ?>"></td>
        <?php endfor ?>
        </tr>
        <?php endfor ?>
</table>

<div class="shipOne">1</div>
<div class="shipOne">1</div>
<div class="shipOne">1</div>
<div class="shipOne">1</div>



<?php include'footer.php'?>