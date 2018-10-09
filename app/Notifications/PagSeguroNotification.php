<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Mail;
use App\Models\TextosCubo;

class PagSeguroNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            //
        ];
    }

    /**
     * Callback de notificação do PagSeguro
     *
     * @param [type] $information
     * @return void
     */
    public static function pagseguro($information)
    {
        $response = PagSeguroNotification::setResponse($information);

        $pagou = $response['status_transacao'] == 'paga';

        if ($pagou) {
            $id_cubo = $response['id_cubo'];
            $name = $response['name'];
            $email = $response['email'];

            $anexo_path = base_path('storage/app/public/' . TextosCubo::find($id_cubo)->path_pdf);

            Mail::send(['text' => 'email_anexo'], ['name', '3D Financial Academy'], function($message) use ($email, $name, $anexo_path) {
                $message->to($email, "Para $name")->subject('Posicionamento Estratégico - Conteúdo');
                $message->from('3dfinancialacademy@gmail.com', '3D Financial Academy');
                $message->attach($anexo_path, [
                    'mime' => 'application/pdf' 
                ]);
            });

            \Log::info('Anexo : ' . $anexo_path);
            \Log::info('Enviado para : ' . $email);
        } else {
            \Log::error('Erro no envio de anexos. Informações da transação:');
            \Log::error($response);
        }
    }

    public static function setResponse($information)
    {

        $status_transacao = strtolower($information->getStatus()->getName());
        $sender = $information->getSender();
        $email = $sender->getEmail();
        $name = $sender->getName();

        $response = [
            'status_transacao' => $status_transacao,
            'email' => $email,
            'name' => $name,
        ];

        foreach ($information->getItems() as $item) {
            $id_cubo = $item->getId();
            $response['id_cubo'] = $id_cubo;
        }

        return $response;
    }

}
