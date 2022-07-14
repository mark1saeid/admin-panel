<?php

namespace App\Http\Livewire\IptvUsers;

use App\Models\IptvUser;
use Livewire\Component;

class IptvUsers extends Component
{
    public $users, $username,$user_id;
    public $isOpen = 0;

    public function render()
    {
        $this->users = IptvUser::all();
        return view('livewire.users.users');
    }

    public function store()
    {
        $this->validate([
            'username' => 'required',
        ]);

        IptvUser::updateOrCreate(['id' => $this->user_id], [
            'username' => $this->username,
        ]);

        session()->flash(
            'message',
            $this->id ? 'IptvUser Updated Successfully.' : 'IptvUser Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        IptvUser::find($id)->delete();
        session()->flash('message', 'IptvUser Deleted Successfully.');
    }

    public function edit($id)
    {
        $users = IptvUser::findOrFail($id);
        $this->user_id = $id;
        $this->username = $users->username;
        $this->openModal();
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->username = '';
    }
}
