<div>
  <div class="modal-body">
    <form id="new-chirp-form" method="POST" wire:submit="store">
      @csrf
      <textarea name="message" rows="3" wire:model="message" placeholder="{{ __('What\'s on your mind?') }}"
        class="form-control">{{ old('message') }}</textarea>
      @error('message')
      <span class="text-danger" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </form>
  </div>
  <div class="modal-footer">
    <button type="submit" form="new-chirp-form" class="btn btn-primary">Save</button>
  </div>
</div>