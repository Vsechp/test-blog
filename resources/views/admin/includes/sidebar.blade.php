<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
                <a href="{{route ('main.index')}}" class="nav-link">
                    <i class="fas fa-igloo"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route ('user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route ('post.index')}}" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                        Posts
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route ('category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-grip-vertical"></i>
                    <p>
                        Categories
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route ('tag.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-user-tag"></i>
                    <p>
                        Tags
                    </p>
                </a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
