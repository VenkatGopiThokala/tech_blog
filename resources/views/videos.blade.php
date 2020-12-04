@include('includes.header');

        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-play bg-orange"></i> Videos </h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Videos</li>
                        </ol>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-custom-build">
                            @foreach($articles as $article)
                            @php
                                                            if($article->type == 'Video') {
                                                            @endphp
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="upload/tech_menu_20.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- end post-sharing -->
                                        <h4><a href="{{ route('showArticle', $article->id) }}" title="">{{ $article->title }}</a></h4>
                                        <p>{{ $article->content }}</p>
                                        <small><a href="tech-category.html" title="">Videos</a></small>
                                        <small><a href="{{ route('showArticle', $article->id) }}" title="">{{ $article->published_date }}</a></small>
                                        <small><a href="tech-author.html" title="">by {{ $article->author }}</a></small>
                                        <small><a href="#" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                @php
                                                                    }
                                                                    @endphp
                                @endforeach

                            </div><!-- end blog-custom-build -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">


                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        @include('includes/side_panel', compact('articles'));
                    </div><!-- end col -->
                </div>
            </div><!-- end container -->
        </section>

        @include('includes.footer');
