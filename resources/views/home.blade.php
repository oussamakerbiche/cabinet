@extends('layouts.app')

@section('content')

<style>
    
     .content {
                text-align: center;
            }
             .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 10px;
                margin-top:150px ;
                margin-left: 280px
            }
</style>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="content">
                <div class="title m-b-md">
                    Welcome
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
