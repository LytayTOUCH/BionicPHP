@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">First Ground</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    First Play Ground <span class = "label label-primary label_number">0</span>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptjs')
<script>
    var $i=0;
window.runMe=function(params){
    console.log('function runMe is loaded with params',params);
    console.log(params);
    $(document).ready(function(){
        console.log('document ready');
        console.log($('.label_number'));
        $('.label_number').text($i++);
    });
}
</script>
@endsection
