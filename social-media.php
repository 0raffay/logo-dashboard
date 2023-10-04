<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Social Media</title>
</head>

<body>
    <?php include('includes/header.php') ?>

    <div class="body__wrapper">

        <?php include('sections/inc-side__panel.php') ?>

        <main>
            <?php include('sections/inc-dash__banner.php') ?>

            <?php include('sections/inc-links__panel.php') ?>

            <section class="mainTabSection dash__TabSection social__mediaMain">
                <div class="container">
                    <div class="tab__text">
                        <h4 class="dash__sectionHeading">Pick Your Favorite Social Media Design!</h4>
                        <p class="dash__sectionSubHeading">We’ve worked for a wide range of industries. To ensure a personalizedexperience, tell us what niche and specific style you prefer.</p>
                    </div>

                    <div class="drop__down">
                        <div class="dash__tabButtons">
                            <button>Facebook</button>
                            <button>Instagram</button>
                            <button>Twitter</button>
                            <button>Linkedin</button>
                            <button>Pinterest</button>
                            <button class="dash__btn dash__btn-border">Want Custom Stationay?</button>
                            <span data-open-drop-down>
                                Show Industries<i class="ri-arrow-down-s-line"></i>
                                <i class="ri-arrow-up-s-line"></i>
                            </span>
                        </div>
                        <div class="drop__downMenu" id="categoryPanel">
                            <input type="text" class="panelInput" placeholder="Pick your interested industry for your logo!">
                            <hr>
                            <div class="searchTabs">
                                <ul class="tabs-list ">
                                    <li><a href="#">Fashion and Apparel</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Fintech</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Health and Wellness</a></li>
                                    <li><a href="#">Travel and Tourism</a></li>
                                    <li><a href="#">Beauty</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="dash__tabPanelMain">
                        <!--NOTE: Sequnce of these divs is important here for the tabs to work correctly  
                            The buttons opens the panel with the corresponding (index). If the sequence is disturbed, Then the
                            wrong panel will be displayed.
                        -->

                        <!-- 1- PANEL 1-->
                        <div class="dash__tabPanel">
                            <div class="dash__tabPanelContainer">
                                <div class="img__wrap">
                                    <img src="./assets/images/social-1.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-2.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-3.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-4.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-5.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-6.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- 1 PANEL 1 END-->

                        <!-- 2- PANEL 2-->
                        <div class="dash__tabPanel">
                            <div class="dash__tabPanelContainer">
                                <div class="img__wrap">
                                    <img src="./assets/images/social-6.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-1.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-4.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-2.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-5.png" alt="">
                                </div>
                                <div class="img__wrap">
                                    <img src="./assets/images/social-3.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- 2 PANEL 2 END-->

                        <div class="text-center stationary__button">
                            <button class="dash__btn  dash__btn-border">
                                Want Custom Stationay?
                            </button>
                        </div>

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