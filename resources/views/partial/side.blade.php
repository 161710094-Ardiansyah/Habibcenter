<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://instagram.com/habibcenter" class="brand-link">
      <img src="{{asset('assets/dist/img/habib.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> HABIB CENTER</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/admin.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/home" class="d-block">Admin </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-header">Tables</li>
          <li class="nav-item">
            <a href="{{ route('content.index') }}" class="nav-link">
              <i class="fa fa-home"></i>
              <p class="text">Content</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('biografi.index') }}" class="nav-link">
              <i class="fa fa-id-badge"></i>
              <p>Profil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('artikel.index') }}" class="nav-link">
              <i class="fa fa-newspaper-o"></i>
              <p>Artikel</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('kategori.index') }}" class="nav-link">
              <i class="fa fa-server"></i>
              <p class="text">Kategori</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tag.index') }}" class="nav-link">
              <i class="fa fa-tags"></i>
              <p>Tag</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('listhome.index') }}" class="nav-link">
              <i class="fa fa-server"></i>
              <p>List Home</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ route('youtube.index') }}" class="nav-link">
              <i class="fa fa-youtube"></i>
              <p>Youtube</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>