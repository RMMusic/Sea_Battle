<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.10.2015
 * Time: 9:33
 */
?>
<?php include'header.php'?>

<div class="container1">
    <table>
        <?php for ($x = 0; $x <= 9; $x++):
            echo '<tr>';
            for($y = 0; $y <= 9; $y++):?>
                <td class="item" data-coordinates="<?php echo $x ?>,<?php echo $y ?>"></td>
            <?php endfor ?>
            </tr>
            <?php endfor ?>
    </table>

    <div class="ship shipOne" data-wight="1"></div>
    <div class="ship shipOne" data-wight="1"></div>
    <div class="ship shipOne" data-wight="1"></div>
    <div class="ship shipOne" data-wight="1"></div>
    <div class="ship shipDouble shipDoubleHorizontal" data-position="horizontal" data-wight="2"></div>
    <div class="ship shipDouble shipDoubleHorizontal" data-position="horizontal" data-wight="2"></div>
    <div class="ship shipDouble shipDoubleHorizontal" data-position="horizontal" data-wight="2"></div>
    <div class="ship shipTriple shipTripleHorizontal" data-position="horizontal" data-wight="3"></div>
    <div class="ship shipTriple shipTripleHorizontal" data-position="horizontal" data-wight="3"></div>
    <div class="ship shipFour shipFourHorizontal" data-position="horizontal" data-wight="4"></div>
</div>


<?php include'footer.php'?>