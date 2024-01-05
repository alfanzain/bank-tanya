<?php

namespace App\Http\Livewire\Dashboard;

use App\Livewire\Forms\QuestionForm;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Question;

class EditQuestion extends Component
{
    public QuestionForm $form;

    public function mount(Question $question)
    {
        $this->form->setQuestion($question);
    }

    public function save()
    {
        $this->form->update();

        return redirect()
            ->to('/questions')
            ->with('status', 'Your question have been successfully updated!');
    }

    #[Title('Edit Question')]
    public function render()
    {
        return view('livewire.dashboard.edit-question');
    }
}
