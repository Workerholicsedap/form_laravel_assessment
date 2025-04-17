<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    // Show form page
    public function create()
    {
        return view('member.create');
    }

    // Store members
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:members,email',
            'password' => 'required|string|min:6',
            'gender'   => 'required|in:Male,Female',
            'birthday' => 'required|date',
        ]);

        Member::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'gender'   => $request->gender,
            'birthday' => $request->birthday,
            'status_active'   => $request->has('status_active'),
        ]);

        return redirect()->route('member.table');
    }

    // Show table page
    public function table()
    {
        $activeMembers = Member::where('status_active', true)->get();
        $inactiveMembers = Member::where('status_active', false)->get();

        return view('member.table', compact('activeMembers', 'inactiveMembers'));
    }

    // Soft delete members
    public function delete($id)
    {
        $members = Member::findOrFail($id);
        $members->delete();

        return back()->with('success', 'members deleted successfully.');
    }
}
