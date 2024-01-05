<?php

namespace App\Livewire\Forms;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class QuestionForm extends Form
{
    public ?Question $question;

    #[Validate('required', message: 'Please provide a title')]
    #[Validate('min:15', message: 'This title is too short')]
    #[Validate('max:150', message: 'This title is too loooong')]
    public string $title = '';

    #[Validate('required', message: 'Please provide a description')]
    #[Validate('min:1')]
    #[Validate('max:30000', message: 'This description is too loooong')]
    public string $description = '';

    #[Validate('required', message: 'Please provide a category')]
    #[Validate('max:20', message: 'This description is too loooong')]
    public string $category = '';

    public ?string $tags;
    public string $status = 'UNANSWERED';
    public ?int $authorId;

    public function setQuestion(Question $question)
    {
        $this->question = $question;

        $this->title = $question->title;
        $this->description = $question->description;
        $this->category = $question->category;
        $this->tags = $question->tags;
        $this->status = $question->status;
        $this->authorId = $question->author_id;
    }

    public function store()
    {
        $this->validate();

        Question::create([
            ...$this->except('authorId'),
            'author_id' => Auth::user()->id,
        ]);

        $this->reset();
    }

    public function update()
    {
        $this->question->update([
            ...$this->except('authorId'),
            'author_id' => Auth::user()->id,
        ]);

        $this->reset();
    }
}
