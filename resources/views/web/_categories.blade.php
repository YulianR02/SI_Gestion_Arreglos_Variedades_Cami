                    <!-- ================================== TOP NAVIGATION ================================== -->
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                        <nav class="yamm megamenu-horizontal">
                            <ul class="nav">
                                @foreach ($categorias as $categoria)
                                <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown"><i class="icon fa {{$categoria->icon}}"
                                            aria-hidden="true"></i>{{$categoria->name}}</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="yamm-content">
                                            <div class="row">
                                                @foreach ($categoria->subcategories as $subcategoria)
                                                <div class="col-sm-12 col-md-3">
                                                    <ul class="links list-unstyled">
                                                        <li><a href="#">{{$subcategoria->name}}</a></li>
                                                        
                                                    </ul>
                                                </div>
                                                
                                                <!-- /.col --> 
                                                @endforeach
                                                
                                            </div>
                                            <!-- /.row -->
                                        </li>
                                        <!-- /.yamm-content -->
                                    </ul>
                                    <!-- /.dropdown-menu -->
                                </li>
                                <!-- /.menu-item -->
                                @endforeach
                                
                            </ul>
                            <!-- /.nav -->
                        </nav>
                        <!-- /.megamenu-horizontal -->
                    </div>
                    <!-- /.side-menu -->
                    <!-- ================================== TOP NAVIGATION : END ================================== -->
                    