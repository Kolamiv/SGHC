                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{asset('dist/img/admin.jpg')}}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="" class="d-block">
                                {{ Auth::user()->name }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                
                            </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">


        <?php $nav_master = DB::table("nav_var")->get();?>



            @foreach($nav_master as $nav)
                @if($nav->namelink != "" )
                            <li class="nav-item has-treeview">
                                <a href="{{asset($nav->href)}}" class="{{ Request::path() === $nav->href ? 'nav-link active' : 'nav-link' }}">
                                    <i class="nav-icon {{$nav->icon}}"></i>
                                    <p>{{$nav->namelink}}@if($nav->dropdown)<i class="fas fa-angle-left right"></i>@endif</p>
                                </a>

                                @if($nav->dropdown == "")
                                    @else
                                        <?php $tmp = $nav->namelink;  ?>
                                        @foreach($nav_master as $nav)

                                            @if($nav->dropdown_child == $tmp)
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="{{asset($nav->href)}}"
                                                            class="{{ Request::path() === $nav->href ? 'nav-link active' : 'nav-link' }}">
                                                            <i class="{{$nav->icon}} "></i>
                                                            <p>{{$nav->dropdown}}</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            @endif
                                        @endforeach
                                @endif

                            </li>
                    @endif
                @endforeach
                         </ul>
                        </nav>





