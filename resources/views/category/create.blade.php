<form action="{{route('category.store')}}" method="post">
    @csrf
    @include('category.form',[
    'btnText'=>'Add Category',
    'btnColor'=>'success'
    ])
</form>
