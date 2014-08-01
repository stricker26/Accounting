<?php

	class Department extends Eloquent{
		protected $table = 'departments';
		public $timestamps = false;

		/*public function checkExist($value){
			$count = Department::where('department', '=', $value)->count();
			return $count;
		}*/

		public function scopeSelect($query, $title = 'departments'){
			$selectVals[''] = $title;
			$selectVals += $this->lists('department', 'department');
			return $selectVals;
		}

	}

?>