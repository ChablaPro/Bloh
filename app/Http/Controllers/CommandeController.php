<?php

namespace App\Http\Controllers;

use App\Mail\Commande as MailCommande;
use App\Mail\Message;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CommandeController extends Controller
{
    public function store(Request $request){
       
        if ($request->messageCheck) {
            $news = Commande::create([
                'messageCheck'=>$request->messageCheck,
                'nom'=>$request->nom,
                'email'=>$request->email,
                'tel'=>$request->tel,
                'message'=>$request->message,
            ]);

            Mail::to("ainahinbloh@gmail.com")
            ->send(new Message($request->except('_token')));
        }

            if (!$request->messageCheck) {
                $news = Commande::create([
                    'messageCheck'=>$request->messageCheck,
                    'nom'=>$request->nom,
                    'email'=>$request->email,
                    'tel'=>$request->tel,
                    'nbrCommande'=>$request->nbrCommande,
                    'total'=>$request->total,
                ]);

                Mail::to("ainahinbloh@gmail.com")
                ->send(new MailCommande($request->except('_token')));

                Mail::to($request->email)
                ->send(new MailCommande($request->except('_token')));
            }
           

            return response()->json([
                'new' => $news
            ]);

    }
}
