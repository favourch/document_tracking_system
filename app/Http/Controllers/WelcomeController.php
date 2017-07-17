<?php namespace App\Http\Controllers;
use App\User;
use App\Applicant;
use App\BulkUpload;
use Session;
use Hash;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Http\Request; 

class WelcomeController extends Controller {

	public function user1dashboard()
	{
		$user = Auth::user();
		return view('user1.dashboard')->with('user', $user);
	}
	
	public function create()
	{
		$user = Auth::user();
		return view('create')->with('user', $user);
	}
	public function contactUs()
	{
		return view('contact');
	}
	public function faq()
	{
		return view('faq');
	}
	public function getCalendar()
	{
		$user = Auth::user();
		return view('calendar')->with('user', $user);
	}
	public function input()
	{
		$user = Auth::user();
		return view('input')->with('user', $user);
	}
	public function postInput()
	{
			$user = Auth::user();
			BulkUpload::create(array(
				'program' => Input::get('program'),
				'npower_id' => Input::get('npower_id'),
				'phone' => Input::get('phone'),
				'fname' => Input::get('fname'),
				'lga_of_residence' => Input::get('lga_of_residence'),
				'lga' => Input::get('lga'),
				'dob' => Input::get('ko'),
			));
			return Redirect::back()->with('user', $user);
	}
	
	/*
	public function getEditApplicant($applicant_id)
	{
		$user = Auth::user();
		$applicant = Applicant::where('applicant_id','=', $applicant_id);
		return view('edit')->with('user', $user)->with('applicant', $applicant);
	}*/
	public function postCreate()
	{
		
		$create = User::create(array(
			'fname' => Input::get('fname'),
			'email' => Input::get('email'),
			'staffid' => Input::get('staffid'),
			'password' => Input::get('password')
		));
		return redirect()->route('user1Dashboard')->with(Session::flash('success', 'You have successfully created a new Administrator!!'));
					
	}
	
	public function getAddApplicant()
	{
		$user = Auth::user();
		return view('register')->with('user', $user);
	}
	public function getListApplicant()
	{
		$user = Auth::user();
		$applicant = Applicant::all();
		$bulk_upload = BulkUpload::all();
		return view('list-applicant')->with('applicant', $applicant)->with('user', $user)->with('bulk_upload', $bulk_upload);
	}
	public function postAddApplicant()
	{
		
		$create = Applicant::create(array(
			'npower_id' => Input::get('npower_id'),
			'program' => Input::get('program'),
			'fname' => Input::get('fname'),
			'mname' => Input::get('mname'),
			'lname' => Input::get('lname'),
			'gender' => Input::get('gender'),
			'marital' => Input::get('marital'),
			'email' => Input::get('email'),
			'phone' => Input::get('phone'),
			'dob' => Input::get('dob'),
			'state' => Input::get('state'),
			'lga' => Input::get('lga'),
			'residence' => Input::get('residence'),
			'state_of_residence' => Input::get('state_of_residence'),
			'lga_of_residence' => Input::get('lga_of_residence'),
			'bvn' => Input::get('bvn'),
			'account_number' => Input::get('account_number'),
			'bank_name' => Input::get('bank_name'),
			'disability' => Input::get('disability'),
			'degree' => Input::get('degree'),
			'pg' => Input::get('pg'),
			'last_inst' => Input::get('last_inst'),
			'discipline' => Input::get('discipline'),
			'nysc' => Input::get('nysc'),
			'employment' => Input::get('employment'),
			'skills' => Input::get('skills'),
			'created_at' => Input::get('created_at'),
			'updated_at' => Input::get('updated_at')
		));
		return Redirect::back()->with('success', 'Applicant Successfully Uploaded');
					
	}
	
	public function login()
	{
		return view('login');
	}
	
	public function postLogin() {
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required',
				'password' => 'required'
			)
		);
		if ($validator->fails()){
			return Redirect::route('login')->with('warning', 'Kindly rectify the errors below')
				->withErrors($validator)
				->withInput();
			}
			else{
				$auth = Auth::attempt(array(
					'email' => Input::get('email'),
					'password' => Input::get('password')
				));
				if($auth) {
					return Redirect::route('user1Dashboard');
				}
				else{
					return Redirect::route('login')
						->with('danger', 'Access Denied');	
				}
			}
			
			return Redirect::route('login')
				->with('warning', 'There was a problem logging you in');
		
	}
	public function getLogout(){
		Auth::logout();
		return Redirect::route('login')->with('info', 'Your are now logged out!');
		}

}
