<?php

namespace App\Http\Livewire\Admin\Reward;

use App\Models\Reward;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $eward_id;

    public function deleteReward($reward_id)
    {
    
        $this->reward = $reward_id;
    }
    public function destroyReward()
    {
        $reward = Reward::find($this->reward_id) ;
        $user->delete();
        session()->flash('message','Reward has been deleted ');
    }
    public function render()
    {
       
        $rewards = Reward::orderBy('reward_id','DESC')->paginate(10);
        return view('livewire.admin.reward.index',['rewards' => $rewards]);
    }
}
