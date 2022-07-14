<?php
namespace App\Http\Livewire\Hosts;


use App\Models\Image;
use App\Models\Host;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Hosts extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $title, $link, $host_id;

    public $isOpen = 0;

    public function render()
    {
        return view('livewire.hosts.hosts', [
            'hosts' => Host::orderBy('id', 'desc')->paginate(),
        ]);
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        // Update or Insert Host
        $post = Host::updateOrCreate(['id' => $this->host_id], [
            'title' => $this->title,
            'link' => $this->link,
        ]);




        session()->flash(
            'message',
            $this->host_id ? 'Host Updated Successfully.' : 'Host Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Host::find($id)->delete();
        session()->flash('message', 'Host Deleted Successfully.');
    }

    public function edit($id)
    {
        $host = Host::findOrFail($id);

        $this->host_id = $id;
        $this->title = $host->title;
        $this->link = $host->link;


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
        $this->title = null;
        $this->link = null;
        $this->host_id = null;
    }
}
