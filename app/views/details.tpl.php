<?php 
$pokemon = $viewVars['Pokemon']['0']; 
$pv = $pokemon['pv']*1.4665;
$attaque = $pokemon['attaque']*1.4665;
$defense = $pokemon['defense']*1.4665;
$attaquespe = $pokemon['attaque_spe']*1.4665;
$defensespe = $pokemon['defense_spe']*1.4665;
$vitesse = $pokemon['vitesse']*1.4665;
?>

 <div class="titre_detail">Détails de <?= $pokemon['nom'] ?></div>

 <div class="onePokemon">

    <div class="onePokemonImg"><img id="imageOne" src="<?= $_SERVER['BASE_URI'];?>/img/<?= $pokemon['numero'] . ".png";?>" alt=""></div>
    <div class="onePokemonDetails">
        <div class="nom"><?=  "#" . $pokemon['numero'] . " " . $pokemon['nom'];  ?></div>
        <div class="typesdemerde"></div>
        <h3>Statistiques</h3>
        <div class="caractéristiques">
            <div class="caractéristique">
                <div class="tabLettre">PV</div>
                <div class="tabNumero"><?= $pokemon['pv'] ?></div>
                <div class="tabBarVide"><div class="tabBarPlein" style="width:<?=$pv?>px" ></div></div>
            </div>
            <div class="caractéristique">
                <div class="tabLettre">Attaque</div>
                <div class="tabNumero"><?= $pokemon['attaque'] ?></div>
                <div class="tabBarVide"><div class="tabBarPlein" style="width:<?=$attaque?>px" ></div></div>
            </div>

            <div class="caractéristique">
                <div class="tabLettre">Défense</div>
                <div class="tabNumero"><?= $pokemon['defense'] ?></div>
                <div class="tabBarVide"><div class="tabBarPlein" style="width:<?=$defense?>px" ></div></div>
            </div>
            <div class="caractéristique">
                <div class="tabLettre">Attaque spé.</div>
                <div class="tabNumero"><?= $pokemon['attaque_spe'] ?></div>
                <div class="tabBarVide"><div class="tabBarPlein" style="width:<?=$attaquespe?>px" ></div></div>
            </div>
            <div class="caractéristique">
                <div class="tabLettre">Défense spé.</div>
                <div class="tabNumero"><?= $pokemon['defense_spe'] ?></div>
                <div class="tabBarVide"><div class="tabBarPlein" style="width:<?=$defensespe?>px" ></div></div>
            </div>
            <div class="caractéristique">
                <div class="tabLettre">Vitesse</div>
                <div class="tabNumero"><?= $pokemon['vitesse'] ?></div>
                <div class="tabBarVide"><div class="tabBarPlein" style="width:<?=$vitesse?>px" ></div></div>
            </div>
        </div>
    </div>
</div>

<div class="retour"><a class="retour" href="<?= $router->generate('home'); ?>">Revenir à la liste </a></div>


