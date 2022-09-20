<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class Model extends \Illuminate\Database\Eloquent\Model
{
    protected $modifiers = [];
    public $timestamps = false;

    public static function paginar(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $rowperpage = $request->get('length'); // Rows display per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');
        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchColumn = $request->get('search_column');
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = self::select('count(*) as allcount')->count();
        $totalRecordsWithFilter = self::select('count(*) as allcount');
        if (!empty($searchColumn) && !empty($searchValue)) {
            $totalRecordsWithFilter->where($searchColumn, 'like', '%' . $searchValue . '%');
        }
        $totalRecordsWithFilter = $totalRecordsWithFilter->count();

        // Fetch records
        $records = self::orderBy($columnName, $columnSortOrder);

        if (!empty($request->get('filters'))) {
            foreach ($request->get('filters') as $column) {
                if (!empty($request->input($column))) {
                    $records->where($column, $request->input($column));
                }
            }
        }

        if (!empty($searchColumn) && !empty($searchValue)) {
            $records->where($searchColumn, 'like', '%' . $searchValue . '%');
        }
        //    ->select('*')
        $records = $records->skip($start)
            ->take($rowperpage)
            ->get();

        $dataRecords = [];
        $sno = $start + 1;
        foreach ($records as $record) {
            $data_arr = [];
            foreach ($columnName_arr as $column) {
                $nomeColuna = $column['data'];

                // Verifica se há modificadores para a coluna, caso sim, aplica eles
                if (isset($record->modifiers[$nomeColuna])) {
                    $data_arr[$nomeColuna] = $record->modifiers[$nomeColuna]();
                } else {
                    $data_arr[$nomeColuna] = $record->$nomeColuna;
                }
            }
            $dataRecords[] = $data_arr;
        }

        $response = array(
            'draw' => intval($draw),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecordsWithFilter, // $totalRecordsWithFilter
            'data' => $dataRecords
        );

        echo json_encode($response);
        exit;

    }
}

