@include('includes.header')
        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-list-alt bg-orange"></i> Add Tag <small class="hidden-xs-down hidden-sm-down"></small></h2>
                    </div><!-- end col -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-7">
                                @if (session('addTagSucMsg'))

                                <div class="alert alert-success" role="alert">
                                  {{ session('addTagSucMsg') }}
                                </div>

                                @endif
                                @if($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                  {{ $error }}
                                </div>
                                @endforeach
                                @endif
                                    <form class="form-wrapper" action="{{ route('addTagData') }}" method="POST">
                                        @csrf
                                        <input type="text" class="form-control" name="tag" placeholder="Tag">
                                        <button type="submit" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
@include('includes.footer')
