<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;

class AdminMessageController extends Controller
{
    public function index()
    {
        $messages = ContactModel::latest()->get();

        return view('admin.messages', compact('messages'));
    }

    public function show($id)
    {
        $message = ContactModel::findOrFail($id);

        return view('admin.message.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = ContactModel::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages')
            ->with('success', 'Message deleted successfully.');
    }
}