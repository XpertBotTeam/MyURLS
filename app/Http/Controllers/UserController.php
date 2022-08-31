<?php
namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //Give me all urls records from the table urls
        $u=User::latest()->paginate(4);
        return view('users.index', compact('u'));
    }

    public function create()
    {
        return view('urls.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'url'        => 'required|max:100',
            'description'          => 'max:190'
        ]);


        Url::create([
            'name' => $request->input('name'),
            'url'        => $request->input('url'),
            'user_id'          => $request->input('user_id'),
            'description'          => $request->input('description'),
        ]);

        return redirect()->route('urls.index')
        ->with('msg', 'Record has been inserted successfully');
    }



    public function show($id_or_username)
    {
        $user = User::where('id' , '=', $id_or_username)->orWhere('username', $id_or_username)->firstOrFail();
        $user_id = $user->id;
        $u=Url::where('user_id', $user_id)->paginate(4);
        return view('users.show', compact('user', 'u'));
    }


    public function edit(Url $url)
    {
        if($url->user_id !== auth()->user()->id) {
            return redirect()->route('urls.index')
        ->with('msg', 'This URL is not yours');
        }
        return view('urls.edit', compact('url'));

    }


    public function update(Request $request, Url $url)
    {
        if($url->user_id !== auth()->user()->id) {
            return redirect()->route('urls.index')
        ->with('msg', 'This URL is not yours');
        }

        $request->validate([
            'name' => 'required|max:100',
            'url'        => 'required|max:100',
            'description'          => 'max:190'
        ]);

        $url->update($request->all());
        return redirect()->route('urls.index')
        ->with('msg', 'Record has been updated successfully');

    }

    public function destroy(Url $url)
    {
        if($url->user_id !== auth()->user()->id) {
            return redirect()->route('urls.index')
        ->with('msg', 'This URL is not yours');
        }
        $url->delete();
        return redirect()->route('urls.index')
        ->with('msg', 'Record has been deleted successfully');
    }
}
