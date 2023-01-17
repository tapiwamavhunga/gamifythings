<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Challenge;
use Illuminate\Http\Request;

class ChallengesController extends Controller
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
            $challenges = Challenge::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $challenges = Challenge::latest()->paginate($perPage);
        }

        return view('admin.challenges.index', compact('challenges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.challenges.create');
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
        
        Challenge::create($requestData);

        return redirect('admin/challenges')->with('flash_message', 'Challenge added!');
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
        $challenge = Challenge::findOrFail($id);

        return view('admin.challenges.show', compact('challenge'));
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
        $challenge = Challenge::findOrFail($id);

        return view('admin.challenges.edit', compact('challenge'));
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
        
        $challenge = Challenge::findOrFail($id);


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
        $challenge->fill([
            'title' => $request->title,
            'content' => $request->content,
      
            'image' => $filename,
            

        ]);

        // Save user to database
        $challenge->save();


        //$challenge->update($requestData);

        return redirect('admin/challenges')->with('flash_message', 'Challenge updated!');
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
        Challenge::destroy($id);

        return redirect('admin/challenges')->with('flash_message', 'Challenge deleted!');
    }
}
