<?php
    // INT to DEV
    // Layout : Intérieur
    // Colonne : 3 colonnes
    // Option :

    // Chargement de la page des modules
    include 'pages/'.$page.'.php';
?>
<section id="wrapper">
    <div class="container l-col-3 clearfix">
        <section class="l-col main-content">
            <?php
                foreach($modules['main'] as $module){
                    if(file_exists('pages/modules/'.$module.'.php')){
                        include('pages/modules/'.$module.'.php');
                    }
                }
            ?>
        </section>
        <aside class="l-col col-left">
            <?php
                foreach($modules['left'] as $module){
                    if(file_exists('pages/modules/'.$module.'.php')){
                        include('pages/modules/'.$module.'.php');
                    }
                }
            ?>
        </aside>
        <aside class="l-col col-right">
            <?php
                foreach($modules['right'] as $module){
                    if(file_exists('pages/modules/'.$module.'.php')){
                        include('pages/modules/'.$module.'.php');
                    }
                }
            ?>
        </aside>
    </div>
</section>