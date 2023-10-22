    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin.home') }}" class="brand-link">
            <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.sliders.index') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Sliders
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.practices.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-fan"></i>
                        <p>
                            Practices
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.banners.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-paint-roller"></i>
                        <p>
                            Banners
                        </p>
                    </a>
                </li>
                {{-- About --}}
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            About
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.company.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Company</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.abouts.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Why Choose Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.brends.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Brend</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.clients.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>What Client Says</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.news.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recent News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.jacsons.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jacson Kalish</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Blog --}}
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blogs.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tags.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tags</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Elements --}}
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Elements
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.textsamples.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Text Sample</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.leftaligned.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Left Aligned</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.rightaligned.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Right Aligned</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.definitions.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Definition</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.blockquotes.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Block Quotes</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Contact --}}
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fa fa-bars"></i>
                        <p>
                            Contact
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.iframes.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Iframe</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.address.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Address</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
