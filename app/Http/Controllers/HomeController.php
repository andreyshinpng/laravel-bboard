<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private const BB_VALIDATOR = [
        'title' => 'required|max:50',
        'category_id' => 'required|numeric',
        'content' => 'required|max:255',
        'price' => 'required|numeric'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile', [
            'bbs' => Auth::user()->bbs()->latest()->get()
        ]);
    }

    public function create()
    {
        return view('bb-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(self::BB_VALIDATOR);
        Auth::user()->bbs()->create([
            'title' => $validated['title'],
            'category_id' => $validated['category_id'],
            'content' => $validated['content'],
            'price' => $validated['price'],
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('profile');
    }

    public function edit(Bb $bb)
    {
        return view('bb-edit', ['bb' => $bb]);
    }

    public function update(Request $request, Bb $bb)
    {
        $validated = $request->validate(self::BB_VALIDATOR);
        $bb->fill([
            'title' => $validated['title'],
            'category_id' => $validated['category_id'],
            'content' => $validated['content'],
            'price' => $validated['price']
        ]);
        $bb->save();
        return redirect()->route('profile');
    }

    public function delete(Bb $bb)
    {
        return view('bb-delete', ['bb' => $bb]);
    }

    public function destroy(Bb $bb)
    {
        $bb->delete();
        return redirect()->route('profile');
    }
}
