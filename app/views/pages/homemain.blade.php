@extends("home.layout")
@section("content")
<div class="hero" id="highlighted">
    <div class="inner">
        <!--Flexslider Showshow-->
        <section class="flexslider-wrapper container">
            <div class="flexslider" data-slidernav="auto" data-transition="slide">
                <!--The Slides-->
                <div class="slides">

                    <!--Slide #1 with caption-->
                    <div class="slide row-fluid">
                        <div class="span7"><img src="/img/projopics/kenyamap.png" alt="Slide 1" /></div>
                        <div class="span5 caption">
                            <h2>Map The Data</h2>
                            <h4>On <a href="http://themelize.me">OpenDSS</a></h4>
                            <p>You Can View Your Data in a Way thats Easy to Work With and Understand.</p>
                            <a href="#" class="btn btn-large btn-primary">More Details &raquo</a> </div>
                    </div>

                    <!--Slide #2 straight image 1170px wide x 390px high-->
<!--                    <div class="slide row-fluid"> <img src="img/slides/slide2.png" alt="Slide 2" /> </div>-->

                    <!--Slide #3 & so on below-->
                    <div class="slide row-fluid">
                        <div class="span7"><img src="/img/projopics/bluegraph.png" alt="Slide 1" /></div>
                        <div class="span5 caption">
                            <h2>Graph The Data</h2>
                            <h4>On <a href="http://themelize.me">OpenDSS</a></h4>
                            <p>You Can View Your Data in a Way thats Easy to Work With and Understand.</p>
                            <a href="#" class="btn btn-large btn-primary">More Details &raquo</a> </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div>
<div id="content">
    <div class="container">
        <!-- Services -->
        <div class="block features">
            <h2 class="title-divider"><span>Core <span class="de-em">Features</span></span> <small>What do you get with OpenDSS?.</small></h2>
            <ul class="thumbnails">
                <li class="span3">
                    <h3 class="title"><a href="features.htm">Data<span class="de-em">Visualization</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
                <li class="span3">
                    <h3 class="title"><a href="features.htm">Easy<span class="de-em">Decisions</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
                <li class="span3">
                    <h3 class="title"><a href="features.htm">Graph the <span class="de-em">Data</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
                <li class="span3">
                    <h3 class="title"><a href="features.htm">99.9% <span class="de-em">Uptime</span></a></h3>
                    <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
                </li>
            </ul>
        </div>

        <!--Pricing Table-->

        <!--Customer testimonial-->

    </div>
</div>
<!--<div id="content-below" class="wrapper">-->
<!--    <div class="container">-->
<!--        <div class="row-fluid">-->
<!--            <div class="upsell"> <small class="muted">Want More Information? <span class="spacer">//</span> Free upgrade assistence <span class="spacer">//</span> 24/7 Support <span class="spacer">//</span> Plans from $19.99/month <span class="spacer">//</span> </small> <a href="pricing.htm" class="btn btn-primary">Start your Free Trial Today! <i class="icon-arrow-right"></i></a> </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@stop