    @include('layout.header')

            <!-- TABLES -->
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <!--    <div class="sb-sidenav-menu-heading">Core</div> -->
                                <a class="nav-link" href="{{route('home.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Cadastrar Clientes
                                </a>
                                <!--     <div class="sb-sidenav-menu-heading">Interface</div> -->
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Layouts
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <!--    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a> -->
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Pages
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                            Authentication
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="login.html">Login</a>
                                                <a class="nav-link" href="register.html">Register</a>
                                                <a class="nav-link" href="password.html">Forgot Password</a>
                                            </nav>
                                        </div>
                                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                            Error
                                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="401.html">401 Page</a>
                                                <a class="nav-link" href="404.html">404 Page</a>
                                                <a class="nav-link" href="500.html">500 Page</a>
                                            </nav>
                                        </div>
                                    </nav>
                                </div>
                                <!--     <div class="sb-sidenav-menu-heading">Addons</div> -->
                                {{--
                                <a class="nav-link" href="charts.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Charts
                                </a>
                                --}}
                                <a class="nav-link" href="{{route('user.tables')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                    Tables
                                </a>
                                <a class="nav-link" href="{{route('user.login')}}">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></div>
                                    Sair
                                </a>
                            </div>
                        </div>

                        <!--
                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as:</div>
                            Start Bootstrap
                        </div>
                        -->
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <div class="adicionar">
                        <a href="#" onclick="adicionar()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Adicionar Novo Cliente <i class="fas fa-plus"></i></a>
                    </div>
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Cadastrar Clientes</h1>
                            <ol class="breadcrumb mb-4">
                                <!--  <li class="breadcrumb-item active">Dashboard</li> -->
                            </ol>

                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Tabela de Cadastro de Clientes
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Data de Nascimento</th>
                                            <th>CPF</th>
                                            <th>Profissão</th>
                                            <th>Telefone</th>
                                            <th>Cidade</th>
                                            <th>Endereço</th>
                                            <th>Data do Cadastro</th>
                                            <th>Data de Compra</th>
                                            <th>Ações</th>

                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Data de Nascimento</th>
                                            <th>CPF</th>
                                            <th>Profissão</th>
                                            <th>Telefone</th>
                                            <th>Cidade</th>
                                            <th>Endereço</th>
                                            <th>Data do Cadastro</th>
                                            <th>Data de Compra</th>
                                            <th>Ações</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>25/03/1990</td>
                                            <td>712.056.620-22</td>
                                            <td>System Architect</td>
                                            <td>(45)99999-9999</td>
                                            <td>Edinburgh</td>
                                            <td>Avenida Brasil</td>
                                            <td>2011/04/25</td>
                                            <td>2022/04/20</td>
                                            <td>
                                                <a title="Detalhes" href=""><i class="fas fa-eye text-primary mr-1"></i></a>
                                                <a title="Editar" href="{{route ('acoes.editar')}}"><i class="fas fa-edit text-info mr-1"></i></a>
                                                <a title="Deletar" href=""><i class="fas fa-trash text-danger mr-1"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>18/07/1985</td>
                                            <td>316.467.950-59</td>
                                            <td>Junior Technical Author</td>
                                            <td>(45)99999-9999</td>
                                            <td>San Francisco</td>
                                            <td>Carlos Gomes</td>
                                            <td>2009/01/12</td>
                                            <td>2022/03/10</td>
                                            <td>
                                                <a title="Detalhes" href=""><i class="fas fa-eye text-primary mr-1"></i></a>
                                                <a title="Editar" href=""><i class="fas fa-edit text-info mr-1"></i></a>
                                                <a title="Deletar" href=""><i class="fas fa-trash text-danger mr-1"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>02/05/1994</td>
                                            <td>092.010.450-93</td>
                                            <td>Integration Specialist</td>
                                            <td>(45)99999-9999</td>
                                            <td>New York</td>
                                            <td>Carlos de Carvalho</td>
                                            <td>2012/12/02</td>
                                            <td>2020/06/05</td>
                                            <td>
                                                <a title="Detalhes" href=""><i class="fas fa-eye text-primary mr-1"></i></a>
                                                <a title="Editar" href=""><i class="fas fa-edit text-info mr-1"></i></a>
                                                <a title="Deletar" href=""><i class="fas fa-trash text-danger mr-1"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>14/11/1995</td>
                                            <td>092.010.450-93</td>
                                            <td>Office Manager</td>
                                            <td>(45)99999-9999</td>
                                            <td>London</td>
                                            <td>Rio Claro</td>
                                            <td>2008/12/19</td>
                                            <td>2021/12/18</td>
                                            <td>
                                                <a title="Detalhes" href=""><i class="fas fa-eye text-primary mr-1"></i></a>
                                                <a title="Editar" href=""><i class="fas fa-edit text-info mr-1"></i></a>
                                                <a title="Deletar" href=""><i class="fas fa-trash text-danger mr-1"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Howard Kennedy</td>
                                            <td>25/02/1999</td>
                                            <td>968.901.100-64</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>(45)99999-9999</td>
                                            <td>London</td>
                                            <td>Europa</td>
                                            <td>2012/12/18</td>
                                            <td>2022/02/11</td>
                                            <td>
                                                <a title="Detalhes" href=""><i class="fas fa-eye text-primary mr-1"></i></a>
                                                <a title="Editar" href=""><i class="fas fa-edit text-info mr-1"></i></a>
                                                <a title="Deletar" href=""><i class="fas fa-trash text-danger mr-1"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>


    @include('layout.footer')
