<div class="{{$class}}">
    <label 
        aria-labelledby="{{$name}}"
        for="{{$name}}">
        {{$label}}
    </label>
    <input
        @if ($type === "text")
            minlength="{{$minLength}}"
            maxlength="{{$maxLength}}"
            size="{{$size}}"
        @endif
        @if ($type === "checkbox" || $type === "radio")
            {{$checked}}
        @endif
        @if ($type === "password")
            minLength="$minLength"
        @endif
        @if ($type === "file")
            accept="$acceptableTypes"
        @endif
        @if ($type === "email")
            size="{{$size}}" 
            multiple="{{$multiple}}"
            pattern="{{$pattern}}"
        @endif
        @if ($type === "tel" || $type === "url") 
            pattern="{{$pattern}}"
        @endif
        @if ($type === "date" || $type === "datetime-local" || $type === "number" || $type === "range" || $type === "time" || $type === "week")
            min="{{$min}}" 
            max="{{$max}}"
            step="{{$step}}"
        @endif
        @if ($type === "month")
            min="{{$minMonth}}"
        @endif
        title="{{$title}}"
        aria-label="{{$name}}"
        type="{{$type}}"
        name="{{$name}}" 
        placeholder="{{$placeholder}}"
        id="{{$id}}"
        @if ($autocomplete) 
            aria-autocomplete
        @endif
        aria-roledescription="{{$role}}" 
        @if ($required === 'true')
            aria-required="true"
        @else 
            aria-required="false"
        @endif
    >
</div>

{{-- Path: app/resources/views/form/input.blade.php --}}
{{-- The $class variable is optional. If it is not passed, the default value is "flex". --}}
{{-- The $type, $value, $title, role, $name, $placeholder, $label, $required and $id variables are required. --}}
{{-- The $type variable is the type of input. --}}
{{-- The $value variable is the value text of the input. --}}
{{-- The $label variable is the label of the input. --}}
{{-- The $name variable is the name text for the input linked with the label. --}}
{{-- The $required variable is the attribute to specify if an input is required. --}}
{{-- The $role variable is the attribute to specify the role of an input. --}}
