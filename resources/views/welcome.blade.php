@extends('layout')


@section('content')
        <main>
            <!-- metriomaste -->

@include('metriomaste')

            <!-- erga -->
                     
            @include('erga')                     
        
            <!-- form -->

            @include('contact_form')
     
        </main>
       
</body>
 
</html>

@endsection