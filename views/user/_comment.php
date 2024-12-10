<?php
function comment($data_added) {
    ob_start(); 
    ?>
    <div class="px-0 pb-2">
        <?php foreach ($data_added as $value) : ?>
        <div class="d-flex mt-3 mb-3">
            <div class="text-m me-3 mt-2" style="min-width:170px">
                <p style="color:#212121"><?php echo 'Khánh Quỳnh'; ?></p>
                <p style="color:#7a7e7f"><?php echo $value['created_at']?></p> <!-- Hiển thị ngày tạo -->
            </div>
            <div>
                <p class="mt-1">
                    <?php 
                    $fullStars = $value['rating'];
                    $emptyStars = 5 - $value['rating']; 
                    
                    for ($i = 0; $i < $fullStars; $i++) {
                        echo '<span style="color: #F6A500; font-size:20px">★</span>'; // Sao vàng
                    }
                    // Hiển thị sao xám
                    for ($i = 0; $i < $emptyStars; $i++) {
                        echo '<span style="color: #f2f4f5; font-size:20px">★</span>'; // Sao xám
                    }
                    ?>
                </p>
                <p class="text-m mt-2">
                    Chuyện xoay quanh cái chết bí ẩn của một người cha là tỷ phú, từ đó dẫn tới cuộc tranh giành tài sản thừa kế của 3 người con, với những âm mưu, lừa gạt, thậm chí đổ máu. Truyện mạch lạc, dễ hiểu, cuốn hút, khiến ta muốn đọc một mạch cho tới cái kết - mà cũng là kết có hậu như đa số truyện của Sidney. Giọng dịch không mượt, có một số lỗi chính tả, dễ gây ức chế cho người đọc. Bìa sách xấu, không gây ấn tượng, không mang ý nghĩa gì sâu sắc. Chất lượng in ấn và chất lượng giấy không cao. Có nhiều tình tiết nhỏ bất ngờ và thú vị trong truyện. Tuy nhiên âm mưu chính, lại không có tính thuyết phục cao, khi mà kẻ chủ mưu sử dụng quá nhiều đồng phạm - những đồng phạm này lại không được bịt miệng thực sự kín kẽ, khiến người đọc có thể dễ dàng suy luận được ra rằng âm mưu này chắc chắn sẽ bị đổ bể. Tóm lại, nếu bạn thích những cuốn truyện về lừa đảo - tranh giành quyền thừa kế, thì đây là một câu chuyện không nên bỏ qua. Nhưng với tính chất đơn giản và còn sơ hở của nó, thì tôi không thể đánh giá nó quá cao như các truyện khác của Sidney được. chưa bao giờ chê bai một tác phẩm nào của Sidney nhưng có lẽ tác phẩm này hơi kém so với các tác phẩm khác của ông?
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php 
    return ob_get_clean();
}
?>
