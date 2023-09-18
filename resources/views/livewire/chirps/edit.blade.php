<div>
  <div class="modal-body">
    <form id="edit-chirp-form" method="POST" wire:submit="update">
      @csrf
      <textarea name="message" rows="3" wire:model="message" placeholder="{{ __('What\'s on your mind?') }}"
        class="form-control"></textarea>
      @error('message')
      <span class="text-danger" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </form>
  </div>
  <div class="modal-footer">
    <button type="submit" form="edit-chirp-form" class="btn btn-primary">Save</button>
  </div>
</div>