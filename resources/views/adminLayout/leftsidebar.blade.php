 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/hellokitty.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Maisha Zaman</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{request()->is('admin') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin') ? 'active' : ''}} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin')}}" class="nav-link {{request()->is('admin') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
    
          <li class="nav-item has-tree-view {{request()->is('addcategory') ? 'menu-open' : ''}} {{request()->is('categories') ? 'menu-open' : ''}}" >
            <a href="#" class="nav-link  {{request()->is('addcategory') ? 'active' : ''}} {{request()->is('categories') ? 'active' : ''}} ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/addcategory')}}" class="nav-link  {{request()->is('addcategory') ? 'active' : ''}}">
                  <i class="far fa-files nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/categories')}}" class="nav-link  {{request()->is('categories') ? 'active' : ''}}">
                  <i class="far fa-files nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
            </ul>

            <li class="nav-item has-treeview {{request()->is('orders') ? 'menu-open' : ''}} ">
                <a href="#" class="nav-link {{request()->is('orders') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Orders
                    <i class="right fas fa-angle-left"></i>
                  </p>
                
                </a>
                
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/orders')}}" class="nav-link {{request()->is('orders') ? 'active' : ''}}">
                      <i class="far fa-files nav-icon"></i>
                      <p>Orders</p>
                    </a>
                    
                  </li>  
                         
            </ul>  
              <li class="nav-item has-treeview  {{request()->is('addproduct') ? 'menu-open' : ''}} {{request()->is('products') ? 'menu-open' : ''}}">
                <a href="#" class="nav-link {{request()->is('addproduct') ? 'active' : ''}} {{request()->is('products') ? 'active' : ''}}">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Products
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/addproduct')}}" class="nav-link {{request()->is('addproduct') ? 'active' : ''}} ">
                      <i class="far fa-files nav-icon"></i>
                      <p>Add Product</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/products')}}" class="nav-link {{request()->is('products') ? 'active' : ''}} ">
                      <i class="far fa-files nav-icon"></i>
                      <p>Products</p>
                    </a>
                  </li>
                </ul>

                  <li class="nav-item has-treeview  {{request()->is('addslider') ? 'menu-open' : ''}} {{request()->is('sliders') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{request()->is('addslider') ? 'active' : ''}} {{request()->is('sliders') ? 'active' : ''}}">
                      <i class="nav-icon fas fa-folder"></i>
                      <p>
                        Sliders
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('/addslider')}}" class="nav-link {{request()->is('addslider') ? 'active' : ''}} ">
                          <i class="far fa-files nav-icon"></i>
                          <p>Add Slider</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('/sliders')}}" class="nav-link {{request()->is('sliders') ? 'active' : ''}} ">
                          <i class="far fa-files nav-icon"></i>
                          <p>Sliders</p>
                        </a>
                      </li>
                    </ul>
                      

    
    
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
