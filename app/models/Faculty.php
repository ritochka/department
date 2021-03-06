<?php

class Faculty extends Eloquent
{
	public $table;

	public function __construct()
	{
		$this->table = 'faculties';
	}

	public function departments()
	{
		return $this->hasMany('Department', 'faculty_id');
	}

	public function getName()
	{
		return $this[Config::get('app.locale')];
	}

}