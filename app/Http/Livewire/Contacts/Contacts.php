<?php


namespace App\Http\Livewire\Contacts;

use App\Models\Contact;
use App\Models\Host;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use function PHPUnit\Framework\isEmpty;

class Contacts extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $contacts, $message,$ts_link,$tg_link, $web_link, $ios_review, $tv_review, $public, $contact_id;
    public $isOpen = 0;

    public function render()
    {
        $this->contacts = Contact::all()->first();
        return view('livewire.contacts.contacts');
    }

    public function store()
    {
        $this->validate([
            'message' => 'required',
            'ts_link' => 'required',
            'tg_link' => 'required',
            'web_link' => 'required',
            'ios_review' => 'required',
            'tv_review' => 'required',
            'public' => 'required'
        ]);

        Contact::updateOrCreate(['id' => 1], [
            'message' => $this->message,
            'ts_link' => $this->ts_link,
            'tg_link' => $this->tg_link,
            'web_link' => $this->web_link,
            'public' => $this->public,
            'ios_review' => $this->ios_review,
            'tv_review' => $this->tv_review,
        ]);

        session()->flash('message',
            'Contact Updated Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        session()->flash('message', 'Contact Deleted Successfully.');
    }

    public function edit()
    {
        Contact::all()->first()->update($this->validateIt());

        $this->openModal();
    }
    public function validateIt(): array
    {
        $arr = array();
        if($this->message != null){
            $arr["message"] = $this->message;
        }
        if($this->tg_link != null){
            $arr["tg_link"] = $this->tg_link;
        }
        if($this->ts_link != null){
            $arr["ts_link"] = $this->ts_link;
        }
        if($this->web_link != null){
            $arr["web_link"] =  $this->web_link;
        }
        return $arr;
    }


    public function enableTV($b)
    {
        Contact::all()->first()
            ->update(['tv_review' => $b]);

        $this->openModal();
    }

    public function enableIos($b)
    {
        Contact::all()->first()
            ->update(['ios_review' => $b]);

        $this->openModal();
    }

    public function enablePublic($b)
    {
        Contact::all()->first()
            ->update(['public' => $b]);

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
        $this->message = null;
        $this->tg_link = null;
        $this->ts_link = null;
        $this->web_link = null;
        $this->ios_review = null;
        $this->tv_review = null;
        $this->public = null;
    }
}
