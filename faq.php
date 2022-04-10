<?php
$title = "FAQ";
include_once ("templates/header.php");
?>
<div class="container">

    <h2 class="text-center mt-5">FAQ</h2>

    <div class="accordion accordion-flush my-5" id="faqFlushContainer">

        <!-- Question 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingOne">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseOne"
                        aria-expanded="false" aria-controls="faqCollapseOne">
                    Accordion Item #1
                </button>
            </h2>
            <div id="faqCollapseOne" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingOne" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to
                    demonstrate the <code>.accordion-flush</code> class.
                    This is the first item's accordion body.
                </div>
            </div>
        </div>
        <!-- Question 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingTwo">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo"
                        aria-expanded="false" aria-controls="faqCollapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="faqCollapseTwo" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingTwo" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to
                    demonstrate the faq.
                    This is the second item's accordion body. Let's imagine
                    this being filled with some actual content.
                </div>
            </div>
        </div>
        <!-- Question 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingThree">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseThree"
                        aria-expanded="false" aria-controls="faqCollapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="faqCollapseThree" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingThree" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to
                    demonstrate the faq.
                    This is the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the
                    space to make it look, at least at first glance, a bit more
                    representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
        <!-- Question 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingFour">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseFour"
                        aria-expanded="false" aria-controls="faqCollapseFour">
                    Accordion Item #4
                </button>
            </h2>
            <div id="faqCollapseFour" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingFour" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to
                    demonstrate the faq.
                    This is the third item's accordion body. Nothing more exciting
                    happening here in terms of content, but just filling up the
                    space to make it look, at least at first glance, a bit more
                    representative of how this would look in a real-world application.
                </div>
            </div>
        </div>

    </div>


</div>
<?php include_once ("templates/footer.php");