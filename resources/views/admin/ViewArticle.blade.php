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
                                 @if (session('deleteArtSucMsg'))
                                     <div class="alert alert-success" role="alert">
                                       {{ session('deleteArtSucMsg') }}
                                     </div>
                                 @endif
                                    <table class="table table-striped table-dark table-bordered">
                                      <thead class="thead-dark">
                                        <tr>
                                          <th scope="col" width="3">#</th>
                                          <th scope="col" width="10">Title</th>
                                          <th scope="col" width="10">Author</th>
                                          <th scope="col" width="10">Source URL</th>
                                          <th scope="col" width="10">Published Date</th>
                                          <th scope="col" width="10">Category</th>
                                          <th scope="col" width="10">Tags</th>
                                          <th scope="col" width="10">Type</th>
                                          <th scope="col" width="10">Image</th>
                                          <th scope="col" width="40">Content</th>
                                          <th scope="col" width="10">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($articles as $article)
                                        <tr>
                                          <th scope="row"> {{ $article->id }} </th>
                                          <td>{{ $article->title }}</td>
                                          <td>{{ $article->author }}</td>
                                          <td><a href="{{ $article->source }}" target="_blank">Source</a></td>
                                          <td>{{ $article->published_date }}</td>
                                          <td>{{ $article->category }}</td>
                                          <td>{{ $article->tag_1 }} &nbsp; {{ $article->tag_2 }}&nbsp; {{ $article->tag_3 }}&nbsp; {{ $article->tag_4 }}</td>
                                          <td>{{ $article->type }}</td>
                                          <td>{{ $article->image }}</td>
                                          <td>{{ $article->content }}<td>
                                          <a href="{{ route('editArticle', $article->id) }}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;
                                          <a href="#">
                                            <form method="POST" id="delete-{{ $article->id }}" action="{{ route('deleteArticle', $article->id) }}" style="display-none;">
                                                @csrf
                                                {{ method_field('delete') }}
                                            </form>
                                            <button onclick="
                                                if (confirm('Are you sure to delete this article?')) {
                                                    event.preventDefault();
                                                    document.getElementById('delete-{{ $article->id }}').submit();}
                                                else {
                                                    event.preventDefault();
                                                }
                                         "><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                    {{ $articles->links() }}
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
