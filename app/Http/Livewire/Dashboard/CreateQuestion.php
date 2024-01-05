<?php

namespace App\Http\Livewire\Dashboard;

use App\Livewire\Forms\QuestionForm;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateQuestion extends Component
{
    public QuestionForm $form;

    public function save()
    {
        $this->form->store();

        return redirect()
            ->to('/questions')
            ->with('status', 'Your question have been successfully created!');
    }

    #[Title('Create Question')]
    public function render()
    {
        return view('livewire.dashboard.create-question');
    }
}
