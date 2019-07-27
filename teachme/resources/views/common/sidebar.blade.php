<aside class="main-sidebar">

    <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">

            <li class="active">

                <a href="/">

                    <i class="fa fa-home"></i>

                    <span>Inicio</span>

                </a>

            </li>

            @role('administrador')
                <li class="treeview">

                <a href="#">

                    <i class="fa fa-user"></i>

                    <span>Usuarios</span>

                    <span class="pull-right-container">

                        <i class="fa fa-angle-left pull-right"></i>

                    </span>

                </a>

                <ul class="treeview-menu">

                    <li>

                        <a href="{{ route('0001') }}">

                            <i class="fa fa-circle-o-notch"></i>

                            <span>Registrar Docentes</span>

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            <i class="fa fa-circle-thin"></i>

                            <span>Registrar Estudiantes</span>

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            <i class="fa fa-circle-o"></i>

                            <span>Listar Docentes</span>

                        </a>

                    </li>

                    <li>

                        <a href="#">

                            <i class="fa fa-circle-o"></i>

                            <span>Listar Estudiantes</span>

                        </a>

                    </li>

                </ul>

            </li>
            @endrole

            @role('student')
            <li>


                <a href="#">

                    <i class="fa fa-th"></i>

                    <span>Materias</span>

                </a>

            </li>

            <li>

                <a href="#">

                    <i class="fa fa-product-hunt"></i>

                    <span>Horarios</span>

                </a>

            </li>

            @endrole
            @role('teacher')
            <li>

                <a href="#">

                    <i class="fa fa-users"></i>

                    <span>Grupos</span>

                </a>

            </li>
            <li>

                <a href="#">

                    <i class="fa fa-user-circle-o"></i>

                    <span>Estudiantes</span>

                </a>

            </li>
            @endrole


        </ul>

    </section>

</aside>