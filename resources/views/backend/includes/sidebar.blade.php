<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                @lang('menus.backend.sidebar.general')
            </li>
            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/dashboard'))
                }}" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    @lang('menus.backend.sidebar.dashboard')
                </a>
            </li>

            <li class="nav-title">
                Website
            </li>

            <li class="nav-item nav-dropdown {{
                active_class(Route::is('admin/articles*'), 'open')
            }}">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-newspaper"></i>
                    Articles Management
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('admin.articles.news') }}" class="nav-link {{
                            active_class('admin/articles/news*')
                            }}">
                            News
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{
                active_class(Route::is('admin/career*'), 'open')
            }}">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-user-tie"></i>
                    Careers Management
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('admin.career') }}" class="nav-link {{
                            active_class(Route::is('admin/career*'))
                            }}">
                            All Careers
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{
                active_class(Route::is('admin/content*'), 'open')
            }}">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-columns"></i>
                    Content Management
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('admin.content.about.index') }}" class="nav-link {{
                            active_class(Route::is('admin/content/about*'))
                            }}">
                            About Content
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.content.company.index') }}" class="nav-link {{
                            active_class(Route::is('admin/content/company*'))
                            }}">
                            Company Content
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link {{
                    active_class(Route::is('admin/faq'))
                }}" href="{{ route('admin.faqs') }}">
                    <i class="nav-icon far fa-question-circle"></i>
                    Faq's Management
                </a>
            </li>

            <li class="nav-item nav-dropdown {{
                active_class(Route::is('admin/product*') || Route::is('admin/product/category*'), 'open')
            }}">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-user-tie"></i>
                    Products
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('admin.product.index') }}" class="nav-link {{
                            active_class(Route::is('admin/product*'))
                            }}">
                            All Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.product.category.index') }}" class="nav-link {{
                            active_class(Route::is('admin/product/category*'))
                            }}">
                            All Categories
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item nav-dropdown {{
                active_class(Route::is('admin/slider*'), 'open')
            }}">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon fas fa-images"></i>
                    Slider Management
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('admin.slider.banner') }}" class="nav-link {{
                            active_class(Route::is('admin/slider/banner*'))
                            }}">
                            Home Slider
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.slider.company') }}" class="nav-link {{
                            active_class(Route::is('admin/slider/company*'))
                            }}">
                            Company Slider
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.slider.teams') }}" class="nav-link {{
                            active_class(Route::is('admin/slider/teams*'))
                            }}">
                            Team Slider
                        </a>
                    </li>
                </ul>
            </li>


            @if ($logged_in_user->isAdmin())
                <li class="nav-title">
                    @lang('menus.backend.sidebar.system')
                </li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/auth*'), 'open')
                }}">
                    <a class="nav-link nav-dropdown-toggle {{
                        active_class(Route::is('admin/auth*'))
                    }}" href="#">
                        <i class="nav-icon far fa-user"></i>
                        @lang('menus.backend.access.title')

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/user*'))
                            }}" href="{{ route('admin.auth.user.index') }}">
                                @lang('labels.backend.access.users.management')

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                                active_class(Route::is('admin/auth/role*'))
                            }}" href="{{ route('admin.auth.role.index') }}">
                                @lang('labels.backend.access.roles.management')
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="divider"></li>

                <li class="nav-item nav-dropdown {{
                    active_class(Route::is('admin/log-viewer*'), 'open')
                }}">
                        <a class="nav-link nav-dropdown-toggle {{
                            active_class(Route::is('admin/log-viewer*'))
                        }}" href="#">
                        <i class="nav-icon fas fa-list"></i> @lang('menus.backend.log-viewer.main')
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer'))
                        }}" href="{{ route('log-viewer::dashboard') }}">
                                @lang('menus.backend.log-viewer.dashboard')
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{
                            active_class(Route::is('admin/log-viewer/logs*'))
                        }}" href="{{ route('log-viewer::logs.list') }}">
                                @lang('menus.backend.log-viewer.logs')
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><!--sidebar-->
