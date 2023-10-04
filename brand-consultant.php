<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Brand Consultant</title>
</head>

<body class="">
    <?php include('includes/header.php') ?>

    <div class="body__wrapper">

        <?php include('sections/inc-side__panel.php') ?>

        <main>
            <?php include('sections/inc-dash__banner.php') ?>

            <?php include('sections/inc-links__panel.php') ?>

            <section class="mainTabSection dash__TabSection ">
                <div class="container">
                    <div class="tab__text text-center">
                        <h4 class="dash__sectionHeading">Elevate Your Brand</h4>
                        <p class="dash__sectionSubHeading">Your brand is more than just a logo or a product – it's an experience, a promise, and a connection with your audience. Crafting a compelling brand identity that resonates with your customers is essential to achieving long-term success.</p>
                    </div>

                    <div class="dash__formContainer">
                        <button class="dash__btn dash__btn-subdued ">"It takes less than a minute."</button>
                        <h6>Why do you need the assistance of Brand Consultant?</h6>

                        <form action="" class="question__form">
                            <div>
                                <input type="radio" name="social_media_1" id="s-1">
                                <label for="s-1">I want to rebrand my company.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-2">
                                <label for="s-2">I want to work on new business ideas.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-3">
                                <label for="s-3">I want PR optimization.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-4">
                                <label for="s-4">I want new visual identity.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-5">
                                <label for="s-5">I want HR marketing.</label>
                            </div>
                        </form>

                        <div class="form__buttons">
                            <button class="dash__btn dash__btn-primary" data-next-form>Next</button>
                        </div>
                    </div>
                    <div class="dash__formContainer">
                        <button class="dash__btn dash__btn-subdued ">"Just Do It."</button>
                        <h6>What do you want to achieve?</h6>
                        <form action="" class="question__form">
                            <div>
                                <input type="radio" name="social_media_2" id="s-6">
                                <label for="s-6">Grow my business.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-7">
                                <label for="s-7">Good brand reputation.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-8">
                                <label for="s-8">Increase sales.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-9">
                                <label for="s-9">Build brand loyalty.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-10">
                                <label for="s-10">Expand team.</label>
                            </div>
                        </form>

                        <div class="form__buttons">
                            <button class="dash__btn dash__btn-border" data-prev-form>Previous</button>
                            <button class="dash__btn dash__btn-primary" data-next-form>Next</button>
                        </div>
                    </div>
                    <div class="dash__formContainer">
                        <button class="dash__btn dash__btn-subdued ">"Go to Gym."</button>
                        <h6>How soon do you want to start?</h6>
                        <form action="" class="question__form">
                            <div>
                                <input type="radio" name="social_media_3" id="s-11">
                                <label for="s-11">Right now.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_3" id="s-12">
                                <label for="s-12">In a month.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_3" id="s-13">
                                <label for="s-13">In the quater of this year.</label>
                            </div>
                        </form>

                        <div class="form__buttons">
                            <button class="dash__btn dash__btn-border" data-prev-form>Previous</button>
                            <button class="dash__btn dash__btn-primary" data-next-form>Next</button>
                        </div>
                    </div>
                    <div class="dash__formContainer">
                        <button class="dash__btn dash__btn-subdued ">"Just Submit This Form."</button>
                        <h6>How do you like to pay for the services?</h6>
                        <p class="form__text-300">For this project, we established a budget of</p>
                        <h4 class="selectedAmount">$<span id="amountSelected">0 </span> - $100,000</h4>
                        <form action="" class="amount__form">
                            <div class="amountSlider__container">
                                <label for="amountRange" class="custom__range">
                                    <div class="custom__rangeTrack">
                                        <button class="custom__rangeThumb"></button>
                                    </div>
                                </label>
                                <datalist id="steplist">
                                    <option value="0">0</option>
                                    <option value="1000" class="active">1k</option>
                                    <option value="5000">5k</option>
                                    <option value="10000">10k</option>
                                    <option value="30000">30k</option>
                                    <option value="50000">50k</option>
                                    <option value="70000">70k</option>
                                    <option value="100000">100k</option>
                                </datalist>
                            </div>

                            <p class="form__text-300">and I’d like to spend this</p>
                            <div class="amount__planContainer">
                                <label for="Weekly">
                                    <input type="radio" name="plan" id="Weekly">
                                    <img src="assets/images/icons/checkbox-circle-fill-white.png" alt="">
                                    Weekly
                                </label>
                                <label for="Monthly">
                                    <input type="radio" name="plan" id="Monthly">
                                    <img src="assets/images/icons/checkbox-circle-fill-white.png" alt="">
                                    Monthly
                                </label>
                                <label for="Yearly">
                                    <input type="radio" name="plan" id="Yearly">
                                    <img src="assets/images/icons/checkbox-circle-fill-white.png" alt="">
                                    Yearly
                                </label>
                                <label for="OneTime">
                                    <input type="radio" name="plan" id="OneTime">
                                    <img src="assets/images/icons/checkbox-circle-fill-white.png" alt="">
                                    One Time
                                </label>
                            </div>
                            <p class="form__text-300">You've set a budget of between $0 and $7.5k (monthly) for this project.</p>
                            <div class="helpbutton">
                                <input type="radio" name="" id="helpbutton">
                                <img src="assets/images/icons/checkbox-circle-fill.png" alt="">
                                <label for="helpbutton">I need help, I don’t how much it will costs</label>
                            </div>
                        </form>

                        <div class="form__buttons">
                            <button class="dash__btn dash__btn-border" data-prev-form>Previous</button>
                            <button class="dash__btn dash__btn-primary" data-next-form>Next</button>
                        </div>
                    </div>

                    <div class="dash__formContainer">
                        <h6>Thank You for Your Submission</h6>
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