<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    
    public function purchaseWebhook(Request $request){

        $data = $request->all();

        // Acessar a matriz de comissões
        $commissions = $data['commission'];

        // Verificar se a matriz de comissões não está vazia
        $firstCommission = $commissions[1];
        $amount = $firstCommission['commission_amount'];
        $valorReal = number_format($amount, 2, ',', '.');


        // Webhook Information
        $dataEnvio = now()->format('d/m/Y H:i:s');
        $mensagem = "**Venda realizada**\nSua comissão ⪼ R$  {$valorReal}";
        $webhookUrl = 'https://discord.com/api/webhooks/1189573132902748212/66VYdjjfTBRna_cJxTIGHXph4ex8FUf26eiAvTJPR0oBY6aDLrS6R9dij_yEwcvgWFD7';
        $response = Http::post($webhookUrl, ['content' => $mensagem]);



        return response()->json(200);

    }

}
