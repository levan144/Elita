<?php

namespace App\Http\Controllers;

use App\Notifications\MyNotification;
use App\Models\User;

class NotificationController extends Controller
{
    public function send()
    {
        $user = User::find(1); // Fetch the user. This is just an example, adjust accordingly.
        
        $data = [
            'message' => 'Hello, this is your notification!',
            'user_id' => $user->id
        ];

        $user->notify(new MyNotification($data));

        return redirect()->back()->with('status', 'Notification sent!');
    }
}
