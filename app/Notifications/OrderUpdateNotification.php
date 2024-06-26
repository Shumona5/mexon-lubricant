<?php

namespace App\Notifications;

use App\Models\Customer;
use App\Models\CustomerPurchase;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderUpdateNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public Customer $user;
    public Order $order;
    public function __construct(Order $order)
    {
        $this->user = $order->customer;
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
        // return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Hi ' . $this->user->name . ',')
            ->line('I hope you’re doing well!')
            // ->action('View Order ','https://bosssend.com/')
            // ->line('Your order #' . $this->order->id)
            ->line('Your order #' . $this->order->id.' have been updated to ' . $this->order->status)
            ->line('Please let me know if you have any questions.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'order_id'             => $this->order->id,
            'title'             => 'Your order have been updated to '.$this->order->status,
            'customer_id'         => $this->user->id,
        ];
    }
}
