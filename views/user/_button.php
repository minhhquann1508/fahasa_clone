<?php
    function custom_btn($name, $link) {
?>
<div class="d-flex justify-content-center pb-3">
    <a href="<?php echo $link?>">
        <button class="custom-btn btn py-2" style="
                width: 210px;
                color: #C92127;
                background-color: #fff;
                border: 2px solid #C92127;
                font-size: 14px;
                font-weight: 700;
        ">
            <?php echo $name?>
        </button>
    </a>
</div>      
<style>
    .custom-btn:hover {
    background-color: #fff;
    color: #C92127;
    border: 2px solid #C92127;
}
</style>

<?php } ?>