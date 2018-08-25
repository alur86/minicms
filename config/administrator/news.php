<?php

/**
 * News admin model config
 */

return array(

	'title' => 'Новости',

	'single' => 'News',
  

     'model' => 'App\News',



	/**
	 * The display columns
	 */
	'columns' => array(

		        'title',
              
                'intro',
                
                'content',

                'created_at',

                'updated_at'
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		        'title',
       
    
             
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

		        'title' => array(
                    'title' => 'title',
                    'type' => 'text',
                    'editable' => true,
                ),
                
                  'intro' => array(
                    'title' => 'introduction',
                    'type' => 'textarea',
                    'editable' => true,
                ),
                
       


               'content' => array(
                    'title' => 'content',
                    'type' => 'textarea',
                    'editable' => true,
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