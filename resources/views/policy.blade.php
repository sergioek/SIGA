<x-guest-layout>
    <div class="row justify-content-center pt-4">
        <div class="col-6">
            <div>
           {{--      <x-jet-authentication-card-logo /> --}}

           <div class="text-center mb-4">
                <a href="{{url('/')}}">
                    <img src="{{url('storage/img/logo-removebg.png')}}" alt="" srcset="" width="200" height="180" >
                </a>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    {!! $policy !!}
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
