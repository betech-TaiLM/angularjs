<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Demo<span>ANGULARJS</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Load Ajax</li>
        <li class="nav-item">
          <a href="{{ route('test1') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Basic</span>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('test2') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Filter, OrderBy</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('test3') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">ng-if</span>
            </a>
          </li>
      </ul>
    </div>
  </nav>
