@if ($element === "h1") 
    <h1 aria-roledescription="heading" aria-label={{$label}} class={{$style}}>{{$title}}</h1>
@elseif ($element === "h2") 
    <h2 aria-roledescription="heading" aria-label={{$label}} class={{$style}}>{{$title}}</h2>
@elseif ($element === "h3") 
    <h3 aria-roledescription="heading" aria-label={{$label}} class={{$style}}>{{$title}}</h3>
@elseif ($element === "h4") 
    <h4 aria-roledescription="heading" aria-label={{$label}} class={{$style}}>{{$title}}</h4>
@elseif ($element === "h5") 
    <h5 aria-roledescription="heading" aria-label={{$label}} class={{$style}}>{{$title}}</h5>
@elseif ($element === "h6") 
    <h6 aria-roledescription="heading" aria-label={{$label}} class={{$style}}>{{$title}}</h6>
@endif
