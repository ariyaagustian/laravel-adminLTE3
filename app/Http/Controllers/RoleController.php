<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use DataTables;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Role::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('superadmin.roles.index');
    }

    public function store(Request $request)
    {
        Role::updateOrCreate(['id' => $request->product_id],
                ['role_name' => $request->role_name]);

        return response()->json(['success'=>'Product saved successfully.']);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return response()->json($role);
    }

    public function destroy($id)
    {
        Role::find($id)->delete();
        return response()->json(['success'=>'Role deleted successfully.']);
    }
}
