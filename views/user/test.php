
<?php include_once './views/user/_list.php';?>
<?php include_once './views/user/_listproduct.php';?>


<?php  showScrollableList_WithoutHeader(["Lịch Bàn 2025"], 
                                         'calendars', 
                                         [list_products_scrollable($data['bestseller']  = bestseller())]) ?>
<div style="height:100px"></div>