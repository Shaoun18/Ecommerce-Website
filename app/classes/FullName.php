<?php
namespace App\classes;

class FullName
{
    public $firstname;
    public $lastname;
    public $fullname;

    public function __construct($post)
    {
        $this->firstname = $post['first_name'];
        $this->lastname  = $post['last_name'];

    }

    public function makefullname()
    {
        $this->fullname = $this->firstname . '' . $this->lastname;
        return $this->fullname;
    }

}
