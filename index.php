<?php 
    $body_id = "homepage";
    require('./components/header.php');
?>

<body id="<?php echo $body_id; ?>">
    <header>
    <?php 
        require './components/top-bar.php';
        require './components/navigation.php';
    ?>
        <section class="hero" data-aos="fade-up">
            <h1 class="hero_title">Empowering developers to decentralize <br/>the world</h1>

            <!-- HERO BACKGROUND GLOW -->
            <img class="hero_glow-background hide-mb" src="./img/glow-background.png" />
            <img class="hero_glow-background show-mb" src="./img/glow-background-mobile.png" />

            <section class="hero_footer">
                <a href="#" target="_blank" class="button-link">work with us</a>
                <a href="https://hardhat.org/" target="_blank">
                    <div class="try-hardhat">
                        <span>makers of <img src="./img/Hardhat-Logo.svg"></span>
                    </div>
                </a>
            </section>
        </section>
    </header>
    <?php 
        require('./components/footer.php');
    ?>
</body>
