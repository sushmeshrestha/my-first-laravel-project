@extends (layouts.master)


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                    <div class="class-body">
                        @if(session('status'))
                            <div class="'alert alert-success" role="'alert">
                                {{ session('status') }}

                            </div>
                            @endif
                    </div>

                            You are logged in!
            </div>

        </div>
    </div>
</div>
@endsection