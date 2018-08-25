<?php

/**
 * Images admin model config
 */

return array(

	'title' => 'Картинки',

	'single' => 'Image',
  

     'model' => 'App\Image',



	/**
	 * The display columns
	 */
	'columns' => array(

		        'image',
              
                'description',

              'album_id'=>array(
            'title'=>'album',
           'relationship'=>'album',
           'select'=>"CONCAT((:table).name)",
             ),
                
              'image' => array(
    'title' => 'image',
    'output' => '<img src="/albums/images/(:value)"  width = "100" height="100" />',
    'sortable' => true,
),


                'created_at',

                'updated_at'
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		        'image',
       

             
		'created_at' => array(
			'title' => 'Created at',
			'type' => 'date',
			'date_format' => 'dd.mm.yyyy',
		)



	),	

	'updated_at' => array(
			'title' => 'Updated at',
			'type' => 'date',
			'date_format' => 'dd.mm.yyyy',
		),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(



        'album' => [
        'title' => 'album',
        'type' => 'relationship',
        'relationship'=>'album',
        'name_field' => 'image',
    ],


		   
                
                  'description' => array(
                    'title' => 'description',
                    'type' => 'textarea',
                    'editable' => true,
                ),
                
       
          'image' => array(
    'title' => 'image',
    'type' => 'image',
    'location' => public_path() . '/albums/images/',
    'naming' => 'random',
    'length' => 20,
    'size_limit' => 2,
    'display_raw_value' => false,
    'sizes' => array(
        array(100, 100, 'crop', public_path() . '/albums/images/', 100),
         array(800, 600, 'fit', public_path() . '/albums/images/', 100)
        
    )
),


   
        

            
		'created_at' => array(
			'title' => 'Created at',
			'type' => 'date',
			'date_format' => 'dd.mm.yyyy',
		),


		'updated_at' => array(
			'title' => 'Updated at',
			'type' => 'date',
			'date_format' => 'dd.mm.yyyy',
		)
	),

);