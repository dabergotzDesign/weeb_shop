<?php 

require_once "./content/manga.class.php";



$manga_db = new Manga('Dragon Ball', 'Akira Toriyama', 42, '5.00$');
$manga_dn = new Manga('Death Note', 'Tsumugi Ohba, Takeshi Obata', 12, '5.00$');
$manga_eva = new Manga('Neon Genesis Evangelion', 'Hideaki Anno', 14, '5.00$');

?>

<form action="products.tpl.php" method="post" class="product__container">

    <section class="product__card">
        <h1 class="product__name">
            <?php echo $manga_db->getTitle() ?>
        </h1>
        <div class="product__image db"></div> <!-- Product Image -->
        <div class="product__info">
            <p>Title: <?php echo "<span>". $manga_db->getTitle() ."</span>" ?></p>
            <p>Author: <?php echo "<span>". $manga_db->getAuthor() ."</span>" ?></p>
            <p>Volumes: <?php echo "<span>". $manga_db->getVolumes() ."</span>" ?> (Complete)</p>
            <p>Price: <?php echo "<span>". $manga_db->getPrice() ."</span>" ?></p>
        </div>

        <select name="volumes1" id="volumes1" class="manga">
            <option value="-- choose volume --">-- choose volume --</option>

            <?php 
                $numVolumesDB = $manga_db->getVolumes();

                for ($i=1; $i < $numVolumesDB + 1; $i++) { 
                    echo "<option class='item'> Dragon Ball - Volume $i </option>";
                }
            ?>

        </select>
            </section>

    <section class="product__card">
        <h1 class="product__name">
            <?php echo $manga_dn->getTitle() ?>
        </h1>
        <div class="product__image dn"></div> <!-- Product Image -->
        <div class="product__info">
            <p>Title: <?php echo "<span>". $manga_dn->getTitle() ."</span>" ?></p>
            <p>Author: <?php echo "<span>". $manga_dn->getAuthor() ."</span>" ?></p>
            <p>Volumes: <?php echo "<span>". $manga_dn->getVolumes() ."</span>" ?> (Complete)</p>
            <p>Price: <?php echo "<span>". $manga_db->getPrice() ."</span>" ?></p>
        </div>

        <select name="volumes2" id="volumes2" class="manga">
            <option value="-- choose volume --">-- choose volume --</option>

            <?php 
                $numVolumesDN = $manga_dn->getVolumes();

                for ($i=1; $i < $numVolumesDN + 1; $i++) { 
                    echo "<option class='item'> Death Note - Volume $i </option>";
                }
            ?>
        </select>
            </section>

    <section class="product__card">
        <h1 class="product__name">
            <?php echo $manga_eva->getTitle() ?>
        </h1>
    <div class="product__image eva"></div> <!-- Product Image -->        
        <div class="product__info">
            <p>Title: <?php echo "<span>". $manga_eva->getTitle() ."</span>" ?></p>
            <p>Author: <?php echo "<span>". $manga_eva->getAuthor() ."</span>" ?></p>
            <p>Volumes: <?php echo "<span>". $manga_eva->getVolumes() ."</span>" ?> (Complete)</p>
            <p>Price: <?php echo "<span>". $manga_eva->getPrice() ."</span>" ?></p>
        </div>

        <select name="volumes3" id="volumes3" class="manga">
            <option value="-- choose volume --">-- choose volume --</option>

            <?php 
                $numVolumesEVA = $manga_eva->getVolumes();

                for ($i=1; $i < $numVolumesEVA + 1; $i++) { 
                    echo "<option class='item'> Neon Genesis Evangelion - Volume $i </option>";
                }
            ?>

        </select>
    </section>
</form>