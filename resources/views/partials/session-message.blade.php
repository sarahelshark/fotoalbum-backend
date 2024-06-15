@if (session('message'))
    <div
        class="alert alert-primary"
        role="alert"
    >
        <strong class="text-primary">Cool!</strong> {{session('message')}}
    </div>
        
@endif