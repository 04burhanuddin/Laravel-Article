<?php

namespace App\Http\Livewire\Article;

use App\Models\Article as ModelsArticle;
use Livewire\Component;

class Article extends Component
{
    public $article;
    public function render()
    {
        $this->article = ModelsArticle::all();
        return view('livewire.article.article')->layout('layouts.guest');
    }
}
