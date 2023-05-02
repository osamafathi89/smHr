<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/admin/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">شئون الموظفين</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/admin/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                بيانات الموظفين
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/employee/create" class="nav-link active">
                  <i class="nav-icon fas fa-save"></i>
                  <p>أضافة موظف</p>
                </a>
              </li>



              <li class="nav-item">
                <a href="/addsalary/create" class="nav-link active">
                  <i class="nav-icon fas fa-save"></i>
                  <p>أضافة حافز</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="/salayminus/create" class="nav-link active">
                  <i class="nav-icon fas fa-save"></i>
                  <p>أضافة جزاء</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ route('leavereson.create') }}" class="nav-link active">
                  <i class="nav-icon fas fa-save"></i>
                  <p>أضافة نوع ترك عمل</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ route('holi.create') }}" class="nav-link active">
                  <i class="nav-icon fas fa-save"></i>
                  <p>أضافة نوع أجازة </p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ route('formal.create') }}" class="nav-link active">
                  <i class="nav-icon fas fa-save"></i>
                  <p>أضافة أجازة رسمية</p>
                </a>
              </li>


            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
