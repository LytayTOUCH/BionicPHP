@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Second Ground</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Second Play Ground
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptjs')
<script>
    // console.log( window.Echo.channel('NotifyProductStatus') );
    // window.Echo.channel('NotifyProductStatus').listen('WebsocketNotifyProductStatus', function (e) {
    //     console.log('load listen NotifyProductStatus');
    //     console.log(e);
    // });
    
</script>
@endsection
