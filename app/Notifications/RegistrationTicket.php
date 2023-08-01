<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Peserta;

class RegistrationTicket extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(Peserta $peserta)
    {
        $this->peserta = $peserta;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('e-Tiket Peserta Kegiatan KONREG PDRB-ISE')
                    ->greeting('Selamat, '.$this->peserta->nama)
                    ->line('Anda telah berhasil mendaftar pada acara kegiatan Konsultasi Regional Produk Domestik Regional Bruto (KONREG PDRB-ISE) Se-Sumatera Tahun 2023. Yang Akan diselenggarakan pada:')
                    ->line('Tempat : Hotel BW Suite, Tanjung Pandan, Belitung')
                    ->line('Waktu  : O9 - 11 Agustus 2023')
                    ->action('Cetak Tiket Peserta', url('/tiket_peserta/'.$this->peserta->uuid))
                    ->line('Silahkan untuk mengunduh e-tiket diatas dan informasi lebih lanjut dapat menghubungi Contact Person Sdri. Nades Triyani (HP/WA: 081321619711).')
                    ->line('Demikian disampaikan, atas perhatian dan kerja samanya diucapkan
                    terima kasih.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
