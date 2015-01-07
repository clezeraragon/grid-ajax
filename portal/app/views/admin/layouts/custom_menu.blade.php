<li {{ (Request::is('admin/usuario') ? 'class="active"' : '') }}>
    <a href="{{ URL::to('admin/usuario') }}">
        <i class="livicon" data-name="user" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Usuário</span>
    </a>
</li>
<li {{ (Request::is('admin/perfil') ? 'class="active"' : '') }}>
    <a href="{{ URL::to('admin/perfil') }}">
        <i class="livicon" data-name="user" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Perfil</span>
    </a>
</li>
<li {{ (Request::is('admin/cliente') ? 'class="active"' : '') }}>
    <a href="{{ URL::to('admin/cliente') }}">
        <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Cliente</span>
    </a>
</li>
<li {{ (Request::is('admin/conteudo-categoria') ? 'class="active"' : '') }}>
    <a href="{{ URL::to('admin/conteudo-categoria') }}">
        <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Categoria</span>
    </a>
</li>
<li {{ (Request::is('admin/conteudo') ? 'class="active"' : '') }}>
    <a href="{{ URL::to('admin/conteudo') }}">
        <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Conteúdo</span>
    </a>
</li>
<li {{ (Request::is('admin/conteudo-comentario') ? 'class="active"' : '') }}>
    <a href="{{ URL::to('admin/conteudo-comentario') }}">
        <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
        <span class="title">Comentário</span>
    </a>
</li>