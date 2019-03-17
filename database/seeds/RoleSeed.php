<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $data) {
            if (0 === \App\Role::where('role', $data['role'])->count()) {
                \App\Role::create($data);
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
                'role' => 'Administrator',
                'slug' => 'admin',
            ],
            [
                'role' => 'Employee',
                'slug' => 'employee',
            ],
        ];
    }
}
