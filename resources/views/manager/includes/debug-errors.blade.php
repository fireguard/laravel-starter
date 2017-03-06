@if(env('APP_DEBUG', false))
    <div class="clearfix" ></div>
    <div>
        {{ var_dump($exception) }}
    </div>
@endif
