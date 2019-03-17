<?php

use Illuminate\Database\Seeder;

class AssetTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $data) {
            if (0 === \App\AssetType::where('type', $data['type'])->count()) {
                \App\AssetType::create($data);
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
                'type'=>'Laptop'
            ],
            [
                'type'=>'Mobile'
            ],
            [
                'type'=>'Keyboard'
            ],
            [
                'type'=>'Mouse'
            ],
            [
                'type'=>'LCD'
            ],
            [
                'type'=>'Headphone'
            ],
            [
                'type'=>'USB cable'
            ],
            [
                'type'=>'Wireless Charger'
            ],
            [
                'type'=>'Mac book'
            ],
            [
                'type'=>'Printer'
            ],
        ];
    }
}
