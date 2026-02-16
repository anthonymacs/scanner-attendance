<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ConfirmationModal extends Component
{
    public bool $show = false;
    public string $title = '';
    public string $message = '';
    public string $confirmText = 'Confirm';
    public string $cancelText = 'Cancel';
    public string $variant = 'danger';
    public string $eventName = '';
    public array $eventParams = [];
    protected $listeners = ['showConfirmationModal'];

    public function showConfirmationModal(
        string $title,
        string $message,
        string $eventName,
        array $eventParams = [],
        string $confirmText = 'Confirm',
        string $cancelText = 'Cancel',
        string $variant = 'danger'
    ): void {
        $this->title = $title;
        $this->message = $message;
        $this->eventName = $eventName;
        $this->eventParams = $eventParams;
        $this->confirmText = $confirmText;
        $this->cancelText = $cancelText;
        $this->variant = $variant;
        $this->show = true;
    }

    public function confirm(): void
    {
        $this->dispatch($this->eventName, ...$this->eventParams);
        $this->closeModal();
    }

    public function closeModal(): void
    {
        $this->show = false;
        $this->reset([
            'title',
            'message',
            'confirmText',
            'cancelText',
            'variant',
            'eventName',
            'eventParams',
        ]);
    }

    public function render()
    {
        return view('livewire.components.confirmation-modal');
    }
}
