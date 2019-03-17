<?php

use Illuminate\Database\Seeder;

class AssetStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $data) {
            if (0 === \App\AssetStatus::where('status', $data['status'])->count()) {
                \App\AssetStatus::create($data);
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
              'status'=>'Available'
            ],
            [
              'status'=>'In use'
            ],
            [
              'status'=>'Not available'
            ],
        ];
    }
}
