<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = \App\Role::all();
        foreach ($this->getData() as $data) {
            if (0 === \App\User::where('email', $data['email'])->count()) {
                $data['role_id'] = $roles->where('slug',$data['role_id'])->first()->id;
                \App\User::create($data);
            }
        }
    }

    /**
     * Return sample data
     *
     * @return array
     */
    protected function getData()
    {
        return [
            [
                'name' => 'Camille',
                'gender' => 'male',
                'email' => 'camille@mazruiinternational.ae',
                'password' => bcrypt('123456'),
                'role_id' => 'admin',
            ],
            [
                'name' => 'Osama',
                'gender' => 'male',
                'email' => 'osama@mazruiinternational.ae',
                'password' => bcrypt('123456'),
                'role_id' => 'employee',
            ],
            [
                'name' => 'John',
                'gender' => 'male',
                'email' => 'john@mazruiinternational.ae',
                'password' => bcrypt('123456'),
                'role_id' => 'employee',
            ],
            [
                'name' => 'Carla',
                'gender' => 'female',
                'email' => 'carla@mazruiinternational.ae',
                'password' => bcrypt('123456'),
                'role_id' => 'employee',
            ],
            [
                'name' => 'Anna',
                'gender' => 'female',
                'email' => 'anna@mazruiinternational.ae',
                'password' => bcrypt('123456'),
                'role_id' => 'employee',
            ],
            [
                'name' => 'Cerny',
                'gender' => 'female',
                'email' => 'cerny@mazruiinternational.ae',
                'password' => bcrypt('123456'),
                'role_id' => 'employee',
            ],
        ];
    }
}
