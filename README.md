# Stacks

- Laravel v10.38.2
- Laravel Livewire v3.3.3
- Alpine JS v3.13.0
- Tailwind CSS v3.3.3

# Learning Progress

Learning TALL stack

## Day 1 (16/09/2023)

### Installation

- composer create-project laravel/laravel bank-tanya
- composer require livewire/livewire laravel-frontend-presets/tall
- php artisan ui tall --auth
- npm install

### Development

- https://github.com/laravel-frontend-presets/tall/issues/135#issuecomment-1719402789
- php artisan livewire:publish --config
- php artisan optimize && php artisan optimize:clear
- npm run dev

This will Hot Module Replacement. You don't need to access http://localhost:5173/. Just run `php artisan serve` then access http://127.0.0.1:8000/

- php artisan make:model Question -mc
- php artisan make:model Questioner -mc
- php artisan make:model Answerer -mc
- php artisan make:model QuestionCategory -mc
- php artisan make:model QuestionTag -mc

## Day 2 (26/12/2023)

### Development

- Learn Livewire Title attribute
- Convert unnecessary livewires into blade components

## Day 3 (01/01/2024)

### Development

- I have no idea what I built so I decided to make a simple QnA platform consisting of all Livewire docs
- I learned: 
  - Using wire:keys on loops
  - wire:model synced with property, but doesn't update lively
  - wire:model.live synced with property, and live updates
- Question page: Question title reference -> Stackoverflow
