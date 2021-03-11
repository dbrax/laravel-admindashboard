<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax
 * Email: epmnzava@gmail.com
 * Objective : To be able to reuse basic components of data-tables
 */

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;

class TableComponet extends Component
{
    use WithPagination;


    public $columns;

    public $table_title;

    public $data_query;



    public function render()
    {
        // return view('livewire.table.table-componet');
    }
}
