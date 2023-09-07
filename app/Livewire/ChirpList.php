<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chirp;
use Livewire\Attributes\On;

class ChirpList extends Component {
  public $chirps;

  #[On('newChirpFormSubmitted')] 
  public function render() {
    $this->chirps = Chirp::with('user')->latest()->get();
    return view('livewire.chirp-list');
  }
}
