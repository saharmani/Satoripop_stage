<?php namespace satoripop\DivingCenter\Models;

use Model;

/**
 * Model
 */
class Center extends Model
{
    use \October\Rain\Database\Traits\Validation;
     public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    public $translatable = [
    'title',
  'centercode' ,
  'emailprefacture',
  'CGV',
  'codepostal' ,

];

    protected $fillable = ['name','code'];

    public $rules = [
     'title' => 'required',
     'centercode' => 'required',
     'emailprefacture' => 'required',

    
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'satoripop_divingcenter_centers';

public $belongsToMany =[

'theme' => [

  'satoripop\DivingCenter\Models\Theme',
  'table'=>'satoripop_divingcenter_centers_themes'  ,
  'order' => 'title' ,
] ,
'accommodation' => [

  'satoripop\DivingCenter\Models\Accommodation',
  'table'=>'satoripop_divingcenter_centers_accommodations' ,
  
] ,
'tememember' => [

  'satoripop\DivingCenter\Models\Tememember',
  'table'=>'satoripop_divingcenter_centers_teammembers'
] ,
'affiliation' => [

  'satoripop\infos\Models\Affiliation',
  'table'=>'satoripop_divingcenter_centers_affiliations' ,

]  ,
'spokenlanguage' => [

  'satoripop\Infos\Models\Spokenlanguages',
  'table'=>'satoripop_divingcenter_centers_spokenlanguages'
] ,
'paymentmethod' => [

  'satoripop\infos\Models\paymentmethod',
  'table'=>'satoripop_divingcenter_centers_paymentmethod' ,

]  ,
'typeofdive' => [

  'satoripop\dives\Models\Typeofdive',
  'table'=>'satoripop_divingcenter_centers_typeofdive' ,
  ] ,
  'typeoftraining' => [

  'satoripop\dives\Models\Typeoftraining',
  'table'=>'satoripop_divingcenter_centers_typeoftraining' ,
  ] ,

  'training' => [

  'satoripop\dives\Models\Training',
  'table'=>'satoripop_divingcenter_centers_training' ,
  ] ,
  
  'scubadiving' => [

  'satoripop\dives\Models\Scubadiving',
  'table'=>'satoripop_divingcenter_centers_scubadiving' ,
  ] ,

  'baptisms' => [
  'satoripop\dives\Models\Baptisms',
  'table'=>'satoripop_divingcenter_centers_baptisms' ,
  ] ,
    'othertypeofdiving' => [
  'satoripop\dives\Models\Othertypeofdiving',
  'table'=>'satoripop_divingcenter_centers_othertypeofdiving' ,
  ] ,
   'additionalservices' => [
  'satoripop\dives\Models\Additionalservice',
  'table'=>'satoripop_divingcenter_centers_additionalservices' ,
  ]  ,
   'childequipment' => [

  'satoripop\equipement\Models\Childequipment',
  'table'=>'satoripop_divingcenter_centers_childequipments' ,
  ]  ,
   'adultmaterial' => [

  'satoripop\equipement\Models\Adultmaterial',
  'table'=>'satoripop_divingcenter_centers_adultmaterials' ,
  ]  ,
   'typeofboat' => [

  'satoripop\equipement\Models\Typeofboat',
  'table'=>'satoripop_divingcenter_centers_typeofboat' ,
  ]  ,
 'boatequipment' => [

  'satoripop\equipement\Models\Boatequipment',
  'table'=>'satoripop_divingcenter_centers_boatequipments' ,
  ] ,
  'transfer' => [

  'satoripop\services\Models\Transfer',
  'table'=>'satoripop_divingcenter_centers_transfers' ,
  ] ,
   'restoration' => [

  'satoripop\services\Models\Restoration',
  'table'=>'satoripop_divingcenter_centers_restoration' ,
  ] ,
    'photovideo' => [

  'satoripop\services\Models\Photovideo',
  'table'=>'satoripop_divingcenter_centers_photovideo' ,
  ] ,
   'otherservices' => [

  'satoripop\services\Models\Otherservice',
  'table'=>'satoripop_divingcenter_centers_otherservices' ,
  ] ,
   'products' => [

  'satoripop\services\Models\Product',
  'table'=>'satoripop_divingcenter_centers_products' ,
  ] ,
'airenvy' => [

  'satoripop\infos\Models\Airenvy',
  'table'=>'satoripop_divingcenter_centers_airenvy' ,

]  ,
'waterenvy' => [

  'satoripop\infos\Models\Waterenvy',
  'table'=>'satoripop_divingcenter_centers_waterenvy' ,

]  ,
'confort' => [

  'satoripop\infos\Models\Comfort',
  'table'=>'satoripop_divingcenter_centers_comfort' ,

]  ,
  'ecology' => [

  'satoripop\infos\Models\Ecology',
  'table'=>'satoripop_divingcenter_centers_ecology' ,
  ] ,
  'openingperiod' => [

  'satoripop\DivingCenter\Models\Openingperiod',
  'table'=>'satoripop_divingcenter_centers_openingperiod' ,
  ] ,
'booking' => [

  'satoripop\DivingCenter\Models\Booking',
  'table'=>'satoripop_divingcenter_booking' ,
  ] ,


] ;

 public $belongsTo = [
  
  'destination' => [
  'satoripop\Data\Models\Destination',
  'table'=>'satoripop_data_destinations' ,
  'order' =>'title' ,

],
 
 
 'accommodationcapacity' => [

  'satoripop\infos\Models\Accommodationcapacity',
  'table'=>'satoripop_infos_accommodationcapacity' ,

]  ,
'distancetothesea' => [

  'satoripop\infos\Models\Distancetothesea',
  'table'=>'satoripop_infos_distancetothesea' ,
  ] ,
  'numberofboat' => [

  'satoripop\equipement\Models\Numberofboat',
  'table'=>'satoripop_equipement_numberofboats' ,
  ] ,
  'boatcapacity' => [

  'satoripop\equipement\Models\Boatcapacity',
  'table'=>'satoripop_equipement_boatcapacity' ,
  ] ,




];


public $attachMany = [
'CGV' => 'System\Models\File' ,
'visuel' => 'System\Models\File'
] ;



}