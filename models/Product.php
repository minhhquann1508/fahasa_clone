<?php
    include_once 'Database.php';
    include_once './configs/helper.php';

    class Product {
        public static function get_all_product_pagination($show_all = false, $page = 1, $page_size = 10) {
            try {
                $conn = Database::get_connection();
                $format_page = ((int)$page - 1) * $page_size;
                if($show_all) {
                    $sql = "SELECT p.*, s.name AS supplier_name, c.name AS category_name, t.name AS type_name FROM product p
                            INNER JOIN supplier s ON s.id = p.supplier_id
                            INNER JOIN category c ON c.id = p.category_id
                            INNER JOIN type t ON t.id = p.type_id
                            LIMIT :start, :size";
                    $sql_total = "SELECT COUNT(*) as total FROM product";
                } else {
                    $sql = "SELECT p.*, s.name AS supplier_name, c.name AS category_name, t.name AS type_name FROM product p
                            INNER JOIN supplier s ON s.id = p.supplier_id
                            INNER JOIN category c ON c.id = p.category_id
                            INNER JOIN type t ON t.id = p.type_id
                            WHERE p.is_show = 1
                            LIMIT :start, :size";
                    $sql_total = "SELECT COUNT(*) as total FROM product WHERE is_show = 1";
                }
                
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':start', $format_page, PDO::PARAM_INT);
                $stmt->bindValue(':size', $page_size, PDO::PARAM_INT);

                $stmt_total = $conn->query($sql_total);
                $total = $stmt_total->fetch(PDO::FETCH_ASSOC)['total'];

                if($stmt->execute()) {
                    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return return_data(true, ['products' => $products, 'total' => $total], 'Hiển thị danh mục thành công');
                } else {
                    return return_data(false, [], 'Hiển thị danh mục thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        public static function add_new_product($product) {
            try {
                $conn = Database::get_connection();
                $keys = array_keys($product);
                $sql = "INSERT INTO product(title, price, thumbnail, is_show, is_hot, discount, solds, views, slug,
                                    description, quantity, publish_year, translator, page_num, author, created_at, updated_at,
                                    category_id, supplier_id, type_id)
                        VALUES(:title, :price, :thumbnail, :is_show, :is_hot, :discount, :solds, :views, :slug,
                            :description, :quantity, :publish_year, :translator, :page_num, :author, :created_at, :updated_at,
                            :category_id, :supplier_id, :type_id)";
                $stmt = $conn->prepare($sql);
                foreach ($keys as $key) {
                    $stmt->bindValue(":$key", $product[$key]);
                }

                if($stmt->execute()) {
                    return return_data(true, [], 'Thêm sản phẩm thành công');
                } else {
                    return return_data(false, [], 'Thêm sản phẩm thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        public static function delete_product($id) {
            try {
                $conn = Database::get_connection();
                $sql = "DELETE FROM product WHERE id = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);

                if($stmt->execute()) {
                    return return_data(true, [], 'Xóa sản phẩm thành công');
                } else {
                    return return_data(false, [], 'Xóa sản phẩm thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }
    }
?>