<?php


namespace App\classes;


class Blog
{
    protected $blogs;

    public function getAllBlogs ( )
    {
        return
        [
            0   =>
            [
                'title'         => 'Blog no: 01',
                'description'   => 'Blog Description 01',
                'author'        => 'Shahabuddin',
                'image'         => 'assets/img/pa1.jpg'
            ],
            1   =>
            [
                'title'         => 'Blog no: 02',
                'description'   => 'Blog Description 02',
                'author'        => 'Tarikul',
                'image'         => 'assets/img/pa2.jpg'
            ],
            2   =>
            [
                'title'         => 'Blog no: 03',
                'description'   => 'Blog Description 03',
                'author'        => 'Mahmud',
                'image'         => 'assets/img/pa1.jpg'
            ],
        ];
    }

}