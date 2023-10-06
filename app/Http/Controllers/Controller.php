<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Barryvdh\DomPDF\PDF;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Owenoj\PDFPasswordProtect\Facade\PDFPasswordProtect;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function checkPaiement($transactionid)
    {
        if (Paiement::where("TransactionID", $transactionid)->exists()) {
            return Paiement::where("TransactionID", $transactionid)->first();
        }
        try {
            $kkiapay = new \Kkiapay\Kkiapay(
                env('KKIA_PUBLIC_KEY'),
                env('KKIA_PRIVATE_KEY'),
                env('KKIA_SECRET_KEY'),
                $sandbox = env('KKIA_SANDBOX')
            );

            $res = $kkiapay->verifyTransaction($transactionid);

            if ($res->status == 'SUCCESS' && intval($res->amount) >= intval(env("MONTANT_EBOOK"))) {
                // dd(["succes",$res->client->email, $res ]);
                $paiement = Paiement::create([
                    "TransactionID" => $transactionid,
                    "Email" => $res->client->email,
                    "Montant" => $res->amount,
                    "NbreTelecharger" => 0
                ]);
                return $paiement;
                //return redirect('/mes-demandes')->with('success', 'Paiement effectué avec success');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return null;
    }
    public function getPDF($transactionid)
    {
        $paiement = $this->checkPaiement($transactionid);
        return view("result", compact('paiement'));

        // if (is_null($paiement)) {
        //     return redirect("/")->withErrors(["message" => "Paiements non retrouvé"]);
        // }
        // if (intval($paiement->NbreTelecharger) > env("NBRE_TEL_MAX")) {
        //     return redirect("/")->withErrors(["message" => "Vous avez déjà atteint la limite de téléchargement maximal ( " . env('NBRE_TEL_MAX') . " Téléchargement au maximum)"]);
        // }


        // // Chemin vers le fichier PDF existant dans le dossier "storage"
        // $pdfPath = storage_path('app/private/ebook1.pdf');

        // // Chemin de sortie pour le PDF protégé
        // $outputPath = storage_path('app/private/Parler_Anglais_Sans_Faute.pdf');

        // // Mot de passe à ajouter au PDF
        // $password = $transactionid;

        // PDFPasswordProtect::encrypt($pdfPath, $outputPath, $password);

        // $paiement->NbreTelecharger = $paiement->NbreTelecharger + 1;
        // $paiement->save();
        // return response()->download($outputPath, 'Parler_Anglais_Sans_Faute.pdf')->deleteFileAfterSend(true);
    }
    function download($transactionid)
    {
        $paiement = $this->checkPaiement($transactionid);


        if (is_null($paiement)) {
            return redirect("/")->withErrors(["message" => "Paiements non retrouvé"]);
        }
        if (intval($paiement->NbreTelecharger) > env("NBRE_TEL_MAX")) {
            return redirect("/")->withErrors(["message" => "Vous avez déjà atteint la limite de téléchargement maximal ( " . env('NBRE_TEL_MAX') . " Téléchargement au maximum)"]);
        }


        // Chemin vers le fichier PDF existant dans le dossier "storage"

        // // Chemin de sortie pour le PDF protégé
        // $outputPath = storage_path('app/private/Parler_Anglais_Sans_Faute.pdf');

        // // Mot de passe à ajouter au PDF
        // $password = $transactionid;

        // PDFPasswordProtect::encrypt($pdfPath, $outputPath, $password);
        $pdfPath = storage_path('app/private/ebook1.pdf');

        $paiement->NbreTelecharger = $paiement->NbreTelecharger + 1;
        $paiement->save();
        return response()->download($pdfPath, 'Parler_Anglais_Sans_Faute.pdf');
    }
}
