@include('includes.header')
        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-list-alt bg-orange"></i> View Tag <small class="hidden-xs-down hidden-sm-down"></small></h2>
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
                                @if (session('deleteTagSucMsg'))
                                    <div class="alert alert-success" role="alert">
                                      {{ session('deleteTagSucMsg') }}
                                    </div>
                                @endif
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Tag</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      @foreach($tags as $tag)
                                        <tr>
                                          <th scope="row">{{ $tag->id }}</th>
                                          <td>{{ $tag->tag }}</td>
                                          <td><a href="{{ route('editTag', $tag->id) }}"><i class="fa fa-pencil"></i></a>
                                          <a href="#">
                                          <form method="POST" id="delete-{{ $tag->id }}" action="{{ route('deleteTag', $tag->id) }}" style="display-none;">
                                          @csrf
                                          {{ method_field('delete') }}
                                          </form>
                                          <button onclick="
                                          if (confirm('Are you sure to delete this tag?')) {
                                            event.preventDefault();
                                            document.getElementById('delete-{{ $tag->id }}').submit();}
                                          else {
                                            event.preventDefault();
                                          }
                                           "><i class="fa fa-trash" aria-hidden="true"></i></a></button></td>
                                        </tr>
                                      @endforeach
                                      </tbody>
                                    </table>
                                    {{ $tags->links() }}
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
