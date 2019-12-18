<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Apon Builders LTD</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ea at ab itaque, nesciunt qui natus exercitationem fugit tenetur doloremque!</p>
            </div>
            <div class="col">
                <h4>Contact Us</h4>
                <p>
                    <img src="{{asset('/')}}assets/frontend/img/map/location.jpg" alt="">&nbsp; 40 New Design Street, Dhaka
                </p>
                <p>
                    <img src="{{asset('/')}}assets/frontend/img/map/msg.jpg" alt="">&nbsp; Demo@gmail.com
                </p>
                <p>
                    <img src="{{asset('/')}}assets/frontend/img/map/pho.jpg" alt="">&nbsp; +880192-9524168
                </p>
            </div>
            <div class="col">
                <h4 class="use">Usefull Links</h4>
                <ul class="foot">
                    <li><a href="http://" style="color: white;">Home</a></li>
                    <li><a href="http://" style="color: white;">Properties</a></li>
                    <li><a href="http://" style="color: white;">Our Agents</a></li>
                    <li><a href="http://" style="color: white;">Abouts US</a></li>
                    <li><a href="http://" style="color: white;">Contact US</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>Subscribe</h4>
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="subscribe" placeholder="Your Email">
                        <input class=" btn-success" type="submit" name="submit" value="send" style="padding-bottom: 5px; padding-top: 6px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <h6>&copy; Copyright 2019 All rights reserved - Design By Infobizsoft</h6>
    </div>
</div>

</div>
<!-- end featured properties -->

<!-- script link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- carosel -->

<script type="text/javascript">
    <!-- JavaScript to slide images horizontally-->
    $(window).load(function() {
        $(".carousel .item").each(function() {
            var i = $(this).next();
            i.length || (i = $(this).siblings(":first")),
                i.children(":first-child").clone().appendTo($(this));

            for (var n = 0; n < 4; n++)(i = i.next()).length ||
            (i = $(this).siblings(":first")),
                i.children(":first-child").clone().appendTo($(this))
        })
    });
</script>
<script>
    var slider = $("#calculatorSlider");
    var developerBtn = $("#developerBtn");
    var corporateBtn = $("#corporateBtn");
    var privateBtn = $("#privateBtn");
    var reseller = $("#resellerEarnings");
    var client = $("#clientPrice");
    var percentageBonus = 30; // = 30%
    var license = {
        corpo: {
            active: true,
            price: 319,
        },
        dev: {
            active: false,
            price: 149,
        },
        priv: {
            active: false,
            price: 79,
        }
    }

    function calculate(price, value) {
        client.text((Math.round((price - (value / 100 * price)))) + '$');
        reseller.text((Math.round(((percentageBonus - value) / 100 * price))) + '$')
    }

    function reset(price) {
        slider.val(0);
        client.text(price + '$');
        reseller.text((Math.round((percentageBonus / 100 * price))) + '$');
    }
    developerBtn.on('click', function(e) {
        license.dev.active = true;
        license.corpo.active = false;
        license.priv.active = false;
        reset(license.dev.price)
    });
    privateBtn.on('click', function(e) {
        license.dev.active = false;
        license.corpo.active = false;
        license.priv.active = true;
        reset(license.priv.price);
    });
    corporateBtn.on('click', function(e) {
        license.dev.active = false;
        license.corpo.active = true;
        license.priv.active = false;
        reset(license.corpo.price);
    });
    slider.on("input change", function(e) {
        if (license.priv.active) {
            calculate(license.priv.price, $(this).val());
        } else if (license.corpo.active) {
            calculate(license.corpo.price, $(this).val());
        } else if (license.dev.active) {
            calculate(license.dev.price, $(this).val());
        }
    })
</script>
</body>

</html>
