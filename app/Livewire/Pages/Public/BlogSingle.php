<?php

namespace App\Livewire\Pages\Public;

use App\Models\Post;
use Livewire\Component;

class BlogSingle extends Component
{
    public Post $post;


    public function mount($id)
    {
        $this->post = Post::find($id);
    }

    public function render()
    {
        return view('livewire.pages.public.blog-single');
    }
}
