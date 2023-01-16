<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div>
        <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
        @if(count($errors)>0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
        @endforeach
        @endif   
        
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif        
    </div>
</div>