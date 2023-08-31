<li class="nav-item {{$isActive ? 'menu-open' : ''}}">
  <a href="#" class="nav-link {{$isActive ? 'active' : ''}}">
    {{$dropdownIcon}}
    <p>
      {{$title}}
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    {{$slot}}
  </ul>
</li>