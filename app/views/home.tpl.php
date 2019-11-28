<?php $pokemons = $viewVars['Pokemon']; ?>

<div id="main">

    <?php foreach($pokemons as $pokemon): ?>
        <a href="<?= $_SERVER['BASE_URI'] ?>/details/<?= $pokemon['numero']?>">
            <div class='pokemonImgNam' >
                <div class="pokemonImage"><img src="<?= $_SERVER['BASE_URI'];?>/img/<?= $pokemon['numero'] . ".png";?>" alt=""></div>
                <div class='pokemonName'><?=  "#" . $pokemon['numero'] . " " . $pokemon['nom'];  ?></div>
            </div>
        </a>
    <?php endforeach; ?>

</div>
