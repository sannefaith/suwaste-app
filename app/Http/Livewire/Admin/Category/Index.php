<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Wasteitem;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $student_id;

    public function deleteItem($item_id)
    {
    
        $this->item_id = $item_id;
    }
    public function destroyItem()
    {
        $wasteitem = Wasteitem::find($this->item_id) ;
        $wasteitem->delete();
        session()->flash('message','Item has been deleted ');
    }
    public function render()
    {
       
        $wasteitems = Wasteitem::orderBy('item_id','DESC')->paginate(10);
        return view('livewire.admin.category.index',['wasteitems' => $wasteitems]);
    }
}
