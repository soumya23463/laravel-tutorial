<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alerts extends Component
{
    /**
     * Create a new component instance.
     */
    // public $type;
    // public $message;
    protected $types = [
        'info',
        'success',
        'danger'
    ];
    public function __construct(public string $type = "info", public string $message = "No message")
    {
        // $this->type = $type;
        // $this->message = $message;
    }

    public function validType()
    {
        return in_array($this->type, $this->types) ? $this->type : "info";
    }

    /**
     * The component's view.
     *
     * @var string
     */


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerts');
    }
}