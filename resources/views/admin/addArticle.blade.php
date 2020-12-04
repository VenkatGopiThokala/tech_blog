@include('includes.header')
        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-list-alt bg-orange"></i> Add Article <small class="hidden-xs-down hidden-sm-down"></small></h2>
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
                                <div class="col-lg-12">
                                @if (session('addArtSucMsg'))
                                    <div class="alert alert-success" role="alert">
                                      {{ session('addArtSucMsg') }}
                                    </div>
                                @endif
                                @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                          {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                                    <form class="form-wrapper" action="{{ route('addArticleData') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <input type="text" class="form-control" placeholder="Title" name="title">
                                        <input type="text" class="form-control" placeholder="Author" name="author">
                                        <input type="url" class="form-control" placeholder="Source URL" name="source">
                                        <input type="date" class="form-control" placeholder="Published Date" name="published_date">
                                        <select name="category">
                                            <option value="">Select Category</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_1">
                                            <option value="">Select Tag 1</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_2">
                                            <option value="">Select Tag 2</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_3">
                                            <option value="">Select Tag 3</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_4">
                                            <option value="">Select Tag 4</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="type">
                                            <option value="">Select Type</option>
                                            <option value="Article">Article</option>
                                            <option value="Video">Video</option>
                                            <option value="Review">Review</option>
                                            <option value="Gadget">Gadget</option>
                                        </select><br><br>
                                        <input type="file" class="form-control" title="Select image" name="image">
                                        <textarea class="ckeditor" cols="200" id="editor1" name="article" rows="60"></textarea>

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

@include('includes.footer')
