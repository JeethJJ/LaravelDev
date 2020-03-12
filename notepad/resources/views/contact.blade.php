<DOCTYPE html>
<html>
    <head></head>
    <body>
    
        
        @extends('.home/home')

        @section('content')      <!-- this will be added to the home page's yeild part when this pahe is called  -->
        <h1>Contact</h1>
        @foreach($contacts as $items)
        <li>{{$items}}</li>
        @endforeach
        @endsection

        </body>
</html>