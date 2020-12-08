<?php
    include_once('components/header.php');
    include_once('components/navbar.php');
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php echo getHeader('RotaractMora Manusath Handa'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php  echo getNavBar(); ?>

    <section id="banner">
        <div class="class-banner-image">
            <img src="/images/logosrota/New folder (4)/New folder/logo transperant4.png" id="banner-image">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" role="listbox">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <p width>This project intends to provide massive support for the visually impaired students in Sri Lanka by offering them audiobooks that cover the subject matter which they learn using the Braille technique. It has been discovered that
                            audiobooks are far more effective, comfortable and can cover the content in a commendable manner while helping the students to hear and learn beyond what they have imagined.</p>
                    </div>

                    <div class="item">
                        <p width>මෙම ව්‍යාපෘතිය ශ්‍රී ලංකා විභාග දෙපාර්තමේන්තුවේ සහ විජය පුවත්පත් සමාගමේ අවසරය මත සිදු කරන ලද්දකි.</p>
                    </div>

                    <div class="item">
                        <p>මනුසත් හඬ යනු ශ්‍රී ලංකාවේ දෘශ්‍යාබාධිත සිසුන්ගේ අධ්‍යාපනික හා සාහිත්‍යමය දැනුම වර්ධනය කරලීම සඳහා මොරටුව විශ්ව විද්‍යාලයේ රොටරැක්ට් සමාජය විසින් කරනු ලබන සමාජ සත්කාරක ව්‍යාපෘතියකි.</p>
                    </div>

                    <div class="item">
                        <p>An initiative of Rotaract Mora to uplift the education for the visually impaired students through audiobooks.</p>
                    </div>

                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>

    <!-- CTA -->
    <!--<section id="cta" class="wrapper">

	</section>-->


    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a category</h2>
                <p>Click on a button below to view, listen & download audio materials.</p>
            </header>
            <div class="highlights" id="homepage-buttons">
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='magazines.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>Magazines</h3>
                        </header>
                        <p>Listen to an ever-growing collection of the most popular children's magazines</p>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='past_papers.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>Past Papers</h3>
                        </header>
                        <p>Listen to the past papers of G.C.E. Ordinary Level exam</p>
                    </div>
                </section>
            </div>
        </div>
    </section>



    <!-- Testimonials -->

    <section id="bottom-blogs">
        <div class="bottom-blogs">
            <div id="blogsCarousel" class="carousel slide" data-ride="carousel" role="listbox" style=" width:100%;">
                <!-- Indicators -->
                <!--<ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>-->
                <!-- Wrapper for slides -->
                <div class="carousel-inner" style="text-align: center;">
                    <div class="item active">
                        <div>
                            <img id="blog-image" width="35%" height="auto" src="/images/photo manusath.jpg">
                            <div class="post-entry-content">
                                <div class="content_post_grid">
                                    <p class="selectionShareable">As told by Rtr. Vihanga Jayawickrama “The purpose of life is not to be happy. It is to be useful, to be honourable, to be compassionate,... </p>
                                    <h4 class="large_continue_reading"><span><a href="http://rotaractmora.org/blog/manusath-handa-the-voice-of-humanity/" target="_blank">Continue reading</a></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div>
                            <img id="blog-image" width="35%" height="auto" src="/images/photo manusath2.jpg">
                            <div class="post-entry-content">
                                <div class="content_post_grid">
                                    <p class="selectionShareable">As written by Rtr. Nushan Vitharana “Open your eyes and see what’s happening in the world” We can see beauty. We can feel life. We... </p>
                                    <h4 class="large_continue_reading"><span><a href="http://rotaractmora.org/blog/manusath-handa-voice-of-humanity/" target="_blank">Continue reading</a></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--<div class="item">

                    </div>

                    <div class="item">

                    </div>-->
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#blogsCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#blogsCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('components/footer.php');?>

</body>

</html>