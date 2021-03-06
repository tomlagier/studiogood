<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function getIndex()
	{
		$achievement_count = Achievement::where('id', '>', '0')->count();
		$achievements = Achievement::take($achievement_count)->get();
		if(Agent::isMobile())
		{
			return View::make('mobile.home.home')->with('page', 'home')->with('achievements', $achievements);
		}
		return View::make('desktop.home.home')->with('page', 'home')->with('achievements', $achievements);
	}

	public function getServices()
	{
		if(Agent::isMobile())
		{
			return View::make('mobile.services.services')->with('page', 'services');
		}
		return View::make('desktop.services.services')->with('page', 'services');
	}

	public function getJobs()
	{
		$jobs = Job::all();
		
		if(Agent::isMobile())
		{
			return View::make('mobile.jobs.jobs')
			       ->with('page', 'jobs')
			       ->with('jobs', $jobs);
		}
		return View::make('desktop.jobs.jobs')
		       ->with('page', 'jobs')
		       ->with('jobs', $jobs);
	}

	public function getDetails($id)
	{
		 $job = Job::find($id);
		if(Agent::isMobile())
		{
			return View::make('mobile.jobs.details')
		       ->with('page', 'jobs')
		       ->with('job', $job);
		}
		return View::make('desktop.jobs.details')
		       ->with('page', 'jobs')
		       ->with('job', $job);
	}

	public function getPeople()
	{

		$employees = Person::with('whimseys', 'socials')->get();

		if(Agent::isMobile())
		{
			return View::make('mobile.people.people')
						 ->with('page', 'people')
		                 ->with('employees', $employees);
		}
		return View::make('desktop.people.people')
		             ->with('page', 'people')
		             ->with('employees', $employees);
	}

	public function getWork()
	{
		$count_work = Work::where('id', '>', '0')->count();
		$works = Work::take($count_work)->get();

		if(Agent::isMobile())
		{
			return View::make('mobile.work.work')
						 ->with('page', 'work')
		                 ->with('works', $works);
		}
		return View::make('desktop.work.work')
		             ->with('page', 'work')
		             ->with('works', $works);
	}

	public function getOverheards()
	{

		$overheard = Overheard::getOverheard(Overheard::getLastId());

		return View::make('desktop.overheard.overheard')
			   ->with('page', 'overheard')
			   ->with('overheard', $overheard);
	}

	public function getOverheard($id)
	{
		$overheard = Overheard::getOverheard($id);

		return View::make('desktop.overheard.overheard')
			   ->with('page', 'overheard')
			   ->with('overheard', $overheard);	
	}

	public function postForm()
	{
		$name = Input::get('name');
		$email = Input::get('email');
		$text = Input::get('text');

		$to      = 'hello@studiogood.com';
		$subject = 'StudioGood.com message from ' . $name . ' (' . $email . ')';
		$message = 'New contact form message from ' . $name . ' (' . $email . ")\r\n---\r\nMessage content:\r\n" . $text;
		$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\nX-Mailer: PHP/" . phpversion();

		$success = mail($to, $subject, $message, $headers, '-f' . $email);

		if($success)
		{
			return 'Success';
		}

		return 'Failure';
	}

	public function getStyleguide()
	{
		if(Agent::isMobile())
		{
			return View::make('mobile.coretemplate')
			       ->with('page', 'core-template');
		}
		return View::make('desktop.coretemplate')
		       ->with('page', 'core-template');
	}

}