<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use \Session;

class StudentsController extends Controller
{
	/**
	 * shows form for creating new user
	 * @return
	 */
	public function create()
	{
		if(Session::has('name')) {
			Session::forget('name');
		}
		return view('student.create');
	}

	/**
	 * creates new student
	 * @param  Request $request HttpRequest
	 * @return redirect to show student details.
	 */
	public function store(Request $request)
	{
		$request_data = array_except($request->all(),['_token','submit']);
		
		$student = Students::storeStudentData($request_data);
		Session::put('name', $request_data['name']);

		return redirect()->route('student.show', $student->id);
	}

	/**
	 * Show all students data
	 * @return
	 */
	public function showAll(){
		$students = Students::getAllStudentsData();
		
		return view('student.show',compact('students'));
	}

	/**
	 * Show single student data
	 * @param  int $id path-param
	 * @return
	 */
	public function show($id){
		$student = Students::getStudentData($id);

		return view('student.detail', compact('student'));
	}

	public function sessiontest(Request $request){
		$name = Session::get('name');
		return view('about', compact('name'));
	}
}
