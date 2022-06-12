<?php

namespace App\classes;

class slider
{
    public  $slide;

    public  function getslider(){
        $this->slide=[
          0=>[
              'image' => 'nature.jpg',
              'name' => 'This is a carousel one',
              'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto incidunt laudantium
                        perspiciatis rerum similique suscipit temporibus, veniam vitae voluptatem? Aliquam aperiam,
                        architecto at dolore eligendi est harum placeat sunt?',
              'button'=> 'Deatils'
          ],
            1=>[
                'image' => 'nature1.jpg',
                'name' => 'This is a carousel Two',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto incidunt laudantium
                        perspiciatis rerum similique suscipit temporibus, veniam vitae voluptatem? Aliquam aperiam,
                        architecto at dolore eligendi est harum placeat sunt?',
                'button'=> 'Deatils'
            ],
            2=>[
                'image' => 'nature2.jpg',
                'name' => 'This is a carousel Three',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto incidunt laudantium
                        perspiciatis rerum similique suscipit temporibus, veniam vitae voluptatem? Aliquam aperiam,
                        architecto at dolore eligendi est harum placeat sunt?',
                'button'=> 'Deatils'
            ]
        ];
        return $this->slide;
    }
}