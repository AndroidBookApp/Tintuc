<form action="/users" method="post">
        @csrf
        <input type="text" name="username" class="username">
        <input type="password" name="password" class="password">
        <input type="text" name="email" class="email">
        <input type="submit" name="submit" value="tạo">
    </form>

    <form action="" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>               
    </form>
tạo controoler: php artisan make:controller NameController --resource --model=modelname
get => url => index()
get => url/{id} => show()
post => url => store()
delete => url/{id} => destroy 
put/patch => url/{id} => edit()



tạo resource: php artisan make:resource NameResource 

