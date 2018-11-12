
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                        $user = Auth::user()->toJson();
                        $str="dampow";
                        $h = Hash::make($str);
                        echo $h."<br>";
                        echo encrypt($str)."<br>";
                        $e = encrypt($str);
                        echo bcrypt($e);
                        die;?>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
