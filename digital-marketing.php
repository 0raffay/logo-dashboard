<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/header-styles.php') ?>
    <title>Digital Marketing</title>
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
                        <h4 class="dash__sectionHeading">Unlock Your Online Potential</h4>
                        <p class="dash__sectionSubHeading">Are you ready to take your business to new heights in the digital realm? Embrace the power of a seasoned Digital Marketing Consultant to navigate the ever-evolving landscape of online marketing.</p>
                    </div>

                    <div class="dash__formContainer">
                        <button class="dash__btn dash__btn-subdued ">"It takes less than a minute."</button>
                        <h6>Why do you need the assitance of Digital Marketing Consultant?</h6>

                        <form action="" class="question__form">
                            <div>
                                <input type="radio" name="social_media_1" id="s-1">
                                <label for="s-1">I want to optimize social media marketing.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-2">
                                <label for="s-2">I want Email Marketing optimization.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-3">
                                <label for="s-3">I want to start SEO for my brand.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-4">
                                <label for="s-4">I want to start running ads on Facebook & Instagram.</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_1" id="s-5">
                                <label for="s-5">I want content marketing for my brand.</label>
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
                                <label for="s-6">Raise awareness</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-7">
                                <label for="s-7">Attract new audience</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-8">
                                <label for="s-8">Target my audience</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-9">
                                <label for="s-9">Get sales</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_2" id="s-10">
                                <label for="s-10">Retain customers</label>
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
                                <label for="s-11">Right now</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_3" id="s-12">
                                <label for="s-12">In a month</label>
                            </div>
                            <div>
                                <input type="radio" name="social_media_3" id="s-13">
                                <label for="s-13">In the quater of this year</label>
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