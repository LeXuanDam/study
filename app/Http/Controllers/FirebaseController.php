<?php

namespace App\Http\Controllers;

use Illuminate\Notifications\Messages\NexmoMessage;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FirebaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (new NexmoMessage)
            ->content('Your SMS message content')
            ->from('0918484638');
    }

}