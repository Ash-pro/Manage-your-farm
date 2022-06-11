<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li>
                    <select class="searchable-field form-control">

                    </select>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/product-categories*") ? "menu-open" : "" }} {{ request()->is("admin/product-tags*") ? "menu-open" : "" }} {{ request()->is("admin/products*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-shopping-cart">

                            </i>
                            <p>
                                {{ trans('cruds.productManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('product_category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-categories.index") }}" class="nav-link {{ request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder">

                                        </i>
                                        <p>
                                            {{ trans('cruds.productCategory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.product-tags.index") }}" class="nav-link {{ request()->is("admin/product-tags") || request()->is("admin/product-tags/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-folder">

                                        </i>
                                        <p>
                                            {{ trans('cruds.productTag.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('product_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is("admin/products") || request()->is("admin/products/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-shopping-cart">

                                        </i>
                                        <p>
                                            {{ trans('cruds.product.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('oders_protect_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.oders-protects.index") }}" class="nav-link {{ request()->is("admin/oders-protects") || request()->is("admin/oders-protects/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-store-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.odersProtect.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('garden_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/galleries*") ? "menu-open" : "" }} {{ request()->is("admin/request-a-services*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-globe-africa">

                            </i>
                            <p>
                                {{ trans('cruds.garden.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('gallery_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.galleries.index") }}" class="nav-link {{ request()->is("admin/galleries") || request()->is("admin/galleries/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-camera-retro">

                                        </i>
                                        <p>
                                            {{ trans('cruds.gallery.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('request_a_service_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.request-a-services.index") }}" class="nav-link {{ request()->is("admin/request-a-services") || request()->is("admin/request-a-services/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-users">

                                        </i>
                                        <p>
                                            {{ trans('cruds.requestAService.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('agricultural_project_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.agricultural-projects.index") }}" class="nav-link {{ request()->is("admin/agricultural-projects") || request()->is("admin/agricultural-projects/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-box-open">

                            </i>
                            <p>
                                {{ trans('cruds.agriculturalProject.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('agricultural_treatment_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/common-diseases*") ? "menu-open" : "" }} {{ request()->is("admin/ask-consultations*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-briefcase-medical">

                            </i>
                            <p>
                                {{ trans('cruds.agriculturalTreatment.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('common_disease_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.common-diseases.index") }}" class="nav-link {{ request()->is("admin/common-diseases") || request()->is("admin/common-diseases/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-bug">

                                        </i>
                                        <p>
                                            {{ trans('cruds.commonDisease.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('ask_consultation_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.ask-consultations.index") }}" class="nav-link {{ request()->is("admin/ask-consultations") || request()->is("admin/ask-consultations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user-clock">

                                        </i>
                                        <p>
                                            {{ trans('cruds.askConsultation.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('contact_us_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.contactuses.index") }}" class="nav-link {{ request()->is("admin/contactuses") || request()->is("admin/contactuses/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon far fa-envelope">

                            </i>
                            <p>
                                {{ trans('cruds.contactUs.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
