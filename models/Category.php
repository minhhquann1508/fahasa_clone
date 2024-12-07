<?php 
    include_once 'Database.php';
    include_once './configs/helper.php';

    class Category {
        public static function get_all_category() {
            $conn = Database::get_connection();
            $sql = "SELECT * FROM category";
            $stmt = $conn->query($sql); 
            return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        }

        public static function add_new_category($category) {
            try {
                $conn = Database::get_connection();
                $sql = "INSERT INTO category (name, slug, thumbnail)
                        VALUES(:name, :slug, :thumbnail)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':name', $category['name']);
                $stmt->bindValue(':slug', $category['slug']);
                $stmt->bindValue(':thumbnail', $category['thumbnail']);
                
                if($stmt->execute()) {
                    return return_data(true, [], 'Thêm thành công');
                } else {
                    return return_data(false, [], 'Thêm thất bại');
                }


            } catch (PDOException $e) {
                return return_data(false, [], $e->getMessage());
            }
        }
    }
?>