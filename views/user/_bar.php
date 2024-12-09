<div class="d-flex justify-content-center mt-3 ">
    <div class="sold-progress">
        <?php
            $quantity = $value['quantity'];
            $sold = $value['sold'];
            $percent = ($sold / $quantity) * 100;
        ?>
        <div class="progress-bar" style="width: <?php echo $percent; ?>%;"></div>
        <span>
            <?php 
                if ($percent >= 100) {
                    echo "Hết hàng";
                } elseif ($percent >= 85) {
                    echo "Sắp hết";
                } else {
                    echo "Đã bán $sold";
                }
            ?>
        </span>
    </div>
</div>

<?php

?>