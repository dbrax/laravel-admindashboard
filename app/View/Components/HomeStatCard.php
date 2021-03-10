<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class HomeStatCard extends Component
{

    public $hide_card_icon;

    public $default_stats;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

        
        $this->hide_card_icon=1;

    // this statistic card can be customized to a given need
        $this->default_stats=[

            [
                "title"=>"Total Users",
                "modal_count"=>User::count()
    
    
            ],

            [
                "title"=>"Sales",
                "modal_count"=>100
    
    
            ],

            [
                "title"=>"Orders",
                "modal_count"=>0
    
    
            ],

            [
                "title"=>"Expense",
                "modal_count"=>40
    
    
            ],
            

    
    
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.home-stat-card');
    }
}
