<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
        $data = [
            'count_user' => User::latest()->count(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_user',
            'title'    => 'Table User'
        ];

        if ($request->ajax()) {
            $q_user = User::select('*')->where('level','!=', 0)->orderByDesc('created_at');
            return Datatables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
 
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('layouts.v_template',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        User::updateOrCreate(['id' => $request->user_id],
                [
                 'name' => $request->name,
                 'email' => $request->email,
                 'level' => $request->level,
                 'password' => Hash::make($request->password),
                ]);        

        return response()->json(['success'=>'User saved successfully!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $User = User::find($id);
        return response()->json($User);

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return response()->json(['success'=>'Customer deleted!']);
    }


    

     public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('show_profile', compact('user'));
    }

    public function my_profile()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('show_profile', compact('user'));
    }
 

     public function updateProfile(Request $request, User $user)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

         $input = $request->all();
     
        $user = \auth::user();

      


         $input = $request->all();
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file_extension = $file->getClientOriginalName();
                $destination_path = public_path() . '/folder/images/';
                $filename = $file_extension;
                $request->file('image')->move($destination_path, $filename);

                
                $input['image'] = $filename;
                // $input['image'] = time() .'$filename';
               $input['image'] = time().'-'.$filename.'.jpg';

            }

            
            // $input = $request->all();
            // if ($request->hasFile('profile_pic')) {
            //     $filer = $request->file('profile_pic');
            //     $file_extension = $filer->getClientOriginalName();
            //     $destination_path = public_path() . '/folder/images/';
            //     $filenamer = $file_extension;
            //     $request->file('profile_pic')->move($destination_path, $filename);

                
            //     $input['profile_pic'] = $filenamer;
            //     // $input['image'] = time() .'$filename';
            //    $input['profile_pic'] = time().'-'.$filenamer.'.jpg';

            // }


       

           
        // Fill user model
        $user->fill([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'tiktok' => $request->tiktok,
            'badge' => $request->badge,
            'image' => $filename,
            

        ]);

        // Save user to database
        $user->save();




         return redirect()->back()->with(['success' => 'Profile Updated Successfully']);
    }



}
