@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error) <!-- цикл foreach. обращение ко всем сообщениям объекьа errors --> 
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif