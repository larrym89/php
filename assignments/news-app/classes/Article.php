<?php
require_once(__DIR__.'/../includes/database.php');

class Article {
    

    public function getAllArticles() {
        $db = Database::getInstance();
        $db->getConnection();
        $query = "SELECT * FROM articles ORDER BY created_at DESC";
        $result = $this->$db->mysqli_query($query);

        if($result->num_rows > 0) {
            $articles = array();
            while($row = $result->fetch_assoc()) {
                $articles[] = $row;
            }
            return $articles;
        } else {
            return null;
        }
    }

    public function getArticlesByCategory($category_id) {
        $db = Database::getInstance();
        $db->getConnection();
        $query = "SELECT * FROM articles WHERE category_id = $category_id ORDER BY created_at DESC";
        $result = $this->$db->mysqli_query($query);

        if($result->num_rows > 0) {
            $articles = array();
            while($row = $result->fetch_assoc()) {
                $articles[] = $row;
            }
            return $articles;
        } else {
            return null;
        }
    }

    public function getArticleById($id) {
        $query = "SELECT * FROM articles WHERE id = $id";
        $result = $this->db->query($query);

        if($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function addArticle($title, $category_id, $content, $image) {
        $title = $this->db->real_escape_string($title);
        $category_id = intval($category_id);
        $content = $this->db->real_escape_string($content);
        $image = $this->db->real_escape_string($image);

        $query = "INSERT INTO articles (title, category_id, content, image, created_at) VALUES ('$title', $category_id, '$content', '$image', NOW())";
        return $this->db->query($query);
    }

    public function editArticle($id, $title, $category_id, $content, $image) {
        $id = intval($id);
        $title = $this->db->real_escape_string($title);
        $category_id = intval($category_id);
        $content = $this->db->real_escape_string($content);
        $image = $this->db->real_escape_string($image);

        $query = "UPDATE articles SET title='$title', category_id=$category_id, content='$content', image='$image' WHERE id=$id";
        return $this->db->query($query);
    }

    public function deleteArticle($id) {
        $id = intval($id);
        $query = "DELETE FROM articles WHERE id=$id";
        return $this->db->query($query);
    }
}
