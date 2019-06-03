<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XMLIzlusceniPodatki extends Model
{
				protected $table = 'xml_izlusceni_podatki';

				/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
				    'user_id', 'name', 'timestamp', 'amount', 'raw_xml_data'
	   ];

				/**
     * Get the user that owns this data.
     */
    public function user() {
								return $this->belongsTo('App\User');
				}
}
