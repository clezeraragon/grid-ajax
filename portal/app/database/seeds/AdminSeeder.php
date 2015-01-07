<?php

use App\Models\User;

class AdminSeeder extends Seeder {

	public function run()
	{
		Sentry::getUserProvider()->create(array(
			'email'       => 'admin@admin.com',
			'password'    => "admin",
			'first_name'  => 'Isonhei',
			'last_name'   => 'Realize aqui',
			'activated'   => 1,
            'dt_nascimento' => '2014-01-01',
            'genero' => 'M',
            'perfil_id' => 1
		));

	}
}