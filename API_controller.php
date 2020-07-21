$response = Http::withHeaders([
   'x-rapidapi-host' => 'ali-express1.p.rapidapi.com',
   'x-rapidapi-key' => '2df73*************************'
])->get('https://ali-express1.p.rapidapi.com/product/4001146144105');
        
$product = $response->json();
return $body['actionModule']['addToCartUrl'];
