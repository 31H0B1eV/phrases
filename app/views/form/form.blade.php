<div class="row">
    <div class="col-md-6">

        <h1>Tell me your phrase</h1>

            @include('layouts.partials.errors')

            {{ \Illuminate\Support\Facades\Form::open(['route' => 'search_phrase']) }}
                <!-- Phrase -->
                <div class="form-group">
                    {{ \Illuminate\Support\Facades\Form::label('phrase', 'Phrase:') }}
                    {{ \Illuminate\Support\Facades\Form::text('phrase', null, ['class' => 'form-control']) }}
                </div>

                <div class="form-group">
                    {{ \Illuminate\Support\Facades\Form::submit('Search', ['class' => 'btn btn-primary']) }}
                </div>

            {{ \Illuminate\Support\Facades\Form::close() }}
        </div>
    </div>