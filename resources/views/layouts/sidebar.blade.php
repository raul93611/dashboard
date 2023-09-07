<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="{{route('home')}}" class="brand-link">
    <img src="{{asset('storage/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <x-sidebar.dropdown-sidebar :isActive="request()->is('chirps*') ? true : false">
          <x-slot:dropdownIcon>
            <i class="nav-icon fas fa-th"></i>
          </x-slot:dropdownIcon>
          <x-slot:title>
            Chirps
          </x-slot:title>
            <x-sidebar.nav-link :href="route('chirps.index')" class="{{request()->is('chirps') ? 'active' : ''}}">
              <x-slot:icon>
                <i class="far fa-circle nav-icon"></i>
              </x-slot:icon>
              Index
            </x-sidebar.nav-link>
            <x-sidebar.nav-link href="">
              <x-slot:icon>
                <i class="far fa-circle nav-icon"></i>
              </x-slot:icon>
              Dashboard v2
            </x-sidebar.nav-link>
        </x-sidebar.dropdown-sidebar>
        <x-sidebar.nav-link href="">
          <x-slot:icon>
            <i class="far fa-circle nav-icon"></i>
          </x-slot:icon>
          Single link
          <x-slot:badge>
            12
          </x-slot:badge>
        </x-sidebar.nav-link>
      </ul>
    </nav>
  </div>
</aside>