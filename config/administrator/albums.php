<?php

/**
 * Albums admin model config
 */

return array(

	'title' => 'Альбомы',

	'single' => 'Albums',
  

     'model' => 'App\Album',



	/**
	 * The display columns
	 */
	'columns' => array(

		        'name',
              
                'description',
                
              'cover_image' => array(
    'title' => 'cover_image',
    'output' => '<img src="/albums/(:value)"  width = "100" height="100" />',
    'sortable' => true,
),


                'created_at',

                'updated_at'
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		        'name',
       

             
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

		        'name' => array(
                    'title' => 'name',
                    'type' => 'text',
                    'editable' => true,
                ),
                
                  'description' => array(
                    'title' => 'description',
                    'type' => 'textarea',
                    'editable' => true,
                ),
                
       
          'cover_image' => array(
    'title' => 'cover_image',
    'type' => 'image',
    'location' => public_path() . '/albums/',
    'naming' => 'random',
    'length' => 20,
    'size_limit' => 2,
    'display_raw_value' => false,
    'sizes' => array(
        array(400, 400, 'crop', public_path() . '/albums/', 100)
        
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