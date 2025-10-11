<?php

namespace App\Listeners;

use App\Events\UserOrder;
use App\Mail\UserOrderMail;
use App\Models\Client;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
class ListenUserOrder
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserOrder $event): void
    {
        $client = Client::with(['province', 'commune', 'product'])->find($event->client->id);
        Mail::to('banhadt2@gmail.com')->queue(new UserOrderMail($client)); // dùng queue để gửi nền
    }
}
