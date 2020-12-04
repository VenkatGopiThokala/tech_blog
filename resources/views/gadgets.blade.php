@include('includes.header')

        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-gears bg-orange"></i> Gadgets </h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Gadgets</li>
                        </ol>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        @include('includes/side_panel', compact('articles'));
                    </div><!-- end col -->

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-grid-system">
                                <div class="row">
                                @foreach ($articles as $article)
                                @php
                                if($article->type == 'Gadget') {
                                @endphp
                                    <div class="col-md-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="upload/tech_menu_01.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <span class="color-orange"><a href="{{ route('showGadgets') }}" title="">Gadgets</a></span>
                                                <h4><a href="{{ route('showArticle', $article->id) }}" title="">{{ $article->title }}</a></h4>
                                                <p>{{ $article->content }}</p>
                                                <small><a href="{{ route('showArticle', $article->id) }}" title="">{{ $article->published_date }}</a></small>
                                                <small><a href="{{ route('showArticle', $article->id) }}" title="">by {{ $article->author }}</a></small>
                                                <small><a href="{{ route('showArticle', $article->id) }}" title=""><i class="fa fa-eye"></i> 2887</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                    @php
                                    }
                                    @endphp
                                @endforeach

                                </div><!-- end row -->
                            </div><!-- end blog-grid-system -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis3">

                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@include('includes.footer')
