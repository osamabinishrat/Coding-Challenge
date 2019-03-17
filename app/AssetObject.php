<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssetObject extends Model
{
    protected $table = 'asset_objects';

    /**
     * Returns Asset Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(){
        return $this->belongsTo(AssetType::class, 'asset_type')->first()->type;
    }

    /**
     * Returns Asset Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(){
        return $this->belongsTo(AssetStatus::class, 'asset_status')->first()->status;
    }

    /**
     * Returns Current owner of asset
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner(){
        $owner =  $this->belongsTo(User::class, 'current_owner')->first();
        return ($owner)? $owner->name : 'N/A';
    }
}
