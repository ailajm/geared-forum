<?php
/*
    Title: PHP OOP Practice
    Description: Practicing with PHP OOP by building a simple site.
    File Summary: __get & __set magic methods
    Date: 2021-08-03
    Author: Coty McKinney
    Credit(s): Skeleton Demo File templated
*/

    class Post {
        private $name;

        public function __set($name,$value){
            echo "<pre>Setting " . $name . " to <strong>" . $value . "</strong></pre>\n";
            $this->name = $value;
        }
        public function __get($name) {
            echo "<pre>Getting " . $name . " <strong>" . $this->name . "</strong></pre>";
        }
        public function __isset($name){
            echo "\n<pre>Is " . $name . " set?</pre>";
            return isset($this->name);
        }
    }

    $post = new Post;
    $post->name = 'Testing';
    echo $post->name;
    var_dump(isset($post->name));

?>