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
}
