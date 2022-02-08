<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title> View Products | Products Strore </title>
        <link href="https://fonts.googleapis.com/css? family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body>
        <div class="links">
            <a href="{{ config('app.url')}}"> Home </a>
        </div>
        <div clss="flex-center position-ref full-height">

            <div class="content">
                <h1> Here's a list of avaliable products </h1>
                <table>
                    <thread>
                        <td>      </td>
                        <td> ID   </td>
                        <td> Name </td>
                        <td> Description </td>
                        <td> Count </td>
                        <td> Price </td>
                        <td>
                            <a href ="{{ config('app.url')}}/products/create " class="btn btn-sm btn-primary">ADD</a>
                        </td>
                    </thread>

                    <tbody>
                        @foreach( $products as $product )
                        <tr>
                            <td>
                                <a href ="{{ url('products/' .$product->id. '/edit') }} " class="btn btn-sm btn-primary">Edit</a>
                            </td>
                            <td> {{ $product->id }}</td>
                            <td> {{ $product->name }} </td>
                            <td class="inner-table"> {{ $product->description }} </td>
                            <td class="inner-table"> {{ $product->count }} </td>
                            <td class="inner-table"> {{ $product->price }} </td>
                            <td>
                                <form action="{{ url('products/' .$product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type='submit' class="btn btn-sm btn-primary"> Delete </button>
                                </form>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </body>
</html>