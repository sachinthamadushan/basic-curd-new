<form action="{{route('category.update',$category->id)}}" method="post">
    @csrf
    @method('put')
    @include('category.form',
    ['btnText'=>'Edit Category',
    'btnColor'=>'warning']
    )
</form>
