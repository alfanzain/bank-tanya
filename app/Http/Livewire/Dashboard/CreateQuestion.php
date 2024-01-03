<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Question;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateQuestion extends Component
{
    #[Title('Create Question')]
    public string $title;
    public string $description;
    public string $category;
    public string $tags;

    public function save()
    {
        dd($this->title, $this->description, $this->category, $this->tags);

        // Question::create();

        return back()->with('status', "Your question have been successfully created!");
    }

    public function render()
    {
        return view('livewire.dashboard.create-question');
    }
}
