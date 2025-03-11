@php
 $fruits = [ 'one'=>'ashok','two'=>'annu' ,'three'=>'anita'  ];   
 $value = "hello";
@endphp


  {{--  @includeWhen(empty($value),'pages.header',['names'=>$fruits])  no file include because condition false --}}

@includeUnless(empty($value), 'pages.header', ['names' => $fruits]) 

{{-- @include('pages.header',['names'=>$fruits]) --}}

@includeif('pages.content')

<h3>This is home page </h3>

@include('pages.footer')