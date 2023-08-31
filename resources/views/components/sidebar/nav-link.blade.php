<li class="nav-item">
  <a {{ $attributes->merge(['class' => 'nav-link']) }} href="{{$href}}">
    {{$icon}}
    <p>
      {{$slot}}
      @isset($badge)
      <span class="right badge badge-danger">{{$badge}}</span>
      @endisset
    </p>
  </a>
</li>