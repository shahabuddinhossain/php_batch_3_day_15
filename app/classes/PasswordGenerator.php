<?php


namespace App\classes;


class PasswordGenerator
{
    protected $length;
    protected $data = [];
    protected $password;
    protected $i;
    protected $index;


    public function __construct($post=null)
    {
        $this->length = $post['password_length'];
    }

    public function newPassword ()
    {

        $this->data = ['#','@','1','A','a','!','$','%','^','&','*','(',')','1','2','3','4','5','6','7','8','9','0','b','c','d','e', ];

        for ($this->i=0; $this->i < $this->length; $this->i++ )
        {
            $this->index = rand(0,sizeof($this->data)-1);
            $this->password .= $this->data[$this->index];


        }

        /*return $this->password;*/
        return
        [
            "length"    => $this->length,
            "password"  => $this->password,

        ];
    }

}