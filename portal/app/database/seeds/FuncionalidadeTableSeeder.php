<?php

class FuncionalidadeTableSeeder extends Seeder {

    public function run()
    {

        Funcionalidade::create(array('funcionalidade' => 'Acesso Total ao Sistema', 'metodo' => '*', 'modulo' => 'Geral'));

		Funcionalidade::create(array('funcionalidade' => 'Listar usuários', 'metodo' => 'admin.user.index', 'modulo' => 'Usuário'));
		Funcionalidade::create(array('funcionalidade' => 'Formulário de inclusão de usuário', 'metodo' => 'admin.user.create', 'modulo' => 'Usuário'));
		Funcionalidade::create(array('funcionalidade' => 'Adicionar usuário', 'metodo' => 'admin.user.store', 'modulo' => 'Usuário'));
		Funcionalidade::create(array('funcionalidade' => 'Formulário de alteração de usuário', 'metodo' => 'admin.user.edit', 'modulo' => 'Usuário'));
		Funcionalidade::create(array('funcionalidade' => 'Alterar usuário', 'metodo' => 'admin.user.update', 'modulo' => 'Usuário'));
		Funcionalidade::create(array('funcionalidade' => 'Apagar usuário', 'metodo' => 'admin.user.destroy', 'modulo' => 'Usuário'));

		Funcionalidade::create(array('funcionalidade' => 'Listar perfis', 'metodo' => 'admin.perfil.index', 'modulo' => 'Perfil'));
		Funcionalidade::create(array('funcionalidade' => 'Formulário de inclusão de perfil', 'metodo' => 'admin.perfil.create', 'modulo' => 'Perfil'));
		Funcionalidade::create(array('funcionalidade' => 'Adicionar perfil', 'metodo' => 'admin.perfil.store', 'modulo' => 'Perfil'));
		Funcionalidade::create(array('funcionalidade' => 'Formulário de alteração de perfil', 'metodo' => 'admin.perfil.edit', 'modulo' => 'Perfil'));
		Funcionalidade::create(array('funcionalidade' => 'Alterar perfil', 'metodo' => 'admin.perfil.update', 'modulo' => 'Perfil'));
		Funcionalidade::create(array('funcionalidade' => 'Apagar perfil', 'metodo' => 'admin.perfil.destroy', 'modulo' => 'Perfil'));



	}

}