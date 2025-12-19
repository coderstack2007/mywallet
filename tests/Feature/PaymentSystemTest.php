<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class PaymentSystemTest extends TestCase
{
   
   
   public function test_payment_successfully_deducts_from_sender_and_adds_to_receiver()
{
    // Создаем отправителя и получателя
    $sender = User::factory()->create(['balance' => 1000]);
    $receiver = User::factory()->create(['balance' => 500]);
    
    $this->actingAs($sender);

   

    // Для PUT маршрута с параметром {user}
    $response = $this->put(route('process', ['user' => $receiver->id]), [
        'amount' => 500,
        '_token' => csrf_token(),
    ]);
    dump($response);


    // Проверяем успешный ответ
    $response->assertStatus(302);
    
    // Проверяем, что балансы обновились
    $sender->refresh();
    $receiver->refresh();
}


}
