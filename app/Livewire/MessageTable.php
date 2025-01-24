<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageTable extends Component
{
    public $search = '';
    public $type = 'all';
    public $order = 'desc';

    public function render()
    {
        $messages = null;
        if ($this->type == 'all') {
            $messages = Message::search($this->search)->orderBy('created_at', $this->order)->paginate(25);
        }
        if ($this->type == 'read') {
            $messages = Message::search($this->search)->where('is_read', true)->orderBy('created_at', $this->order)->paginate(25);
        }
        if ($this->type == 'unread') {
            $messages = Message::search($this->search)->where('is_read', false)->orderBy('created_at', $this->order)->paginate(25);
        }

        return view('livewire.message-table', compact('messages'));
    }

    
}


