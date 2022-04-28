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
<body>
    <header> <!----------------------HEADER------------------------>
        <a href="/" class="logo_admin">MYPCB</a>
        <div class="cust_data">

        </div>
    </header><!---------------------------------------------------->
    <section>
        <div class="flex">
            <h2>payment:</h2>
            <div class="create">
                <form method="post" action="/pay">
                    @csrf
                    <h3>card information</h3>

                    <div>
                        <input type="number" name="cardnum" id="23" required placeholder="card number">
                    </div>
                    <div>
                        <label for="24">expiration date</label>
                        <input type="number" name="month" id="24"required placeholder="month">
                        <input type="number" name="year" id="24"required placeholder="year">
                    </div>
                    <div>
                        <input type="number" name="ccv" id="24"required placeholder="cvv">
                    </div>

            </div>

            <div class="line" style="
                height: 400px;
                background-color: black;
                padding: 1px;
                align-self: center;">
            </div>

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

                    <input type="submit" class="main-btn" name="submit" value="save"  >

                </form>

            </div>
        </div>

    </section>
</body>
</html>
