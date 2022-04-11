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
                    What is a monitor?
                </button>
            </h2>
            <div id="faqCollapseOne" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingOne" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    It is a website that keeps an eye on HYIP sites to give you details about them.
                </div>
            </div>
        </div>
        <!-- Question 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingTwo">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo"
                        aria-expanded="false" aria-controls="faqCollapseTwo">
                    What is an HYIP site?
                </button>
            </h2>
            <div id="faqCollapseTwo" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingTwo" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    HYIP are the first letters of the words ( High yield investment project),
                    Which is a website that accepts investments from members and gives them fixed interest in return.
                </div>
            </div>
        </div>
        <!-- Question 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingThree">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseThree"
                        aria-expanded="false" aria-controls="faqCollapseThree">
                    Why do we need a monitor for HYIP sites?
                </button>
            </h2>
            <div id="faqCollapseThree" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingThree" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    99.99% of HYIP sites are ponzis, They star paying but you do not  know when they stop,
                    We tell you if they stopped paying or started making problems for investors
                    this may help investors to avoid losing money in scam sites.
                </div>
            </div>
        </div>
        <!-- Question 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingFour">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseFour"
                        aria-expanded="false" aria-controls="faqCollapseFour">
                    What other services do monitors give for members?
                </button>
            </h2>
            <div id="faqCollapseFour" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingFour" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    RCB (Referral commission back) which is an amount of money we give
                    back for our members if they used our referral links.
                    Also we give compensation for members in case of
                    loss in an HYIP but not for alls ites and the compensation funds
                    will be divided between members who are in loss depending on their
                    initial investment.
                </div>
            </div>
        </div>
        <!-- Question 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingFive">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseFive"
                        aria-expanded="false" aria-controls="faqCollapseFive">
                    What are your monitor responsibilities?
                </button>
            </h2>
            <div id="faqCollapseFive" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingFive" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    We are owed to pay RCB and compensation if found and to
                    give you details about which sites are paying,
                    which sites have problems and to report on scam ones as soon as we know.
                </div>
            </div>
        </div>
        <!-- Question 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingSix">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseSix"
                        aria-expanded="false" aria-controls="faqCollapseSix">
                    Who is responsible for investments?
                </button>
            </h2>
            <div id="faqCollapseSix" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingSix" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    Only members are responsible for were they put their funds,
                    We are only a mediator between members and sites.
                </div>
            </div>
        </div>

        <!-- Question 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeadingSeven">
                <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven"
                        aria-expanded="false" aria-controls="faqCollapseSeven">
                    Do you own any HYIP site?
                </button>
            </h2>
            <div id="faqCollapseSeven" class="accordion-collapse collapse"
                 aria-labelledby="faqHeadingSeven" data-bs-parent="#faqFlushContainer">
                <div class="accordion-body">
                    No, And never will.
                </div>
            </div>
        </div>

    </div>


</div>
<?php include_once ("templates/footer.php");