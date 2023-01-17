<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Champion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ChampionsController extends Controller
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
            $champions = Champion::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $champions = Champion::latest()->paginate($perPage);
        }

        return view('admin.champions.index', compact('champions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.champions.create');
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
        
        $requestData = $request->all();
        
        Champion::create($requestData);

        return redirect('admin/champions')->with('flash_message', 'Champion added!');
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
        $champion = Champion::findOrFail($id);

        return view('admin.champions.show', compact('champion'));
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
        $champion = Champion::findOrFail($id);

        return view('admin.champions.edit', compact('champion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $champion = Champion::findOrFail($id);
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

             // Fill user model
        $champion->fill([
            'title' => $request->title,
            'content' => $request->content,
      
            'image' => $filename,
            

        ]);

        // Save user to database
        $champion->save();
        //$champion->update($requestData);

        return redirect('admin/champions')->with('flash_message', 'Champion updated!');
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
        Champion::destroy($id);

        return redirect('admin/champions')->with('flash_message', 'Champion deleted!');
    }
}
