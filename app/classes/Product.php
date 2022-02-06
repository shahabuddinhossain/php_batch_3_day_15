<?php


namespace App\classes;


class Product
{
    protected $product;
    protected $products =
        [
            0   =>
                [
                    'name'          => 'Product name: 00',
                    'price'         => '100',
                    'brand'         => 'brand 00',
                    'category'      => 'category 00',
                    'description'   => 'description 00',
                    'image'         => 'assets/img/pi00.jpg',
                    'id'            => '00',
                ],
            1   =>
                [
                    'name'          => 'Product name: 01',
                    'price'         => '100',
                    'brand'         => 'brand 01',
                    'category'      => 'category 01',
                    'description'   => 'description 01',
                    'image'         => 'assets/img/pi01.jpg',
                    'id'            => '01',
                ],
            2   =>
                [
                    'name'          => 'Product name: 02',
                    'price'         => '100',
                    'brand'         => 'brand 02',
                    'category'      => 'category 02',
                    'description'   => 'description 02',
                    'image'         => 'assets/img/pi02.jpg',
                    'id'            => '02',
                ],
            3   =>
                [
                    'name'          => 'Product name: 03',
                    'price'         => '100',
                    'brand'         => 'brand 03',
                    'category'      => 'category 03',
                    'description'   => 'description 03',
                    'image'         => 'assets/img/pi03.jpg',
                    'id'            => '03',
                ],
            4   =>
                [
                    'name'          => 'Product name: 04',
                    'price'         => '100',
                    'brand'         => 'brand 04',
                    'category'      => 'category 04',
                    'description'   => 'description 04',
                    'image'         => 'assets/img/pi04.jpg',
                    'id'            => '04',
                ],
            5   =>
                [
                    'name'          => 'Product name: 05',
                    'price'         => '100',
                    'brand'         => 'brand 05',
                    'category'      => 'category 05',
                    'description'   => 'description 05',
                    'image'         => 'assets/img/pi05.jpg',
                    'id'            => '05',
                ],
            6   =>
                [
                    'name'          => 'Product name: 06',
                    'price'         => '100',
                    'brand'         => 'brand 06',
                    'category'      => 'category 06',
                    'description'   => 'description 06',
                    'image'         => 'assets/img/pi06.jpg',
                    'id'            => '06',
                ],
            7   =>
                [
                    'name'          => 'Product name: 07',
                    'price'         => '100',
                    'brand'         => 'brand 07',
                    'category'      => 'category 07',
                    'description'   => 'description 07',
                    'image'         => 'assets/img/pi07.jpg',
                    'id'            => '07',
                ],
            8   =>
                [
                    'name'          => 'Product name: 08',
                    'price'         => '100',
                    'brand'         => 'brand 08',
                    'category'      => 'category 08',
                    'description'   => 'description 08',
                    'image'         => 'assets/img/pi08.jpg',
                    'id'            => '08',
                ],
            9   =>
                [
                    'name'          => 'Product name: 09',
                    'price'         => '100',
                    'brand'         => 'brand 09',
                    'category'      => 'category 09',
                    'description'   => 'description 09',
                    'image'         => 'assets/img/pi09.jpg',
                    'id'            => '09',
                ],
            10   =>
                [
                    'name'          => 'Product name: 10',
                    'price'         => '100',
                    'brand'         => 'brand 10',
                    'category'      => 'category 10',
                    'description'   => 'description 10',
                    'image'         => 'assets/img/pi10.jpg',
                    'id'            => '10',
                ],
            11   =>
                [
                    'name'          => 'Product name: 11',
                    'price'         => '100',
                    'brand'         => 'brand 11',
                    'category'      => 'category 11',
                    'description'   => 'description 11',
                    'image'         => 'assets/img/pi11.jpg',
                    'id'            => '11',
                ],

        ];

    public function getAllProducts()
    {
        return $this->products;

    }

    public function productDetails ($id)
    {
        foreach ($products as $p)
        {
            if ($id == $p['id'])
            {
                $this->product =
                    [
                        'name'          => $p['name'],
                        'price'         => $p['price'],
                        'brand'         => $p['brand'],
                        'category'      => $p['category'],
                        'description'   => $p['description'],
                        'image'         => $p['image'],
                        'id'            => $p['id'],
                    ];


            }
        }

        return $this->product;

    }

}