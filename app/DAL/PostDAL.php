<?php
/**
 * Description of PostDAL
 *
 * @author Jie
 */
    require_once 'IPostDAL.php';
    
    class PostDAL {
        private $db;
        private $data;
        private $id;
        
        public function __construct($data, $id){
            $this->db = Database::instance();
   
            $this->data = $data;
            $this->id=$id;
        }
        
        public function GetPosts(){
//            $handler = PhpConsole\Handler::getInstance();
//            $handler->start();
//            $handler->debug('Hi', Debug);
            $this->db->query('SELECT *,
                            posts.id as postId,
                            users.id as userId,
                            posts.created_at as postCreated,
                            users.created_at as userCreated
                            FROM posts
                            INNER JOIN users
                            ON posts.user_id = users.id
                            ORDER BY posts.created_at DESC
                            ');

          $results = $this->db->resultSet();

          return $results;
        }
        
        public function AddPost(){
            $this->db->query('INSERT INTO posts (title, user_id, body) VALUES(:title, :user_id, :body)');
            // Bind values
            $this->db->bind(':title', $this->data['title']);
            $this->db->bind(':user_id', $this->data['user_id']);
            $this->db->bind(':body', $this->data['body']);
    
            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }
        
        public function UpdatePost(){
            $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
            // Bind values
            $this->db->bind(':id', $this->data['id']);
            $this->db->bind(':title', $this->data['title']);
            $this->db->bind(':body', $this->data['body']);
    
            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }
        
        public function GetPostById(){
            $this->db->query('SELECT * FROM posts WHERE id = :id');
            $this->db->bind(':id', $this->id);
    
            $row = $this->db->single();
    
            return $row;
        }
        
        public function DeletePost(){
            
            $this->db->query('DELETE FROM posts WHERE id = :id');
            // Bind values
            $this->db->bind(':id', $this->id);
    
            // Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }
    }
