<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Badge;
use Illuminate\Http\Request;

class BadgesController extends Controller
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
            $badges = Badge::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $badges = Badge::latest()->paginate($perPage);
        }

        return view('admin.badges.index', compact('badges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.badges.create');
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

        // var_dump($requestData);
        // die(); 
        Badge::create($requestData);

        return redirect('admin/badges')->with('flash_message', 'Badge added!');
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
        $badge = Badge::findOrFail($id);

        return view('admin.badges.show', compact('badge'));
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
        $badge = Badge::findOrFail($id);

        return view('admin.badges.edit', compact('badge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    // public function update(Request $request, $id)
    // {
        
    //     $requestData = $request->all();
        
    //     $badge = Badge::findOrFail($id);
    //     $badge->update($requestData);

    //     return redirect('admin/badges')->with('flash_message', 'Badge updated!');
    // }


    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $badge = Badge::findOrFail($id);

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
        $badge->fill([
            'title' => $request->title,
            'content' => $request->content,
      
            'image' => $filename,
            

        ]);

        // Save user to database
        $badge->save();




        return redirect('admin/badges')->with('flash_message', 'Badge updated!');
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
        Badge::destroy($id);

        return redirect('admin/badges')->with('flash_message', 'Badge deleted!');
    }
}
