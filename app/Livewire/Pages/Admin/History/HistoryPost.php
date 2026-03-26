<?php

namespace App\Livewire\Pages\Admin\History;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Component;

class HistoryPost extends Component
{
    public $post;

    public function posts()
    {
        return Post::onlyTrashed()
            ->latest('created_at')
            ->get();
    }

    public function restore($id)
    {
        Post::withTrashed()->findOrFail($id)->restore();
    }
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.pages.admin.history.history-post');
    }
}
