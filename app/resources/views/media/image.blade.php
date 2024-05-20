{{-- The $class variable is optional. If it is not passed, the default value is "flex". --}}
{{-- The $src and $alt variables are required. --}}
{{-- The $src variable is the path to the image file. --}}
{{-- The $alt variable is the alt text for the image. --}}
{{-- The image is displayed with a width of 150 pixels and a height of 150 pixels. --}}

<div class="{{$class}}">
    <img width=150 height=150 src={{$src}} alt={{$alt}}>
    <figcaption class="absolute z-0 top-0">{{$caption}}</figcaption>
</div>