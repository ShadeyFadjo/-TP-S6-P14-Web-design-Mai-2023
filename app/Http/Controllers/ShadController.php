<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class ShadController extends Controller
{
    public function go($n)
    {
        return view('accueil')->with('num',$n);
    }

    public function formulaire()
    {
        return view('inputs');
    }

    public function testws()
    {
        $act=DB::select("select*from acteur ");
        return response()->json($act);
    }

    public function affichage(Request $request)
    {
        //return 'Le nom est ' . $request->input('nom') . ' Le prénom est ' . $request->input('prenom');
         //return view('valiny')->with('infos',$request);
        $mot="z";
        $act=DB::select("select*from acteur where nom like ?",['%'.$mot.'%']);
        // response()->json($act);
        $data=array(
            'nom'=>$request->input('nom') ,
            'prenom'=>$request->input('prenom') ,
            'request'=>$request,
            'acteurs'=>$act
        );

        // DB::table('acteur')->insert([
        //     'nom' => 'Saf Lanto'
        // ]);

        // $affected = DB::table('acteur')
        //       ->where('idacteur', 7)
        //       ->update(['nom' => 'Kal Meg']);

        //  $deleted = DB::table('acteur')
        //       ->where('idacteur', 7)
        //       ->delete();

        return view('valiny',$data);
    }

    public function aller($n,$i)
    {
        $act=DB::select("select*from acteur where idacteur=?",[$n]);
        return view('mandeha');
    }

    public function generatePDF() 
    {
        $dompdf = new Dompdf();
        $html = view('home')->render();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        //$dompdf->save('pdfs/kal.pdf');
        // Output the generated PDF to Browser
        return $dompdf->stream();
    }

    public function script()
    {
        $vilpay=['Reims;France','Münster;Allemagne','Rio de Janeiro;Brésil','Lyon;France','Charleroi;Belgique','Graz;Autriche'];
        $produit=['Mozzarella di Giovanni','Manjimup Dried Apples','Camembert Pierrot','Chartreuse verte','Perth Pasties','Schoggi Schokolade','Tarte au sucre','Steeleye Stout','Nord-Ost Matjeshering','Chang'];
        $societe=['Vins et alcools Chevalier','Toms Spezialitäten','Victuailles en stock','Hanari Carnes','Seven Seas Imports','Lehmanns Marktstand','Antonio Moreno Taquería'];


        $randsociete=array_rand($societe);
        $jour=rand(1,28);
        $mois=rand(1,12);
        $annee=rand(1997,2009);
        $date=$jour.'/'.$mois.'/'.$annee;
        $randvp=array_rand($vilpay);
        $numemploye=rand(1,10);
        $randprod=array_rand($produit);
        $prixtotal=rand(490,6000);
        $sql="$societe[$randsociete] ; $numemploye ; $vilpay[$randvp] ;  $date ; 11078 ; $produit[$randprod]";
        
        return $sql;
    }

    //eto ary

    public function home()
    {
        $act=DB::select("select*from article ");
        $data=array(
            'articles' =>$act
        );
        return view('home',$data);
    }

    public function back()
    {
        return view('back');
    }

    public function front()
    {
        return view('front');
    }

    public function office()
    {
        return view('office');
    }

    public function add(Request $request)
    {
        $file = $request->file('file');

        // if ($file->isValid()) {
        //     $filename = $file->store('public/kalsimage');
        //     //return "Le fichier a été uploadé avec succès. Chemin du fichier : $filename";
        // }
        // else {
        //     return "Une erreur s'est produite lors de l'upload du fichier.";
        // }

        if($request->hasFile('file'))
        {
            $image=$request->file('file');
            $encode=base64_encode(file_get_contents($image));
            $filename=$encode;
        }

        DB::table('article')->insert([
            'titre' => $request->input('titre'),
            'resume' => $request->input('resume'),
            'contenu' => $request->input('content'),
            'image' => $filename
        ]);
        $act=DB::select("select*from article ");
        $data=array(
            'articles'=>$act
        );
        return view('liste',$data);
        //return $request->input('content');
    }

    public function liste()
    {
        $act=DB::select("select*from article ");
        $data=array(
            'articles'=>$act
        );
        return view('liste',$data);
    }

    public function detail($phrase,$id)
    {
        $act=DB::select("select*from article where idarticle=?",[$id]);
        $art=$act[0];
        $data=array(
            'art'=>$art
        );
        return view('detail',$data);
    }

    public function delete($id)
    {
         $deleted = DB::table('article')
              ->where('idarticle', $id)
              ->delete();

              $act=DB::select("select*from article ");
        $data=array(
            'articles'=>$act
        );
        return view('liste',$data);
    }
}
