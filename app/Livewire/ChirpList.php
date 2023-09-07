<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chirp;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class ChirpList extends Component {
  use WithPagination;

  #[On('newChirpFormSubmitted')] 
  public function render() {
    $chirps = Chirp::with('user')->latest()->paginate(2);
    return view('livewire.chirp-list', [
      'chirps' => $chirps
    ]);
  }
}
