<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subscriptions;
use Illuminate\Http\Request;
use Session;
use Excel;

class SubscriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $sattalites = Subscriptions::where('title', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
				->orWhere('data_file', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $sattalites = Subscriptions::paginate($perPage);
        }

        return view('admin.subscriptions.index', compact('sattalites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $cateogriesName = \App\Categories::pluck('title', 'id');
		

        return view('admin.subscriptions.create', compact('cateogriesName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required',
                'full_name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'contact_type' => 'required',
                'source' => 'required'
        ]);
        
        $requestData = $request->all();
        $imageName =  time().".".$request->file('image')->getClientOriginalExtension();
        
        $request->file('image')->move(public_path('images/sattalites/'), $imageName);
        
        $s = Sattalite::create($requestData);
        $s->image = $imageName;
        $s->save();
        
        Session::flash('flash_message', 'Sattalite added!');

        return redirect('App/subscriptions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $sattalite = Sattalite::findOrFail($id);

        return view('admin.subscriptions.show', compact('sattalite'));
    }
    
    public function downloadXls(){
        $type = 'xls';
        $data = Subscriptions::get()->toArray();
        return Excel::create('Subscriptions', function($excel) use ($data) {
                $excel->sheet('mySheet', function($sheet) use ($data)
        {
                        $sheet->fromArray($data);
        });
        })->download($type);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $sattalite = Sattalite::findOrFail($id);

        return view('admin.subscriptions.edit', compact('sattalite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'data_file' => 'required'
		]);
        $requestData = $request->all();
        
        $sattalite = Sattalite::findOrFail($id);
        $sattalite->update($requestData);

        Session::flash('flash_message', 'Sattalite updated!');

        return redirect('App/sattalites');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Sattalite::destroy($id);

        Session::flash('flash_message', 'Sattalite deleted!');

        return redirect('App/sattalites');
    }
}
