<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public static function getAllStudentsData(){
		return self::all();
	}

	public static function getStudentData($id)
	{
		return Students::where('id','=',$id)->first();
	}

	public static function storeStudentData($data)
	{
		$student = new Students;
		foreach ($data as $key => $value) {
			$student->$key = $value;
		}

		$student->save();

		return $student;
	}
}
