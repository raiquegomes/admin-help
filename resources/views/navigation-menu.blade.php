<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('panel/assets/images/logo.png')}}" alt="Logo" srcset=""></a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                        <label class="form-check-label" ></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                
                <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : ''}}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Painel Administrativo</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub {{ (request()-> is('functions/*')) ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Funções</span>
                    </a>
                    <ul class="submenu {{ (request()-> is('functions/*')) ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->routeIs('cortes') ? 'active' : ''}}">
                            <a href="{{ route('cortes') }}">Adicionar Corte</a>
                        </li>
                        <li class="submenu-item {{ request()->routeIs('losses_product') ? 'active' : ''}}">
                            <a href="{{ route('losses_product') }}">Gerenciamento de Perda</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub {{ (request()-> is('tickets/*')) ? 'active' : '' }}">
                    <a href="#" class='sidebar-link '>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Ticket's</span>
                    </a>
                    <ul class="submenu {{ (request()-> is('tickets/*')) ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->routeIs('chamado') ? 'active' : ''}}">
                            <a href="{{ route('chamado')}} ">Ticket's Informações</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub {{ (request()-> is('registros/*')) ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Registros</span>
                    </a>
                    <ul class="submenu {{ (request()-> is('registros/*')) ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->routeIs('cortesview') ? 'active' : ''}}">
                            <a href="{{ route('cortesview')}} ">Cortes (P&F)(A&E)</a>
                        </li>
                        <li class="submenu-item {{ request()->routeIs('nfe') ? 'active' : ''}}">
                            <a href="{{ route('nfe') }}">Notas Fiscais (NFe)</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub {{ (request()-> is('task/*')) ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Processos de Atividade</span>
                    </a>
                    <ul class="submenu {{ (request()-> is('task/*')) ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->routeIs('tasks') ? 'active' : ''}}">
                            <a href="{{ route('tasks')}} ">Distribuição de Atividades</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Gerenciamento de Atividades</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="">Avaliação de Funcionários</a>
                        </li>
                    </ul>
                </li> 
                <li class="sidebar-item  has-sub {{ (request()-> is('calculator/*')) ? 'active' : '' }}">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-upc-scan"></i>
                        <span>EAN</span>
                    </a>
                    <ul class="submenu {{ (request()-> is('calculator/*')) ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->routeIs('calculatorEAN') ? 'active' : ''}}">
                            <a href="{{ route('calculatorEAN')}} ">Calculadora de Dígito Verificador</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-title">Documentação</li>
                <li class="sidebar-item  ">
                    <a href="https://atendimento.linearsistemas.com.br/kb/pt-br/Search?q=Entrada+de+Nota&page=0&pageLimit=40" class="sidebar-link">
                        <i class="bi bi-life-preserver"></i>
                        <span>NFe de Entrada</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<header class='mb-3'>
    <nav class="navbar navbar-expand navbar-light navbar-top">
        <div class="container-fluid">
            <a href="#" class="burger-btn d-block">
                <i class="bi bi-justify fs-3"></i>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bi bi-microsoft-teams bi-sub fs-4'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">{{ __('Gerenciar Equipe') }}</h6>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">{{ __('Configurações da equipe') }}</a></li>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <li><a class="dropdown-item" href="{{ route('teams.create') }}">{{ __('Criar nova equipe') }}</a></li>
                            @endcan
                            
                            <li><h6 class="dropdown-header">{{ __('Troca de Equipe') }}</h6></li>
                            @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" />
                            @endforeach
                        </ul>
                    </li>
                    @endif
                    <li class="nav-item dropdown me-1">
                        <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class='bi bi-envelope bi-sub fs-4'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <li>
                                <h6 class="dropdown-header">Correspondência</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Nenhum email recebido</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link active dropdown-toggle text-gray-600" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <i class='bi bi-bell bi-sub fs-4'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end notification-dropdown" aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-header">
                                <h6>Notificações</h6>
                            </li>
                            <li>
                                <p class="text-center py-2 mb-0"><a href="#">Visualizar todas as notificações</a></p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ Auth::user()->name }}</h6>
                                <p class="mb-0 text-sm text-gray-600">{{ Auth::user()->currentTeam->name }}</p>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{ Auth::user()->profile_photo_url }}">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                        <li>
                            <h6 class="dropdown-header">Olá, {{ Auth::user()->name }}</h6>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}"><i class="icon-mid bi bi-person me-2"></i> Meu Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>Configurações</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">{{ __('Deslogar') }}</x-jet-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>