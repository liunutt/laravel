<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" type="text/css" href="/css/main.css">    
        <title>Create Product | Product Store </title>
    </head>
    <body>
        <div class="links">
            <a href="{{ config('app.url') }}"> Home </a>
        </div>  
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="{{ config('app.url')}}/products">
                    @csrf
                    <h1> Enter Details to create a product </h1>
                    <div class="form-input">
                        <label> Name </label>
                        <input type="text" name="name">
                    </div>
                    <div class="form-imput">
                        <label> Description </label>
                        <input type="text" name="description">
                    </div>
                    <div class="form-imput">
                        <label> Count </label>
                        <input type="number" name="count">
                    </div>
                    <div class="form-imput">
                        <label> Price </label>
                        <input type="number" name="price">
                    </div>
                    <button type="submit"> Submit </button>
                </form>
            </div>
        </div>

    </body>
</html>

