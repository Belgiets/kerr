<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Test task</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="sect sect-cc">
    <div class="container">
        <div class="div-table">
            <div class="div-row">
                <div class="div-cell col-half">
                    <img class="img-top-logo" src="imgs/kerr-logo.png" alt="logo"/>
                    <h1>Cement cleanup can be <span>unpredictable</span>.</h1>
                    <p>
                        Maxcem Elite™ Chroma dispenses pink and fades to a cement shade, allowing you to recognize the
                        precise
                        moment your excess cement is ready to be removed. Then, with just one peel, success.
                        Your restoration is secure.
                    </p>
                    <img class="img-product" src="imgs/product.png" alt="product"/>
                    <p>Change your cement. Change your outcomes.</p>
                </div>
                <div class="div-cell col-half monster">
                    <img src="imgs/monster.jpg" alt="monster"/>
                    <button>Learn More</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sect sect-icons">
    <div class="container">
        <div class="items">
            <div class="itm">
                <div class="itm-icon-wr">
                    <div class="itm-icon eye"></div>
                </div>
                <p>Color cleanup<br>indicator</p>
            </div>
            <div class="itm">
                <div class="itm-icon-wr">
                    <div class="itm-icon second"></div>
                </div>
                <p>Dual-Cure<br>flexibility</p>
            </div>
            <div class="itm">
                <div class="itm-icon-wr">
                    <div class="itm-icon arrows"></div>
                </div>
                <p>Dual-barrel, automix<br>delivery system</p>
            </div>
            <div class="itm">
                <div class="itm-icon-wr">
                    <div class="itm-icon lock"></div>
                </div>
                <p>Enhanced<br>Strength</p>
            </div>
            <div class="itm">
                <div class="itm-icon-wr">
                    <div class="itm-icon trash"></div>
                </div>
                <p>One-Peel™<br>cleanup</p>
            </div>
        </div>
    </div>
</div>

<div class="sect sect-sc">
    <div class="container">
        <div class="sc-wr">
            <div class="col-s">
                <h1>The smartest cement.</h1>
                <p>
                    Our newest addition to our cements family, Maxcem Elite Chroma, is the first cement to offer a
                    Color Cleanup Indicator, making it the smartest cement available on the market today. The
                    color fades at the gel state, telling you the optimal time to cleanup excess cement and it is
                    even compatible with all indirect restorations.
                </p>
                <p>Take our Chroma Color Challenge to see for yourself!</p>
            </div>
            <div class="col-f">
                <img src="imgs/ccc-logo.png" alt="chroma color challenge">
            </div>
        </div>
    </div>
</div>

<div class="sect sect-form">
    <div class="container">
        <div class="form-top">
            <p>
                Fill out the form or call us today, and we’ll schedule a Chroma Challenge for your office! If you
                aren’t completely satisfied, let us know and we’ll make it right.
            </p>
            <span>
              KERR-123
            </span>
            <span>
              1-800-
            </span>
        </div>
        <form id="form" method="post">
            <div class="col-fourth">
                <input type="text" id="f-name" name="f-name" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"/>
            </div>
            <div class="col-fourth">
                <input type="text" id="l-name" name="l-name" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"/>
            </div>
            <div class="col-half">
                <input type="email" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"/>
            </div>
            <div class="col-half">
                <input type="text" id="p-name" name="p-name" placeholder="Practice Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Practice Name'"/>
            </div>
            <div class="col-half">
                <input type="tel" id="tel" name="tel" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"/>
            </div>
            <div class="col-half">
                <input type="text" id="address" name="address" placeholder="Street Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Street Address'"/>
            </div>
            <div class="col-fourth">
                <select id="country" name="country" class="cstm-sel">
                    <option disabled selected>Country</option>
                </select>
            </div>
            <div class="col-fourth">
                <select id="st-pr" name="st-pr" class="cstm-sel">
                    <option disabled selected>State/Province</option>
                </select>
            </div>
            <input type="submit" id="submit" value="Submit"/>
        </form>
    </div>
</div>

<div class="sect sect-carousel">
    <div class="container slider-wr">
        <a href="#" class="flex-nav flex-prev"></a>
        <a href="#" class="flex-nav flex-next"></a>
        <div class="flexslider">
            <ul class="slides">
                <?php

                $slides = [
                    [
                        "<img src='imgs/slides/slide-1.png' alt='preparation'>",
                        "PREPARATION",
                        "Prepare site normally and test restoration for proper fit<span>.</span>"
                    ],
                    [
                        "<img src='imgs/slides/slide-2.png' alt='application'>",
                        "APPLICATION",
                        "Cement is pink when dispensed and gradually fades to the cement shade<span>.</span>"
                    ],
                    [
                        "<img src='imgs/slides/slide-3.png' alt='dual cure'>",
                        "DUAL CURE",
                        "Pink disappears after both self-cure and tack cure, allowing for maximum flexibilty<span>.</span>"
                    ],
                    [
                        "<img src='imgs/slides/slide-3.png' alt='cleanup'>",
                        "CLEANUP",
                        "Clean up is simple once the pink color has turned to the cement color, avoiding potential issues and offering maximum flexibility<span>.</span>"
                    ]
                ];

                foreach ($slides as $slide) {
                    ?>

                    <li>
                        <div class="slide sc-wr">
                            <div class="col-f">
                                <?php echo $slide[0]; ?>
                            </div>
                            <div class="col-s">
                                <h2><?php echo $slide[1]; ?></h2>
                                <p><?php echo $slide[2]; ?></p>
                            </div>
                        </div>
                    </li>

                    <?php
                }

                ?>
            </ul>
        </div>
    </div>
</div>

<div class="sect sect-buy">
    <div class="container">
        <h3>Buy 1 <span>Maxcem Elite™ Chroma</span> Refill and get 1 FREE!</h3>
        <h4>Maxcem Elite™ Chroma  Self-Etch/Self-Adhesive Resin Cement with Cleanup Indicator</h4>
        <p>
            Promotional goods must be of equal or lesser value and cannot be combined with any other offers. No product
            substitutions available. All offers will require a proof of purchase dated from February 1, 2016 to March
            31, 2016 and must be reflected on one invoice. Offers must be redeemed no later than April 30, 2016. Prease
            print promo code MEC16 legibly on your invoice and fax to 888.727.2614 or email a PDF of your invoice to
            kerrpromo@kerrdental.com. Allow up to 8 weeks for promotion to be processed. MKT-1454
        </p>
        <div class="pb-wr">
            <button>Buy Now!</button>
            <img src="imgs/product-box.png" alt="product-box"/>
        </div>
        <div class="copyright">
            ©2016 Kerr Corporation
        </div>
    </div>
</div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- SCRIPTS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script type="application/javascript" src="js/jquery-2.2.1.min.js"></script>
<script type="application/javascript" src="js/jquery.validate.min.js"></script>
<script type="application/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="application/javascript" src="js/app.js"></script>

</body>
</html>
