<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/stylez-sht.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <title>MYPCB</title>
</head>
<style>
    body {
        background-color: #ebefee ;
    }
</style>
<body>
    <header> <!----------------------HEADER------------------------>
        <a href="/admin/status" class="logo_admin">MYPCB</a>
        <div class="cust_data">
        </div>
    </header><!---------------------------------------------------->
    <section>
        @foreach ($s as $x)
        <div class="flex">
            <div class="create">
                <form method="post" action="{{route('admin.editshipment')}}">
                    @csrf

            <div class="create">

                    <h3>billing address</h3>

                    <div>
                        <h3>name</h3> <input type="text" name="name" id="24" required placeholder="full name" value="{{$x->name}}">
                    </div>
                    <div>
                        <h3>address</h3> <input type="text" id="24" name="address" required placeholder="address"value="{{$x->address}}">
                    </div>
                    <div>
                        <h3>phone number</h3><input type="number" id="24" name="num" required placeholder="phone number" value="{{$x->num}}">
                    </div>
                <div>
                    <h3>tracking number</h3> <input type="text" id="24" name="tracking" required placeholder="tracking num" value="{{$x->tracking_num}}">
                </div>
                <div>
                    <h3>status</h3><input type="text" id="24" name="status" required placeholder="status" value="{{$x->status}}">
                </div>
                    <input type="submit" class="main-btn" name="submit" value="save">
                </form>
                @endforeach
            </div>
        </div>
    </section>
</body>
</html>
