<div class="{{$class}}">
        <label 
            aria-labelledby="{{$name}}"
            for="{{$name}}">
            {{$label}}
        </label>
        <input
            list="{{$listID}}"
            title="{{$title}}"
            aria-label="{{$name}}"
            type="{{$type}}"
            name="{{$name}}" 
            placeholder="{{$placeholder}}"
            id="{{$id}}"
            aria-roledescription="{{$role}}" 
            @if ($required === 'true')
                aria-required="true"
            @else 
                aria-required="false"
            @endif
        >
        <datalist id="{{$listID}}">
            @foreach ($item as $list)
                <option value="{{$item}}"></option>
            @endforeach
        </datalist>
</div>