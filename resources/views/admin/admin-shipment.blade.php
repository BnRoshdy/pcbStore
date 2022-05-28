<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-shipment</title>
    <link rel="stylesheet" href="{{url('css/ship.css')}}">
    <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <!-- ---------------------header----------------------- -->
    <div class="topbar">
        <div class="logo">
            <h2><a href="/" >MYPCB</a></h2>
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

        <form method="post" action="{{route('admin.ashipment')}}">
        @csrf
            tracking number :
            <input type="int" name="tracking" size="20" placeholder="      add tracking number">
            <input class="favorite"
                   type="submit"
                   name="submit"
                   value="Add">
            <input class="styled"
                   type="submit"
                   name="submit"
                   value="Edit">

            <input class="styled"
                   type="submit"
                   name="submit"
                   value="Delete">


        <table>
            <tr>
                <th></th>
                <th>Id</th>
                <th>User_id</th>
                <th>pcbid</th>
                <th>name</th>
                <th>address</th>
                <th>num</th>
                <th>tracking_num</th>
                <th>status</th>
                <th>created_at</th>
                <th>updated_at</th>
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
                    <td>{{$a ->pcbid}}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a ->address}}</td>
                    <td>{{$a ->num}}</td>
                    <td>{{$a ->tracking_num}}</td>
                    <td>{{$a ->status}}</td>
                    <td>{{$a ->created_at}}</td>
                    <td>{{$a ->updated_at}}</td>

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
            <li>
                <a href="{{route('admin.order')}}">
                    <i class="fas fa-th-large"></i>
                    <div>Orders</div>
                </a>
            </li>
            <li class="x1">
                <a>
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
