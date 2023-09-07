<x-app-layout>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Chirps</h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <button id="add-chirp-button" type="button" class="btn btn-primary">
            <i class="fas fa-plus"></i> New Chirp
          </button>
        </div>
      </div>
      <livewire:chirp-list>
      </livewire:chirp-list>
    </div>
  </section>
  <x-modal :id="'new-chirp-modal'" :title="'New Chirp'">
    <livewire:create-chirp>
    </livewire:create-chirp>
  </x-modal>
</x-app-layout>