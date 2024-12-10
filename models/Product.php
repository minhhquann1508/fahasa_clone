<?php
    include_once 'Database.php';
    include_once './configs/helper.php';

    class Product {
        public static function get_all_product() {
            $conn = Database::get_connection();
            $sql = "SELECT * FROM product";
            $stmt = $conn->query($sql); 
            return $stmt->fetchAll(PDO::FETCH_ASSOC); 
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
                // print_r($keys);
                $stmt = $conn->prepare($sql);
                foreach ($keys as $key) {
                    $stmt->bindValue(":$key", $product[$key]);
                }

                if($stmt->execute()) {
                    return return_data(true, [], 'Thêm nhà sản phẩm thành công');
                } else {
                    return return_data(false, [], 'Thêm nhà sản phẩm thất bại');
                }
            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }

        // ---------------------------------------------------------------QUOC---------------------------------------------------------------

        public static function get_product_by_sql($column_name, $comparison, $value, $order_by, $limit) {
            $conn = Database::get_connection();
        
            $allowed_columns = ['id' ,'title', 'price', 'is_show', 'is_hot', 'discount', 'solds', 'views', 'slug', 'description', 'quantity', 'publish_year', 'translator', 'author', 'created_at', 'updated_at', 'supplier_id' ,'category_id', 'type_id']; 
            if (!in_array($column_name, $allowed_columns)) {
                throw new Exception("Invalid column name");
            }
        
            $allowed_comparisons = ['=', '>', '<', '>=', '<=', '!=', 'LIKE', 'like'];
            if (!in_array($comparison, $allowed_comparisons)) {
                throw new Exception("Invalid comparison operator");
            }
            $order_by = strtolower($order_by) === 'asc' ? 'ASC' : 'DESC';
        
            $sql = "SELECT * FROM product WHERE $column_name $comparison :value ORDER BY id $order_by LIMIT :limit";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':value', $value, PDO::PARAM_STR);
            $stmt->bindValue(':limit', intval($limit), PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }
?>