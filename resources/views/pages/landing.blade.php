@extends('layouts.landing')

@section('main-content')
    <div id="pageWrapper" class="section-active">
        @includeIf('partials.navbar.landing.main')

        <main>
            @includeIf('partials.body.landing.prologue')

            <div class="ibUpperWrap">
                @includeIf('partials.body.landing.skills')
                @includeIf('partials.body.landing.education')
                @includeIf('partials.body.landing.experience')
                @includeIf('partials.body.landing.project')
            </div>
        </main>

        @includeIf('partials.body.landing.copyright')
    </div>
@endsection