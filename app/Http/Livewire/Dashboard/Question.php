<?php

namespace App\Http\Livewire\Dashboard;

use Illuminate\Support\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;

class Question extends Component
{
    #[Title('Questions')]
    public Collection $questions;

    public function mount()
    {
        $this->questions = collect([
            (object) [
                'author_name' => 'John Michael',
                'author_email' => 'john@creative-tim.com',
                'author_avatar' => '../assets/img/team-1.jpg',
                'question_title' => 'Why isn\'t my component live updating as I type?',
                'question_category' => 'Livewire',
                'question_tags' => collect((object) [
                    'Laravel',
                    'Livewire',
                    'PHP',
                ]),
                'question_status' => 'ANSWERED',
                'created_at' => '2023-12-30 23:17',
            ],
            (object) [
                'author_name' => 'Laurent Perrier',
                'author_email' => 'laurent@creative-tim.com',
                'author_avatar' => '../assets/img/team-3.jpg',
                'question_title' => 'Why isn\'t my component live updating as I type?',
                'question_category' => 'Livewire',
                'question_tags' => collect((object) [
                    'Laravel',
                    'Livewire',
                    'PHP',
                ]),
                'question_status' => 'UNANSWERED',
                'created_at' => '2023-12-30 23:17',
            ],
            (object) [
                'author_name' => 'Michael Levi',
                'author_email' => 'michael@creative-tim.com',
                'author_avatar' => '../assets/img/team-4.jpg',
                'question_title' => 'Why isn\'t my component live updating as I type?',
                'question_category' => 'Livewire',
                'question_tags' => collect((object) [
                    'Laravel',
                    'Livewire',
                    'PHP',
                ]),
                'question_status' => 'ANSWERED',
                'created_at' => '2023-12-30 23:17',
            ],
            (object) [
                'author_name' => 'Richard Gran',
                'author_email' => 'richard@creative-tim.com',
                'author_avatar' => '../assets/img/team-1.jpg',
                'question_title' => 'Why isn\'t my component live updating as I type?',
                'question_category' => 'Livewire',
                'question_tags' => collect((object) [
                    'Laravel',
                    'Livewire',
                    'PHP',
                ]),
                'question_status' => 'UNANSWERED',
                'created_at' => '2023-12-30 23:17',
            ],
            (object) [
                'author_name' => 'Miriam Eric',
                'author_email' => 'miriam@creative-tim.com',
                'author_avatar' => '../assets/img/team-2.jpg',
                'question_title' => 'Why isn\'t my component live updating as I type?',
                'question_category' => 'Livewire',
                'question_tags' => collect((object) [
                    'Laravel',
                    'Livewire',
                    'PHP',
                ]),
                'question_status' => 'UNANSWERED',
                'created_at' => '2023-12-30 23:17',
            ],
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.question');
    }
}
