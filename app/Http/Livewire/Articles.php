<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
class Articles extends Component
{
    public $title;
    public $article_id;
    public $isOpen = 0;


    public function render()
    {
        return view('livewire.articles');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->title = '';
        $this->article_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function store()
    {
        $this->validate([
            'title' => 'required|unique:articles,title,' . $this->article_id,
        ]);
        $data = array(
            'title' => $this->title
        );
        $article = Article::updateOrCreate(['id' => $this->article_id], $data);
        session()->flash('message', $this->article_id ? 'Article updated successfully.' : 'Article created successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $this->article_id = $id;
        $this->title = $article->title;
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        $this->article_id = $id;
        Article::find($id)->delete();
        session()->flash('message', 'Article deleted successfully.');
    }

}
