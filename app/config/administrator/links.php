<?php

return array(

	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'Links',

	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'link',

	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Link',

	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
		'title' => array(
			'title' => 'Title'
		),
		'content' => array(
			'title' => 'Content'
		),
        'url' => array(
            'title' => 'URL'
        ),
		'status' => array(
			'title' => 'Status',
			'select' => "CASE (:table).status WHEN '".Link::APPROVED."' THEN 'Approved' WHEN '".Link::DRAFT."' THEN 'Draft' END",
		),
		'updated_at' => array(
			'title' => 'Last Updated'
		),
	),

	/**
	 * The edit fields array
	 *
	 * @type array
	 */
	'edit_fields' => array(
		'title' => array(
			'title' => 'Title',
			'type' => 'text',
		),
		'content' => array(
			'title' => 'Content',
			'type' => 'text',
		),
		'url' => array(
			'title' => 'URL',
			'type' => 'text',
		),
		'status' => array(
			'type' => 'enum',
			'title' => 'Status',
			'options' => array(
				Link::DRAFT => 'Draft',
                Link::APPROVED => 'Approved',
			),
		),
		'created_at' => array(
			'title' => 'Created',
			'type' => 'datetime',
			'editable' => false,
		),
		'updated_at' => array(
			'title' => 'Updated',
			'type' => 'datetime',
			'editable' => false,
		),
	),

	/**
	 * The filter fields
	 *
	 * @type array
	 */
	'filters' => array(
		'title' => array(
			'title' => 'Title',
		),
		'content' => array(
			'type' => 'text',
			'title' => 'Content',
		),
		'url' => array(
			'type' => 'text',
			'title' => 'URL',
		),
		'status' => array(
			'type' => 'enum',
			'title' => 'Status',
			'options' => array(
				Link::DRAFT => 'Draft',
				Link::APPROVED => 'Approved',
			),
		),
	),

	/**
	 * The width of the model's edit form
	 *
	 * @type int
	 */
	'form_width' => 500,

	/**
	 * The validation rules for the form, based on the Laravel validation class
	 *
	 * @type array
	 */
	'rules' => array(
		'title' => 'required',
		'content' => 'required',
		'url' => 'required',
		'status' => 'required|in:'.Link::DRAFT.','.Link::APPROVED,
	),

	/**
	 * The sort options for a model
	 *
	 * @type array
	 */
	'sort' => array(
		'field' => 'updated_at',
		'direction' => 'desc',
	),

	/**
	 * If provided, this is run to construct the front-end link for your model
	 *
	 * @type function
	 */
//	'link' => function($model)
//		{
//			return $model->getUrl();
//		},

);
