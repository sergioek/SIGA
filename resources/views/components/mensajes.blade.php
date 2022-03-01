<div>
    @if(session('MsjExito'))
    
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Mensaje! </strong>{{session('MsjExito')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    @endif



    @if(session('MsjFalla'))
    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! </strong>{{session('MsjFalla')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    @endif



    @if(session('Info'))
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey! </strong>{{session('Info')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    @endif

</div>