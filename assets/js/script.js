$(document).ready(function () {
    // sliders();
    side__panelOpen();
    tabSwitcher();
    handle__profileButton();
    handle__shareButton();
    handle__closeModal();
    handle__settingsButton();
    handle__savedButton();
    handle__downloadButton();
    open__phoneMenu();
    open__mobileSidePanel();
    active__page();
    open__dropDown();
    question__formHideShow();
    autoscroll__onPageLoad();
    // amount__slider();
});

function sliders() {
    $(".dash__banner_slider").slick({
        dots: true,
        centerMode: true,
        autoplay: true,
        autoplaySpeed: 1600,
        slidesToShow: 3,
        slidesToScroll: 1,
        variableWidth: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
}
sliders();

function side__panelOpen() {
    var i = 0;
    $(".opanPanel").click(function () {
        if (i == 0) {
            $(".side__panel").addClass("side__panel-open");
            i++;
        } else {
            $(".side__panel").removeClass("side__panel-open");
            i--;
        }
    });
}

function tabSwitcher() {
    var buttons = $(".dash__tabButtons button"); // Select all the buttons inside the .dash__tabButtons
    var panels = $(".dash__tabPanel");

    let slideTimer = 0;

    panels.hide();

    panels.eq(0).show();
    buttons.eq(0).addClass("active");

    buttons.click(function () {
        buttons.removeClass("active");
        $(this).addClass("active");
        var buttonIndex = buttons.index(this);

        panels.hide();
        panels.eq(buttonIndex).show();

        if (slideTimer <= 0) {
            $("html, body").animate(
                {
                    scrollTop: $(".dash__TabSection").offset().top,
                },
                1000
            );
        }
        slideTimer++;
    });
}

function autoscroll__onPageLoad() {
    if ($("body").hasClass("noscroll")) {
        return;
    } else {
        $("html, body").animate(
            {
                scrollTop: $(".dash__TabSection").offset().top,
            },
            300
        );
    }
}

function handle__closeModal() {
    let closeButton = $("[data-close-modal]");
    closeButton.click(function () {
        $(this).closest(".popup__overlay").hide();
    });
}

function handle__profileButton() {
    let header__profileButton = $("[data-open-profile-modal]");
    let profile__modal = $(".profile__modal");
    header__profileButton.click(function (e) {
        profile__modal.toggleClass("active");
        e.preventDefault();
    });
}

function handle__shareButton() {
    let share__button = $("[data-open-share-modal]");
    let share__modal = $(".share__modal");
    share__button.click(function (e) {
        share__modal.toggle();
        e.preventDefault();
    });

    let copyButton = $("[data-copy-button]");
    copyButton.click(function() {
        let textToCopy = $(this).prev().val()
        navigator.clipboard.writeText(textToCopy);
        alert("Copied the text: " + textToCopy);
    })
}

function handle__settingsButton() {
    let settings__button = $("[data-open-settings-modal]");
    let settings__modal = $(".settings__modal");
    settings__button.click(function (e) {
        settings__modal.show();
        e.preventDefault();
    });
}

function handle__savedButton() {
    let saved__button = $("[data-open-saved-modal]");
    let saved__modal = $(".saved__modal");

    saved__button.click(function (e) {
        saved__modal.toggle().addClass("active");
        e.preventDefault();
    });
}

function handle__downloadButton() {
    let download__button = $("[data-open-download-modal]");
    let download__modal = $(".download__modal");

    download__button.click(function (e) {
        download__modal.toggle().addClass("active");
        $(".download__modalSlider").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: $(".download__modalSliderArrows .download-prev"),
            nextArrow: $(".download__modalSliderArrows .download-next"),
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
        e.preventDefault();
    });
}

function open__phoneMenu() {
    let burger__button = $(".burger__logo");
    let phone__menu = $(".mobile__nav");
    burger__button.click(function () {
        $(this).toggleClass("active");
        phone__menu.toggleClass("active");
        $(".profile__modal").removeClass("active");
        $(".open__mobileSidePanel").removeClass("active");
        $(".mobile__sidepanel").removeClass("active");
    });
}

function open__mobileSidePanel() {
    let open__button = $(".open__mobileSidePanel");
    let mobile__panel = $(".mobile__sidepanel");
    open__button.click(function () {
        mobile__panel.toggleClass("active");
        $(this).toggleClass("active");
        $(".mobile__nav").removeClass("active");
        $(".burger__logo").removeClass("active");
    });
}

function active__page() {
    let links = $(".side__nav li a");
    let currentLocation = window.location.href;
    let exactLocation = currentLocation.replace(
        "http://localhost/loogo-dashboard/",
        ""
    );
    console.log(exactLocation);

    links.removeClass("active"); // Remove active class from all links

    setTimeout(function () {
        links.each(function () {
            let thisHrefValue = $(this).attr("href");
            if (thisHrefValue === exactLocation) {
                $(this).addClass("active"); // Add active class to the current link
            }
        });
    }, 200);
}

function open__dropDown() {
    let open__button = $("[data-open-drop-down]");
    open__button.click(function () {
        let drop__down = $(this).closest(".drop__down").find(".drop__downMenu");
        drop__down.toggle();

        // Toggle arrow icons based on dropdown visibility
        let arrowDown = $(this).find("i.ri-arrow-down-s-line");
        let arrowUp = $(this).find("i.ri-arrow-up-s-line");

        if (drop__down.is(":visible")) {
            arrowDown.hide();
            arrowUp.show();
        } else {
            arrowDown.show();
            arrowUp.hide();
        }
    });
}

function question__formHideShow() {
    let prev__button = $("[data-prev-form]");
    let next__button = $("[data-next-form]");

    $("section .container .dash__formContainer").eq(0).show();

    next__button.click(function () {
        let formQuestions = $(this).parent().prev().find("input");
        formQuestions.change(function () {
            formQuestions.removeClass("error");
        });

        let checkQuestionsState = formQuestions.is(":checked");

        let formToHide = $(this).parent().closest(".dash__formContainer");
        let formToShow = $(this)
            .parent()
            .closest(".dash__formContainer")
            .next();

        if (checkQuestionsState) {
            formToHide.hide();
            formToShow.show();
        } else {
            formQuestions.addClass("error");
            console.log("error");
        }
    });

    prev__button.click(function () {
        let formToHide = $(this).parent().closest(".dash__formContainer");
        let formToShow = $(this)
            .parent()
            .closest(".dash__formContainer")
            .prev();
        formToHide.hide();
        formToShow.show();
    });
}

// function amount__slider() {
//     const slider = document.querySelector(".amount__form input[type='range']");
//     const sliderValue = document.getElementById("amountSelected");

//     slider.addEventListener("input", (event) => {
//       const value = event.target.value;
//       sliderValue.innerHTML = value;
//     });

//   }
//   document.addEventListener("DOMContentLoaded", function () {
//     amount__slider();
//   });

$(document).ready(function () {
    let customTrack = $(".custom__rangeTrack");
    let showAmount = $("#amountSelected");

    $("#steplist").on("click", "option", function () {
        $("#steplist option").removeClass("active");
        $(this).addClass("active");
        showAmount.text($(this).val());

        var optionValue = parseInt($(this).val());
        let width = {
            width_1000: "21.5%",
            width_5000: "31%",
            width_10000: "41%",
            width_30000: "52%",
            width_50000: "64%",
            width_70000: "76.5%",
        };

        if (optionValue === 0) {
            customTrack.css({ width: "0" });
        } else if (optionValue === 1000) {
            customTrack.css({ width: width.width_1000 });
        } else if (optionValue === 5000) {
            customTrack.css({ width: width.width_5000 });
        } else if (optionValue === 10000) {
            customTrack.css({ width: width.width_10000 });
        } else if (optionValue === 30000) {
            customTrack.css({ width: width.width_30000 });
        } else if (optionValue === 50000) {
            customTrack.css({ width: width.width_50000 });
        } else if (optionValue === 70000) {
            customTrack.css({ width: width.width_70000 });
        } else {
            customTrack.css({ width: "100%" });
        }
    });
});
