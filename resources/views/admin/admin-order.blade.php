<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin order</title>
    <link rel="stylesheet" href="{{url('css/x.css')}}">
    <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <!-- ---------------------header----------------------- -->
        <div class="topbar">
            <div class="logo">
                <h2><a href="/">MYPCB</a> </h2>
            </div>
            <div class="cust_data">
                <a href="{{route('admin.logout')}}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">logout</a>
                <form id="logout-form" action="{{route('admin.logout')}}" method = "POST" >
                    @csrf
                </form>

        </div>
    <!-- -------------------------header-------------------------     -->
    <div class="main">
        <form class="form0" method="POST" action="{{route('admin.order')}}">
            @csrf
            copper price :
            <input type="int" name="copperprice" size="20" value="  {{$cprice}}">
            stensil price :
            <input type="int" name="stensilprice" size="20" value="  {{$sprice}}">
            <input class="favorite"
            type="submit"
            name="submit"
            value="Save">

            <input class="styled"
            type="submit"
            name="submit"
            value="Edit">

            <input class="styled"
            type="submit"
            name="submit"
            value="Delete">

            <input class="styled"
                   type="submit"
                   name="submit"
                   value="Add">
        <table>
            <tr>
            <th></th>
            <th>Id</th>
            <th>User_id</th>
            <th>Sizex</th>
            <th>Sizey</th>
            <th>Desgin_num</th>
            <th>Quantity</th>
            <th>Layers</th>
            <th>Min_track</th>
            <th>Min_hole_size</th>
            <th>Solder_mask</th>
            <th>Silk_screem</th>
            <th>Stensil</th>
            <th>Price</th>
            <th>Status</th>
            <th>file_name</th>
            <th>Created_at_mon</th>
            <th>Created_at_year</th>

            </tr>


            <tr>
                @foreach ($data as $a)

            <td>
                <div>
                <input type="radio" id="select" name="radio" value="{{$a->id}}">
                <label for="select"></label>
                </div>
            </td>
            <td>{{$a ->id}}</td>
            <td>{{$a ->userid}}</td>
            <td>{{$a ->sizex}}</td>
            <td>{{$a ->sizey}}</td>
            <td>{{$a ->design_num}}</td>
            <td>{{$a ->quantity}}</td>
            <td>{{$a ->layers}} </td>
            <td>{{$a ->min_track}}</td>
            <td>{{$a ->min_hole_size}}</td>
            <td>{{$a ->solder_mask}}</td>
            <td>{{$a ->silkscreen}}</td>
            <td>{{$a ->stensil}}</td>
            <td>{{$a ->price}}</td>
            <td>{{$a ->status}}</td>
            <td>{{$a ->file_name}}</td>
            <td>{{$a ->created_at_mon}}</td>
            <td>{{$a ->created_at_year}}</td>

            </tr>
            @endforeach
        </table>
    </form>
</div>




    <!-- ---------------------------sidebar--------------------- -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="{{route('admin.status')}}">
                        <i class="fas fa-chart-bar"></i>
                        <div>Status</div>
                    </a>
                </li>
                <li class="x1">
                    <a >
                        <i class="fas fa-th-large"></i>
                        <div>Orders</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.ashipment')}}">
                        <i class="fas fa-hand-holding-usd"></i>
                        <div>Shipment</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.promocode')}}">
                        <i class="fas fa-dollar-sign"></i>
                        <div>PromoCode</div>
                    </a>
                </li>

            </ul>
        </div>
    <!-- ----------------sidebar-------------------     -->

</body>
</html>






















<!--------

<table>
    <tr>
    <th>id</th>
    <th>userid</th>
    <th>size</th>
    <th>desgin_num</th>
    <th>quantity</th>
    <th>lyers</th>
    <th>min_track</th>
    <th>min_hole_size</th>
    <th>soldermask</th>
    <th>silkscreem</th>
    <th>stensel</th>
    <th>prize</th>
    <th>satatue</th>
    <th>Contact</th>
    <th>Country</th>


    </tr>

    <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    </tr>
    <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
    </tr>
  </table>
  <form>
    price:
    <input type="int" name="price" size="20">

    </form>

    <input class="favorite styled"
    type="button"
    value="save">

    <input class="favorite styled"
    type="button"
    value="edit">

    <input class="favorite styled"
    type="button"
    value="delete">

    <div>
        <input type="radio" id="huey" name="drone" value="huey"
               checked>
        <label for="huey">Huey</label>
      </div>

      <div>
        <input type="radio" id="dewey" name="drone" value="dewey">
        <label for="dewey">Dewey</label>
      </div>







</body>
</html>->
