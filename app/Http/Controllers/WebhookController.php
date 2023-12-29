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
    
        // Encontrar a comissão com o nome "PerfectPay"
        $perfectPayCommission = null;
        foreach ($commissions as $commission) {
            if (isset($commission['email']) && $commission['email'] === 'cryptominersbrasil@outlook.com') {
                $perfectPayCommission = $commission;
                break;
            }
        }
    
        if ($perfectPayCommission) {
            // Comissão "PerfectPay" encontrada, você pode acessar os dados relevantes aqui
            $commissionAmount = $perfectPayCommission['commission_amount'];
            $formattedAmount = number_format($commissionAmount, 2, ',', '.');
    
            // Webhook Information
            $dataEnvio = now()->format('d/m/Y H:i:s');
            $mensagem = "**Venda realizada**\nComissão ⪼ R$  {$formattedAmount}";
            $webhookUrl = 'https://discord.com/api/webhooks/1189573132902748212/66VYdjjfTBRna_cJxTIGHXph4ex8FUf26eiAvTJPR0oBY6aDLrS6R9dij_yEwcvgWFD7';
            $response = Http::post($webhookUrl, ['content' => $mensagem]);
        }
    
        return response()->json(200);
    }    

}
