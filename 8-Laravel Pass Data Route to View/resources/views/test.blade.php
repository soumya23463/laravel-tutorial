@php
    $title = 'Test Page';
    $fruits = ['Apple', 'Banana', 'Cherry'];
@endphp

{{--  @verbatim
    {{ data }}
    {{ data2 }}
@endverbatim  --}}
<script>
    {{--  var data= @json($fruits);
    console.log(data);  --}}
    var data={{ Js::from($fruits) }};
    data.forEach(function (fruit) {
        console.log(fruit);
    });
    {{--  var data= "john";
    var data2= "doe";  --}}
</script>
