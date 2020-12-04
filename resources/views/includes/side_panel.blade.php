<div class="sidebar">
    <div class="widget">
        <div class="banner-spot clearfix">
            <div class="banner-img">
                <img src="{{ asset('resources/assets/upload/banner_07.jpg') }} " alt="" class="img-fluid">
            </div><!-- end banner-img -->
        </div><!-- end banner -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Trend Videos</h2>
        <div class="trend-videos">
            <?php
            $i = 0;
            ?>
            @foreach($articles as $article)
                <?php

                if ($i == 3) {
                    $i = 0;
                    break;
                }
                if ($article->type == 'Video') {
                ?>
                <div class="blog-box">
                    <div class="post-media">
                        <a href="tech-single.html" title="">
                            <img src="upload/tech_video_01.jpg" alt="" class="img-fluid">
                            <div class="hovereffect">
                                <span class="videohover"></span>
                            </div><!-- end hover -->
                        </a>
                    </div><!-- end media -->
                    <div class="blog-meta">
                        <h4><a href="tech-single.html" title="">{{ $article->title }}</a></h4>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->

                <hr class="invis">
                <?php
                $i = $i + 1;
                }
                ?>
            @endforeach

        </div><!-- end videos -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Popular Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach($articles as $article)
                    <?php

                    if ($i == 3) {
                        $i = 0;
                        break;
                    }
                    if ($article->type == 'Article') {
                    ?>
                    <a href="{{ $article->id }}"
                       class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{ $article->id }}" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">{{ $article->title }}</h5>
                            <small>{{ $article->published_date }}</small>
                        </div>
                    </a>
                    <?php
                    $i = $i + 1;
                    }
                    ?>
                @endforeach
            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Recent Reviews</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach($articles as $article)
                    <?php

                    if ($i == 3) {
                        $i = 0;
                        break;
                    }
                    if ($article->type == 'Review') {
                    ?>
                    <a href="tech-single.html"
                       class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                            <h5 class="mb-1">{{ $article->title }}</h5>
                            <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                        </div>
                    </a>
                    <?php
                    $i = $i + 1;
                    }
                    ?>
                @endforeach
            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Follow Us</h2>

        <div class="row text-center">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button facebook-button">
                    <i class="fa fa-facebook"></i>
                    <p>27k</p>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button twitter-button">
                    <i class="fa fa-twitter"></i>
                    <p>98k</p>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button google-button">
                    <i class="fa fa-google-plus"></i>
                    <p>17k</p>
                </a>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <a href="#" class="social-button youtube-button">
                    <i class="fa fa-youtube"></i>
                    <p>22k</p>
                </a>
            </div>
        </div>
    </div><!-- end widget -->

    <div class="widget">
        <div class="banner-spot clearfix">
            <div class="banner-img">
                <img src="upload/banner_03.jpg" alt="" class="img-fluid">
            </div><!-- end banner-img -->
        </div><!-- end banner -->
    </div><!-- end widget -->
</div><!-- end sidebar -->
