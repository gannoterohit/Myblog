@include('layout.navbar')
<div class="container">
    @foreach ($model as $value)
        <div class="card shadow-lg p-3 mb-5 bg-body rounded ">
            <p> <b>Title</b> </p>
            <div class="card-header">
                {{ $value->title }}
            </div>
            <div class="card-body">
                <p> <b>Discruption</b> </p>
                <blockquote class="blockquote mb-0">
                    {{ strip_tags($value->description) }}
                </blockquote>
            </div>
            @auth
            <div >
            <a href="{{route('delete-post',$value->id)}}" class="btn btn-danger"> Delete </a>
            <a href="{{route('edit-post',$value->id)}}" class="btn btn-info"> Edit </a>
            </div>
            @endauth
        </div><br>
    @endforeach
</div>
<div class="d-flex">
    {!! $model->links() !!}
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
@include('layout.footer')
