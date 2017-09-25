@extends('layouts.app')

@include('layouts.header')
@include('layouts.navbar')

<div class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 sec-title colored text-center">
                <h2>Gallery</h2>

                <span class="decor"><span class="inner"></span></span>
            </div>
        </div>
    </div>
</div>

<!--Gallery div-->
<div class="gallery-section pb_70">
    <div class="container">
    </div>

    <div class="container">
        <div class="filter-list clearfix">

            <div class="image-box mix mix_all  charity">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/image6.jpg" class="lightbox-image"><img src="images/gallery/image6.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/image6.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                </div>
            </div>
            <!--Image Box-->
            <div class="image-box mix mix_all child charity sponsorship">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/image7.jpg" class="lightbox-image"><img src="images/gallery/image7.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/image7.jpg" class="lightbox-image btn-zoom" title="Image Title Here"><span class="icon fa fa-search"></span></a>
                </div>
            </div>

            <div class="image-box mix mix_all child charity sponsorship">
                <div class="inner-box">
                    <figure class="image">
                        <a href="images/gallery/hospital.jpg" class="lightbox-image"><img src="images/gallery/hospital.jpg" alt=""></a>
                    </figure>
                    <a href="images/gallery/hospital.jpg" class="lightbox-image btn-zoom" title="Renovated hospital, Atondiir"><span class="icon fa fa-search"></span></a>
                </div>
            </div>

            <div class="image-box mix mix_all child charity sponsorship">
                <div class="inner-box">
                    <figure class="image">
                        <iframe width="230" height="195" src="{{'https://www.youtube.com/embed/frKs-M0O6-M'}}" frameborder="0" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>

            <div class="image-box mix mix_all child charity sponsorship">
                <div class="inner-box">
                    <figure class="image">
                        <iframe width="230" height="195" src="https://www.youtube.com/embed/m5a9VWYCqBc" frameborder="0" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>

            <div class="image-box mix mix_all child charity sponsorship">
                <div class="inner-box">
                    <figure class="image">
                        <iframe width="230" height="195" src="https://www.youtube.com/embed/AVmyqajhmss" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="image-box mix mix_all child charity sponsorship">
                <div class="inner-box">
                    <figure class="image">
                        <iframe width="230" height="195" src="https://www.youtube.com/embed/FGqdWO1_HQg" frameborder="0" allowfullscreen></iframe>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</div>
