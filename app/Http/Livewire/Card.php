<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public string $title = 'Game title';
    public string $desc = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec orci ac ante pellentesque
    sagittis. Curabitur at ultrices ante. Nunc at ante pretium, sagittis lorem id, commodo magna. Cras a sapien sed
    ipsum ultricies finibus nec tempus ex. In eget enim et tellus tempor sagittis. Maecenas cursus volutpat semper.
    Nunc viverra, massa in aliquet imperdiet, dolor nulla interdum ligula, vitae ultrices libero erat at nunc.
    Suspendisse congue ligula nec lacus commodo sollicitudin.';
    public string $thumb = 'https://picsum.photos/600/300';
    public string $category = 'category';
    public string $console = 'console';
    public bool $onSale = false;
    public bool $showCode = false;


    public function render()
    {
        return view('livewire.card');
    }
}
