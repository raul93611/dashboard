<div>
  <div class="row mt-4">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-12">
          <div class="timeline">
            @foreach ($chirps as $chirp)
            <div wire:key="{{ $chirp->id }}">
              <i class="fas fa-user bg-blue"></i>
              <div class="timeline-item">
                <span class="time"><i class="fas fa-clock"></i>{{$chirp->created_at->format('Y-m-d H:i')}}</span>
                <h3 class="timeline-header">{{$chirp->user->name}}</h3>
                <div class="timeline-body">
                  {!! nl2br(e($chirp->message)) !!}
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-sm">Edit</a>
                  <a class="btn btn-danger btn-sm">Delete</a>
                </div>
              </div>
            </div>
            @endforeach
            <div>
              <i class="fas fa-clock bg-gray"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>