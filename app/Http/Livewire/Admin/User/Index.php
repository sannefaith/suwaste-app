<?php

namespace App\Http\Livewire\Admin\User;
use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $student_id;

    public function deleteUser($student_id)
    {
    
        $this->student_id = $student_id;
    }
    public function destroyUser()
    {
        $user = User::find($this->student_id) ;
        $user->delete();
        session()->flash('message','User has been deleted ');
    }
    public function render()
    {
       
        $users = User::orderBy('student_id','DESC')->paginate(10);
        return view('livewire.admin.user.index',['users' => $users]);
    }
}
