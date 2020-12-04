@include('includes.header');

<div class="page-title lb single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-star bg-orange"></i> Reviews</h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Reviews</li>
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
                    <div class="blog-list clearfix">
                        @foreach($articles as $article)
                            @php
                                if($article->type == 'Video') {
                            @endphp
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="tech-single.html" title="">
                                            <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="{{ route('showArticle', $article->id) }}"
                                           title="">{{ $article->title }}</a></h4>
                                    <p>{{ $article->content }}</p>
                                    <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html"
                                                                 title="">Reviews</a></small>
                                    <small><a href="{{ route('showArticle', $article->id) }}"
                                              title="">{{ $article->published_date }}</a></small>
                                    <small><a href="tech-author.html" title="">by {{ $article->author }}</a></small>
                                    <small><a href="{{ route('showArticle', $article->id) }}" title=""><i
                                                class="fa fa-eye"></i> 1114</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">
                            @php
                                }
                            @endphp
                        @endforeach

                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">


            </div><!-- end col -->

            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                @include('includes/side_panel', compact('articles'));
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('includes.footer');
