<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">  -->
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="{{ url('css/cart.css') }}">
    <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <!----------------------HEADER------------------------>
    <a href="/" class="logo_admin">MYPCB</a>
    <div class="cust_data">
    </div>
</header>

<section>
    <div>


        <table>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>tracking num</th>
                <th>Subtotal</th>
            </tr>

            @foreach($data as $i)
                @if($i->status=="confirmed")
            <tr>
                <td>
                    <div class="info">
                        <img src="{{url('image/cart/cart.jpg')}}" alt="">
                        <div>
                            <P>{{$i->layers}} Layers </P>
                            <span class="tit">Product No.:</span>
                            <span>{{$i->id}}</span>
                            <div class="detials">
                                <div>
                                    <span class="tit">Solder Mask: </span>
                                    <span>{{$i->solder_mask}}</span>

                                </div>
                                <div>
                                    <span class="tit">Silkscreen: </span>
                                    <span>{{$i->silkscreen}}</span>
                                </div>
                            </div>

                            <div>
                                <span class="tit">Bulid Time.:</span>
                                <span>2-3 days</span>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <span>{{$i->quantity}}</span>
                </td>
                <td>
                    <p>{{$tracking}}</p>
                </td>
                <td>{{$i->price}} $</td>
            </tr>
            @endif
            @endforeach

        </table>
    </div>
    </div>
</section>


</body>
</html>
