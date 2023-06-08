@extends('layouts.front')
@section('title')
    About our daycare
@endsection

@section('content')
<div class="bannerInrPage"><img src="images/inrBnr_7.jpg" alt=""></div>
    <div class="bodyContent">
    <div class="container"> 
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
