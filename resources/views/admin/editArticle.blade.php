@include('includes.header')
        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-list-alt bg-orange"></i> Edit Article <small class="hidden-xs-down hidden-sm-down"></small></h2>
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
                                @if (session('editArtSucMsg'))
                                    <div class="alert alert-success" role="alert">
                                      {{ session('editArtSucMsg') }}
                                    </div>
                                @endif
                                @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                          {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                                    <form class="form-wrapper" action="{{ route('updateArticle', $article->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $article->title }}">
                                        <input type="text" class="form-control" placeholder="Author" name="author" value="{{ $article->author }}">
                                        <input type="url" class="form-control" placeholder="Source URL" name="source" value="{{ $article->source }}">
                                        <input type="date" class="form-control" placeholder="Published Date" name="published_date" value="{{ $article->published_date }}">
                                        <select name="category">
                                            <option value="{{ $article->category }}">{{ $article->category }}</option>
                                            <option value="">Select Category</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_1">
                                            <option value="{{ $article->tag_1 }}">{{ $article->tag_1 }}</option>
                                            <option value="">Select Tag 1</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_2">
                                            <option value="{{ $article->tag_2 }}">{{ $article->tag_2 }}</option>
                                            <option value="">Select Tag 2</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_3">
                                            <option value="{{ $article->tag_3 }}">{{ $article->tag_3 }}</option>
                                            <option value="">Select Tag 3</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="tag_4">
                                            <option value="{{ $article->tag_4 }}">{{ $article->tag_4 }}</option>
                                            <option value="">Select Tag 4</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <select name="type">
                                            <option value="{{ $article->type }}">{{ $article->type }}</option>
                                            <option value="">Select Type</option>
                                            <option value="1">cat</option>
                                            <option value="2">cat1</option>
                                        </select>
                                        <input type="file" class="form-control" placeholder="Select image" name="image">
                                        <img src="../../storage/app/{{ $article->image }}" width="100px" height="100px">
                                        <textarea class="ckeditor" cols="200" id="editor1" name="article" rows="60">{{ $article->content }}</textarea>

                                        <button type="submit" class="btn btn-primary">Edit <i class="fa fa-pencil"></i></button>
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
