<?php

namespace App\classes;

class Caregory
{
    public  $categories;
    public function getAllCategory(){
        $this->categories= [
            0=>[
                'id' => 1,
                'name' => 'Electronics'

            ],
            1=>[
                'id' => 2,
                'name' => 'Man Fashion'

            ],
            2=>[
                'id' => 3,
                'name' => 'Woman Fashion'
            ],
            3=>[
                'id' => 4,
                'name' => 'Car Collection'
            ],
        ];
        return $this->categories;
    }

}