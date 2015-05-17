<?php namespace App\Http\Controllers;

use Request;
use App\Models\Section;
use App\Repositories\SectionRepository;

class ClientController extends Controller {

	/**
	 * Create a new controller instance.
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $sections = SectionRepository::all(true);

		return view('html5upPrologue.home')->with('sections', $sections);
	}

    public function getSectionImages($id)
    {
        $section = Section::find($id);

        if (!$section) {
            return \Response::make('Section not found', 404);
        }

        if (Request::ajax()) {
            return \View::make('html5upPrologue.partial.sectionImages')->with('section', $section);
        }
    }
}
