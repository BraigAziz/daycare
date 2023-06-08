@extends('layouts.front')
@section('title')
    About our daycare
@endsection

@section('content')
<div class="bannerInrPage"><img src="images/inrBnr_15.jpg" alt=""></div>
      <div class="bodyContent">
         <div class="container">
            <img width="400px" src="images/food.jpg" alt="" class="pisSet1" />
            <h1>SERVICE TRAITEUR POUR GARDERIE</h1>
            <p class="paragraph" style="margin: 0in 0in 0.0001pt; font-size: medium;">
            <span class="normaltextrun"><span>Le MFA coupe drastiquement dans ses subventions aux CPE et garderies subventionnées qui ne voient pas leurs coûts de fonctionnement diminuer. Avec le Service de Traiteur Frais du Jour, vous pouvez économiser jusqu'à 20 % de vos dépenses en cuisine en faisant la joie des enfants, le bonheur des parents à la satisfaction intégrale du MFA. Mettez fin à vos tracas et à vos dépassements de coûts en faisant affaire avec le Service de Traiteur Frais du jour qui vous offre un menu des plus variés et toujours frais. Nous servons déjà pour 160 enfants à chaque jour.
Faîtes de vos enfants des heureux qui auront des plats sains, succulents, frais du jour et ce, pour une fraction de vos dépenses actuelles. Nous nous occupons de tout et garantissons le résultat en vous livrant quotidiennement la nourriture. Nous le faisons déjà depuis plusieurs années. Bien faire, c'est notre affaire. Manger frais à peu de frais, c'est votre affaire.
N'hésitez pas à nous contacter.</span></span></p>
            

            <div style="height:100px;"></div>
            <h2>MENU DE LA SEMAINE DU 10 AVRIL 2023</h2>
            <div style="height:50px;"></div>
            <div class="calendier">
                <div class="lundi">
                    <div class="title">
                    Lundi
                    </div>
                    <div class="menu">
                    <ul>
                        <li>Collation A.M.: Mini croissant avec du lait</li>
                        <li>Dîner: Macaroni chinois au poulet</li>
                        <li>Collation P.M.: Pouding aux noix de coco</li>
                    </ul>
                    </div>
                </div>
                <div class="mardi">
                    <div class="title">
                    Mardi
                    </div>
                    <div class="menu">
                    <ul>
                        <li>Collation A.M.: Mini croissant avec du lait</li>
                        <li>Dîner: Macaroni chinois au poulet</li>
                        <li>Collation P.M.: Pouding aux noix de coco</li>
                    </ul>
                    </div>
                </div>
                <div class="mercredi">
                    <div class="title">
                    Mercredi
                    </div>
                    <div class="menu">
                    <ul>
                        <li>Collation A.M.: Mini croissant avec du lait</li>
                        <li>Dîner: Macaroni chinois au poulet</li>
                        <li>Collation P.M.: Pouding aux noix de coco</li>
                    </ul>
                    </div>
                </div>
                <div class="jeudi">
                    <div class="title">
                    jeudi
                    </div>
                    <div class="menu">
                    <ul>
                        <li>Collation A.M.: Mini croissant avec du lait</li>
                        <li>Dîner: Macaroni chinois au poulet</li>
                        <li>Collation P.M.: Pouding aux noix de coco</li>
                    </ul>
                    </div>
                </div>
                <div class="vendredi">
                    <div class="title">
                    vendredi
                    </div>
                    <div class="menu">
                    <ul>
                        <li>Collation A.M.: Mini croissant avec du lait</li>
                        <li>Dîner: Macaroni chinois au poulet</li>
                        <li>Collation P.M.: Pouding aux noix de coco</li>
                    </ul>
                    </div>
                </div>
                </div>

                <style>
                .calendier{
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                }
                .calendier > *{
                    padding: 20px;
                    border-radius: 0px 10px 15px 5px;
                    background-color: rgba(61, 33, 161, 0.123);
                    color: #fff;
                }
                .calendier .title{
                    text-align: center;
                    background-color: aqua;
                    color: black;
                    border-radius: 0px 10px 15px 5px;
                    font-size: large;
                    padding: 10px;
                    font-family: monospace;
                }
                </style>
         </div>
      </div>
@endsection
