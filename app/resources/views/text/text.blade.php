
@if ($element === "p")  
    <p aria-roledescription="paragraph" aria-label={{$label}} id={{$id}} class={{$style}}>{{$text}}</p>
@elseif ($element === "span") 
    <span aria-roledescription="span" aria-label={{$label}} id={{$id}} class={{$style}}>{{$text}}</span>
@elseif ($element === "code") 
    <code aria-roledescription="code" aria-label={{$label}} id={{$id}} class={{$style}}>{{$text}}</code>
@elseif ($element === "pre") 
    <pre aria-roledescription="pre" aria-label={{$label}} id={{$id}} class={{$style}}>{{$text}}</pre>
@endif
       