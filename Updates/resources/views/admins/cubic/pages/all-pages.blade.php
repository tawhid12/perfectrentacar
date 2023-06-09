<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> {{__('admin.Pages')}}</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">


                        <div class="form-group row">
                            <div class="col-md-9">
                                <a href="{{ route('admin.pages.create') }}" type="submit" class="btn  btn-success btn-lg"><i class="fa fa-user-plus"></i>
                                    {{__('admin.Add new Page')}}

                                </a>
                            </div>

                            <div class="col-md-3 col-xs-12 pull-right">
                                <form action="{{route('admin.pages.index')}}" method="GET">
                                    <div class="row">

                                        <div class="input-group">
                                            <input name="search" value="{{$request->search ?? ''}}" type="text"
                                                   class="form-control" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>


                            </div>

                        </div>
                        @if($request->search ?? false)
                            <h3>{{__('Search result for'). ' "'. $request->search . '"'}}  </h3>
                        @endif

                        <div class="table-responsive ">

                            <table class="table product-overview " id="myTable">
                                <thead>
                                <tr>
                                    <th>{{__('admin.Title')}}</th>
                                    <th>{{__('admin.Author')}}
                                    </th>
                                    <th> {{__('admin.Tags')}}</th>
                                    <th><i class="ti-comment-alt"></i></th>
                                    <th>{{__('admin.Date')}}</th>
                                    <th>{{__('admin.Status')}}</th>
                                    <th>{{__('admin.Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(isset($pages) && is_object($pages))
                                    @foreach($pages as $post)



                                        <tr>
                                            <td>
                                                <a href="{{  route('admin.pages.edit',['page'=>$post->id])  }}">
                                                    @if($post->img > 0)
                                                        <img src="{{ the_image_url($post->img,'thumbnail-260x260') }}"
                                                             alt="{{$post->title}}"
                                                             width="80">
                                                    @endif

                                                    {{$post->title}}</a>
                                            </td>

                                            <td>
                                                {{--<img src="http://lararent.test/cubic/plugins/images/users/hanna.jpg" alt="iMac"--}}
                                                {{--width="80">--}}
                                                {{----}}
                                                {{$post->user->name}}
                                            </td>
                                            <td>....</td>
                                            <td>0</td>
                                            <td>{{$post->created_at->format('d-m-Y') ?? ''}}</td>
                                            <td><span class="label label-success font-weight-100">{{__('admin.Published')}}</span></td>
                                            <td>
                                                <a href="{{  route('admin.pages.edit',['page'=>$post->id])  }}"
                                                   class="text-inverse p-r-10" data-toggle="tooltip"
                                                   title="{{__('admin.Edit')}}"><i class="ti-marker-alt"></i></a>

                                                <a
                                                        href="javascript:void(0)"
                                                        class="text-inverse delete_post"
                                                        title="{{__('admin.Delete')}}"
                                                        data-id="{{$post->id}}"
                                                        data-toggle="tooltip"><i
                                                            class="ti-trash"></i></a></td>
                                        </tr>
                                    @endforeach

                                @endif
                                </tbody>
                            </table>
                            @if($pages->isEmpty())
                                <h6>{{__('admin.Nothing found...')}}</h6>
                        @endif
                            <!-- Pagination -->
                            <div class="pagination-wrapper">
                                <ul class="pagination">
                                    @if($pages->currentPage() !== 1)
                                        <li class="disabled"><a href="{{$pages->url(($pages->currentPage() - 1))}}">
                                                <i class="fa fa-angle-double-left"></i></a></li>

                                    @endif

                                    @for($i = 1; $i <= $pages->lastPage(); $i++)
                                        @if($pages->currentPage() == $i)

                                            <li class="active"><a href="#">{{ $i }}
                                                    <span class="sr-only"></span></a>
                                            </li>
                                        @else

                                            <li><a href="{{ $pages->url($i) }}">{{ $i }}</a></li>
                                        @endif
                                    @endfor

                                    @if($pages->currentPage() !== $pages->lastPage())

                                        <li><a href="{{ $pages->url(($pages->currentPage() + 1)) }}"> <i
                                                        class="fa fa-angle-double-right"></i></a></li>
                                    @endif

                                </ul>
                            </div>
                            <!-- /Pagination -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function () {


        $("body").on("click", ".delete_post", function (e) {

            e.preventDefault();
            $('.preloader').show().css('opacity', '0.3');
            var this_v = $(this);

            $.ajax({
                url: '{{route('admin.pages.index')}}/' + $(this).data('id'),
                type: 'delete', // replaced from put
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (r) {
                    res = JSON.parse(r);
                    if(res.deleted) {
                        $(this_v).closest('tr').remove();
                        $('.preloader').hide();
                    }
                },
                error: function (msg) {
                    $('.preloader').hide();
                }
            });
        });

    });

</script>
