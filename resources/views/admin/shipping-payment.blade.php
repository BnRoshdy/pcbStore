<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/style-sht.css')}}">
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
        <div class="flex">
            <div class="create">
                <form method="post" action="{{route('admin.shipment')}}">
                    @csrf
            <div class="create">
                    <h3>billing address</h3>
                    <div>
                        <input type="text" name="name" id="24" required placeholder="full name">
                    </div>
                    <div>
                        <input type="text" id="24" name="address" required placeholder="address">
                    </div>
                    <div>
                        <input type="number" id="24" name="num" required placeholder="phone number">
                    </div>
                    <input type="submit" class="main-btn" name="submit" value="save">
                </form>

            </div>
        </div>
    </section>
</body>
</html>
