<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     * 
     */
    public $alert;
    public $message;
    public function __construct($alert,$message )
    {
        //
        $this->alert=$alert;
        $this->message=$message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {

        $type = $this->alert; //error info warning
        $message = $this->message;
        return view('components.alert', ['alert_type' => $type, 'message' => $message]);
    }
}
