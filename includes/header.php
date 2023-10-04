<header class='dash__header'>
    <div class="container">
        <div class="headerContainer">
            <div class="logo">
                <img src="./assets/images/logo.png" alt="">
            </div>
            <nav>
                <ul class="dash__navlist active">
                    <li>
                        <button data-open-saved-modal>
                            <img src="./assets/images/header_bookmark_icon.png" alt="">Saved Logos
                        </button>
                    </li>

                    <li>
                        <button data-open-share-modal>
                            <img src="./assets/images/share_icon.png" alt="">Share
                        </button>
                    </li>

                    <li>
                        <button data-open-download-modal class="dash__btn dash__btn-primary">
                            <img src="./assets/images/btn_crown_icon.png" alt="">Download
                        </button>
                    </li>

                    <li>
                        <button data-open-profile-modal class="scaleUp">
                            <img src="./assets/images/header_person_icon.png" alt="">
                            <i class="ri-arrow-down-s-line"></i>
                        </button>
                    </li>
                </ul>
            </nav>
            <div class="burger__logo">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <nav class="mobile__nav">
        <ul>
            <li>
                <button data-open-profile-modal>
                    <img src="./assets/images/header_person_icon.png" alt="">
                    Open Profile
                </button>
            </li>
            <li>
                <button data-open-saved-modal>
                    <img src="./assets/images/header_bookmark_icon.png" alt="">Saved Logos
                </button>
            </li>

            <li>
                <button data-open-share-modal>
                    <i class="ri-share-line"></i>Share
                </button>
            </li>

            <li>
                <button data-open-download-modal>
                    <i class="ri-download-fill"></i>Download
                </button>
            </li>


        </ul>
    </nav>

    <!-- POP UPs OF HEADER -->
    <?php include('modals/profile__modal.php') ?>
</header>


<?php include('modals/share__modal.php') ?>

<?php include('modals/settings__modal.php') ?>

<?php include('modals/saved__modal.php') ?>

<?php include('modals/download__modal.php') ?>