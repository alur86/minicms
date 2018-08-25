<?php

/**
 * Users admin model config
 */

return array(

	'title' => 'Пользователи',

	'single' => 'User',
  

     'model' => 'App\User',



	/**
	 * The display columns
	 */
	'columns' => array(

		        'name',
              
                'email',
          

                'is_admin',  

                'created_at',

                'updated_at'
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		        'name',
       
                'email',
    
             
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
                
            
      
                'email',


                 'is_admin' => array(
                 	'type'=>'bool',  
                 	'title'=>'is admin',  
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