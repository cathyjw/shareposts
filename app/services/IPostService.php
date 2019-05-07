<?php

    interface IPostService {

        public function GetPosts();
        public function AddPost($data);
        public function UpdatePost($data);
        public function GetPostById($id);
        public function DeletePost($id);
    }