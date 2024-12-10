document.addEventListener('DOMContentLoaded', () => {
    const initScroll = (containerSelector) => {
        const scrollContainers = document.querySelectorAll(containerSelector);

        scrollContainers.forEach(scrollContainer => {
            const btnLeft = scrollContainer.closest('.container').querySelector('.scroll-btn.left');
            const btnRight = scrollContainer.closest('.container').querySelector('.scroll-btn.right');
            
            let isDragging = false;
            let startX, scrollLeft;
            let isMoved = false; // Kiểm tra người dùng có kéo hay không

            // Xử lý kéo cuộn bằng chuột
            scrollContainer.addEventListener('mousedown', (e) => {
                isDragging = true;
                isMoved = false; // Reset trạng thái khi bắt đầu kéo
                startX = e.pageX - scrollContainer.offsetLeft;
                scrollLeft = scrollContainer.scrollLeft;
                scrollContainer.classList.add('active');
            });

            scrollContainer.addEventListener('mouseup', () => {
                isDragging = false;
                scrollContainer.classList.remove('active');
            });

            scrollContainer.addEventListener('mouseleave', () => {
                isDragging = false;
                scrollContainer.classList.remove('active');
            });

            scrollContainer.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                e.preventDefault();
                const x = e.pageX - scrollContainer.offsetLeft;
                const walk = (x - startX) * 2; // Tăng tốc độ cuộn
                scrollContainer.scrollLeft = scrollLeft - walk;

                // Đánh dấu rằng người dùng đã kéo
                isMoved = true;
            });

            // Xử lý click vào sản phẩm
            scrollContainer.addEventListener('click', (e) => {
                if (isMoved) {
                    e.preventDefault(); // Ngăn không cho link được kích hoạt nếu đã kéo
                }
            });

            // Xử lý cuộn bằng nút
            btnLeft.addEventListener('click', () => {
                scrollContainer.scrollBy({ left: -200, behavior: 'smooth' });
            });

            btnRight.addEventListener('click', () => {
                scrollContainer.scrollBy({ left: 200, behavior: 'smooth' });
            });

            // Hiển thị/ẩn nút cuộn
            const toggleScrollButtons = () => {
                const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
                btnLeft.classList.toggle('d-none', scrollContainer.scrollLeft <= 0);
                btnRight.classList.toggle('d-none', scrollContainer.scrollLeft >= maxScrollLeft);
            };

            scrollContainer.addEventListener('scroll', toggleScrollButtons);
            window.addEventListener('load', toggleScrollButtons);

            // Cập nhật trạng thái nút ngay sau khi script khởi chạy
            toggleScrollButtons();
        });
    };

    // Khởi tạo cuộn cho tất cả các container
    initScroll('.product-scroll-container'); // Danh sách 1
    initScroll('.list_product-scroll-container'); // Danh sách 2
});
