<?php
/**
 * 20 Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 9:33
 */
?>
<?php include'header.php'?>
    <form action="class/inOutDB.php" method="post">
    <table>
        <?php for ($x = 1; $x <= 10; $x++):
            echo '<tr>';
            for($y = 1; $y <= 10; $y++):?>
                <td>
                    <input type="checkbox" class="checkShip" name="<?php echo $x ?>,<?php echo $y ?>">
                </td>
            <?php endfor ?>
            </tr>
            <?php endfor ?>
    </table>
        <button type="submit">!!!</button>
    </form>
<?php include'footer.php'?>