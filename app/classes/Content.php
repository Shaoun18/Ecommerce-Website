<?php

namespace App\classes;

class Content
{
    public $contentent;

    public function getcontent(){
        $this->contentent= [
            0=>[
                'id' => 1,
                'name' => 'This is a card header',
                'body' => 'This is a heading tag',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo maiores, neque?
                                Corporis
                                iusto laudantium, modi perferendis praesentium quidem tempora totam. Excepturi quam,
                                sapiente. Adipisci aut inventore molestiae non totam, vitae.',
                'footer' => 'This is a card footer'
            ],
            1=>[
                'name' => 'This is a card header',
                'body' => 'This is a heading tag',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo maiores, neque?
                                Corporis
                                iusto laudantium, modi perferendis praesentium quidem tempora totam. Excepturi quam,
                                sapiente. Adipisci aut inventore molestiae non totam, vitae.',
                'footer' => 'This is a card footer'
            ],
            2=>[
                'name' => 'This is a card header',
                'body' => 'This is a heading tag',
                'para' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo maiores, neque?
                                Corporis
                                iusto laudantium, modi perferendis praesentium quidem tempora totam. Excepturi quam,
                                sapiente. Adipisci aut inventore molestiae non totam, vitae.',
                'footer' => 'This is a card footer'
            ]
        ];
        return $this->contentent;
    }
}