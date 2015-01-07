<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $this->call('PerfilTableSeeder');
        $this->call('AdminSeeder');
        $this->call('FuncionalidadeTableSeeder');
        $this->call('ConteudoStatusTableSeeder');
        $this->call('UsuarioFuncionalidadeTableSeeder');
	}

}
