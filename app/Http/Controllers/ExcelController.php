<?php

namespace App\Http\Controllers;

use App\Imports\HealthImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Health;
use Illuminate\Support\Facades\View;

class ExcelController extends Controller
{
    public function index()
    {
        $data = Health::where('office', 'وحدة طب أسرة عزبة النهضة')->get();
        // return $healths->chunk(14);
        return view('excel.index', compact('data'));
    }

    public function word()
    {
        $data = Health::where('office', 'وحدة طب أسرة عزبة النهضة')->get();
        $view = View::make('Excel.index')->with('data', $data)->render();
        $file_name = strtotime(date('Y-m-d H:i:s')) . '_health.docx';
        $headers = array(
            "Content-type"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document",
            "Content-Disposition"=>"attachment;Filename=test.doc"

            // 'Cache-Control: private, max-age=0, must-revalidate',
        );
        return response()->make($view, 200, $headers);
    }

    public function create()
    {
        return view('excel.store');
    }

    public function store(Request $request)
    {
        Excel::import(new HealthImport, $request->file('file'));
        return redirect()->route('excel.index');
    }

    public function show()
    {
        // $healths = Health::where('office', 'وحدة طب أسرة عزبة النهضة')->get()->toArray();
        // $pdf = Pdf::loadView('Excel.index');
        // return $pdf->download('invoice.pdf');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
