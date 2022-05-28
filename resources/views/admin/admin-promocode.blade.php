<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-promocode</title>
    <link rel="stylesheet" href="{{url('css/ORDERR1css.css')}}">
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

        <form method="post"  action={{route('admin.promocode')}}>
            @csrf
            @if (session()->get('flage')==1)
                @foreach(session()->get('datas') as $data)
                    name: <input type="int" name="name" size="20" value="{{$data->name}}">
                    discounte: <input type="int" name="dis" size="20" value="{{$data->value}}">
                    quantity: <input type="int" name="quantity" size="20" value="{{$data->num}}">
                    max discount: <input type="int" name="max" size="20" value="{{$data->max}}"><br>
                    <input class="favorite"
                           type="submit"
                           name="submit"
                           value="Save">
                @endforeach
            @else
                name: <input type="int" name="name" size="20">
                discounte: <input type="int" name="dis" size="20">
                quantity: <input type="int" name="quantity" size="20">
                max discount: <input type="int" name="max" size="20"><br>
                <input class="favorite"
                       type="submit"
                       name="submit"
                       value="Add">
            <input class="favorite"
                   type="submit"
                   name="submit"
                   value="Edit">
            <input class="favorite"
                   type="submit"
                   name="submit"
                   value="Delete">
            @endif
        <table>
            <tr>
                <th></th>
                <th>Id</th>
                <th>name</th>
                <th>num</th>
                <th>used</th>
                <th>value</th>
                <th>max</th>
                <th>created-at</th>
                <th>updated-at</th>
            </tr>
            @foreach($datax as $a)
            <tr>
                <td>
                    <div>
                        <input type="radio" id="select" name="radio" value="{{$a->id}}">
                        <label for="select"></label>
                    </div>
                </td>
                <td>{{$a->id}}</td>
                <td>{{$a->name}}</td>
                <td>{{$a->num}}</td>
                <td>{{$a->used}}</td>
                <td>{{$a->value}}</td>
                <td>{{$a->max}}</td>
                <td>{{$a ->created_at}}</td>
                <td>{{$a ->updated_at}}</td>
            </tr>

            @endforeach
        </form>
        </table>

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
            <li>
                <a href="{{route('admin.ashipment')}}">
                    <i class="fas fa-hand-holding-usd"></i>
                    <div>Shipment</div>
                </a>
            </li>
            <li class ="x1">
                <a >
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
