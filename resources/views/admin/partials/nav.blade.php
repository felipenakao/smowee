<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
          <a href="/">
             smowee
          </a>
        </li>
        {{-- <li>
          <a href="/admin/blog"><i class="fa fa-fw fa-archive"></i> Blog</a>
        </li> --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-fw fa-archive"></i>
            Blog <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Blog admin</li>
            <li><a href="/admin/blog">Criar Artigo</a></li>
            <li><a href="#">Lista de artigos</a></li>
          </ul>
        </li>

        {{-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-fw fa-plus"></i>
            Clube de benefícios <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Clube de benefícios admin</li>
            <li><a href="/admin/cdb">Clube de benefícios Artigo</a></li>
            <li><a href="#">Lista de produtos</a></li>
          </ul>
        </li> --}}

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-fw fa-search"></i>
            Farofino <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Farofino admin</li>
            <li><a href="/admin/farofino">Inserir produto</a></li>
            <li><a href="#">Lista de produtos</a></li>
          </ul>
        </li>

        {{-- <li>
            <a href="/admin/farofino"><i class="fa fa-fw fa-search"></i> Farofino</a>
        </li> --}}
        <li>
          <a href="/logout"><i class="fa fa-fw fa-archive"></i> Logout</a>
        </li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="dropdown-header">Dropdown heading</li>
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
    </ul>
</nav>
<!-- /#sidebar-wrapper