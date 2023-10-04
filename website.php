<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Stationary</title>
</head>

<body>
    <?php include('includes/header.php') ?>

    <div class="body__wrapper">

        <?php include('sections/inc-side__panel.php') ?>

        <main>
            <?php include('sections/inc-dash__banner.php') ?>

            <?php include('sections/inc-links__panel.php') ?>

            <section class="mainTabSection dash__TabSection ">
                <div class="container">
                    <div class="tab__text">
                        <h4 class="dash__sectionHeading">Craft Your Dream Website</h4>
                        <p class="dash__sectionSubHeading">We’ve worked for a wide range of industries. To ensure a personalizedexperience, tell us what niche and specific style you prefer.</p>
                    </div>

                    <div class="dash__tabButtons">
                        <button>Static</button>
                        <button>Dynamic</button>
                        <button>E-commerce</button>
                        <button>Parallax</button>
                        <button>Landing Pages</button>
                        <button>Portfolio</button>
                        <button>Saas</button>
                        <button>Single-Page</button>
                    </div>

                    <div class="dash__tabPanelMain website__main">
                        <!--NOTE: Sequnce of these divs is important here for the tabs to work correctly  
                            The buttons opens the panel with the corresponding (index). If the sequence is disturbed, Then the
                            wrong panel will be displayed.
                        -->

                        <!-- 1- PANEL 1-->
                        <div class="dash__tabPanel">
                            <div class="dash__tabPanelContainer">
                                <div class="img__wrap">
                                    <img src="./assets/images/website-1.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/website-2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- 1 PANEL 1 END-->

                        <!-- 2- PANEL 2-->
                        <div class="dash__tabPanel">
                            <div class="dash__tabPanelContainer">
                                <div class="img__wrap">
                                    <img src="./assets/images/website-2.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/website-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- 2 PANEL 2 END-->

                    </div>

                </div>
            </section>
            <?php include('sections/inc-chatIcon.php') ?>
        </main>
    </div>

    <?php include('includes/footer.php') ?>
    <?php include('includes/footer-scripts.php') ?>
</body>

</html>