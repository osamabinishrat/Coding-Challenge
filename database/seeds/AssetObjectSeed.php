<?php

use Illuminate\Database\Seeder;

class AssetObjectSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getData() as $data) {
            if (0 === \App\AssetObject::where('code', $data['code'])->count()) {
                \App\AssetObject::create($data);
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
        $users = \App\User::all();
        $assetStatuses = \App\AssetStatus::all();
        $assetTypes = \App\AssetType::all();

        return [
            [
                'code' => '5647546845',
                'description' => 'Laptop allocated to Mr. Osama by Mr. Camille for development purposes.',
                'purchase_date' => '2018-03-19',
                'asset_type' => $assetTypes->where('type','Laptop')->first()->id,
                'asset_status' => $assetStatuses->where('status','In use')->first()->id,
                'current_owner' => $users->where('email','osama@mazruiinternational.ae')->first()->id,
                'updated_by' => $users->where('email','camille@mazruiinternational.ae')->first()->id,
            ],
            [
                'code' => '9879654654',
                'description' => 'LCD available to use',
                'purchase_date' => '2017-05-1',
                'asset_type' => $assetTypes->where('type','LCD')->first()->id,
                'asset_status' => $assetStatuses->where('status','Available')->first()->id,
            ],
            [
                'code' => '8465465457',
                'description' => 'Mouse available to use',
                'purchase_date' => '2016-09-12',
                'asset_type' => $assetTypes->where('type','Mouse')->first()->id,
                'asset_status' => $assetStatuses->where('status','Available')->first()->id,
            ],
            [
                'code' => '3543546545',
                'description' => 'Headphone allocated to Miss Anna',
                'purchase_date' => '2017-09-12',
                'asset_type' => $assetTypes->where('type','Headphone')->first()->id,
                'asset_status' => $assetStatuses->where('status','In use')->first()->id,
                'current_owner' => $users->where('email','anna@mazruiinternational.ae')->first()->id,
                'updated_by' => $users->where('email','camille@mazruiinternational.ae')->first()->id,
            ],
            [
                'code' => '2455454589',
                'description' => 'Printer available to use',
                'purchase_date' => '2016-02-19',
                'asset_type' => $assetTypes->where('type','Printer')->first()->id,
                'asset_status' => $assetStatuses->where('status','Available')->first()->id,
            ],
        ];
    }
}
