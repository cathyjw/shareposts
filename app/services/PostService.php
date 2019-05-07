<?php
    require_once 'IPostService.php';
    require_once 'Factory.php';

    class PostService implements IPostService {
        
        public function GetPosts(){
            return Factory::GetPosts()->GetPosts();
        }
        
        public function AddPost($data){
            return Factory::AddPost($data)->AddPost();
        }
        
        public function UpdatePost($data){
            return Factory::UpdatePost($data)->UpdatePost();
        }
        
        public function GetPostById($id){
            return Factory::GetPostById($id)->GetPostById();
        }
        
        public function DeletePost($id){
            return Factory::DeletePost($id)->DeletePost();
        }

    }
