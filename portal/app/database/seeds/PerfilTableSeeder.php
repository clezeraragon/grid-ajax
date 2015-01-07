<?php

class PerfilTableSeeder extends Seeder {

    public function run()
    {
        Perfil::create(array('perfil' => 'Admin', 'descricao' => 'Administrador', 'st_admin' => 1));
        Perfil::create(array('perfil' => 'Usuário', 'descricao' => 'Usuário site', 'st_admin' => 0));
    }

}