<?php

namespace App\Http\Livewire;

use App\Models\job;
use Livewire\Component;

class ListJob extends Component
{
    public $jobs;

    public function mount() {
        $this->jobs = Job::where("job_type_id", 1)->get();
    }

    public function featured() {
//        $this->jobs = "";
        $this->jobs = Job::where("job_type_id", 1)->get();
    }

    public function fullTime() {
//        $this->jobs = "";
        $this->jobs = Job::where("job_type_id", 2)->get();
    }
    public function partTime() {
//        $this->jobs = "";
        $this->jobs = Job::where("job_type_id", 3)->get();
    }
    public function render()
    {
        return view('livewire.list-job');
    }
}
