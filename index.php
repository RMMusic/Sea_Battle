<?php
/**
 * 20 Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 9:33
 */
?>
<?php include'header.php'?>
    <form action="classes/gameController.php" method="post">
    <table>
        <?php for ($x = 1; $x <= 10; $x++):?>
            <tr>
            <?php for($y = 1; $y <= 10; $y++):?>
                <td>
                    <input type="checkbox" class="checkShip" name="<?php echo $x ?>,<?php echo $y ?>">
                </td>
            <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
        <button type="submit">GO!</button>
    </form>
<?php include'footer.php'?>

test text



<div class="multilang"><span lang="UK">Iнститут моделювання та аналiзу патологiчних процесiв</span><span lang="EN">Institute of Pathological Processes Simulation and Analysis</span><span lang="RU">Институт моделирования и анализа патологических процессов</span></div>