<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    
    public function purchaseWebhook(Request $request)
    {
        $data = $request->all();

        // URL para a qual você deseja enviar o corpo do POST
        $url = 'https://auroraminers.com/api/process/webhook/order';

        // Envie a solicitação POST
        $response = Http::post($url, $data);

        // Opcional: você pode verificar a resposta e fazer algo com ela
        if ($response->successful()) {
            // A solicitação foi bem-sucedida
        } else {
            // A solicitação falhou
        }

        return response()->json(200);
    }

    public function RefundWebhook(Request $request) {
        $data = $request->all();
    
        // Webhook Information
        $dataEnvio = now()->format('d/m/Y H:i:s');
        $mensagem = "**REEMBOLSO REALIZADO**\nCompra id:{$idCompra}";
        $webhookUrl = 'https://discord.com/api/webhooks/1197234759022162012/daMBYVEmAvIr0N21U3FT7oB3DhSkDY7H_t8t7dL5demLrwjqXNxRWYMmWQYiA4Pyumyi';
        $response = Http::post($webhookUrl, ['content' => $mensagem]);
    }

}
