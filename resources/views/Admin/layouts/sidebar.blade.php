
<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="mdi mdi-home"></i><span class="badge badge-primary float-right">3</span> <span> Dashboard </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{  route('admin.product') }}">
                        <i class="fas fa-building"></i>
                        <span>Products</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{  route('warranty.index') }}">
                        <i class="fas fa-building"></i>
                        <span> Warranty</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.contact-us')}}">
                        <i class="fas fa-building"></i>
                        <span>Orion Queries</span>
                    </a>
                </li>


                   <li class="nav-item">
                    <a class="nav-link" href="{{route('specification')}}">
                        <i class="fas fa-building"></i>
                        <span>Add Category</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
