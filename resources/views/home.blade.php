@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <ul>
                        <a href="{{ route('article.list') }}"><li>Articles</li></a>
                        <li>Videos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
