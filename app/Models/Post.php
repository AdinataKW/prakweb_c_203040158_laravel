<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
    
            "title" => "Judul Post Pertama",
            "author" => "Adinata Kusuma Wardani",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!"
        ],
        [
    
            "title" => "Judul Post Kedua",
            "author" => "Adinata Kusuma Wardani",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!"
        ],
    
    ];

    public static function all() 
    {
        return $this::$blog_posts;
    }
}
