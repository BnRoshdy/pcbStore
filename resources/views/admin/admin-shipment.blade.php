<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-shipment</title>
    <link rel="stylesheet" href="css/shipment-style.css">
    <script src="https://kit.fontawesome.com/2924b03037.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <!-- ---------------------header----------------------- -->
    <div class="topbar">
        <div class="logo">
            <h2>BCPWAY Admin</h2>
        </div>
        <div class="user">
            <a href="/">home page</a>
        </div>
    </div>
    <!-- -------------------------header-------------------------     -->
    <div class="main">

        <form class="form000" action="/admin-shipment">
            <input class="favorite styled"
                   type="submit"
                   value="confirm">
            <input class="favorite styled"
                   type="submit"
                   value="edit">
            <input class="favorite styled"
                   type="submit"
                   value="delete">
        </form>

        <table>
            <tr>
                <th></th>
                <th>Id</th>
                <th>User_id</th>
                <th>pcbid</th>
                <th>address</th>
                <th>num</th>
                <th>Min_track</th>
                <th>status</th>
                <th>created-at</th>
                <th>updated-at</th>
            </tr>

            <tr>
                <td>
                    <div>
                        <input type="radio" id="select" name="radio" value="radio">
                        <label for="select"></label>
                    </div>
                </td>
                <td>1</td>
                <td>2</td>
                <td>6</td>
                <td>abdo</td>
                <td>22st</td>
                <td>122596983</td>
                <td>not shiped</td>
                <td>NULL</td>
                <td>NULL</td>
        </table>

    </div>


    <!-- ---------------------------sidebar--------------------- -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="#">
                    <i class="fas fa-chart-bar"></i>
                    <div>Status</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-th-large"></i>
                    <div>Orders</div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-hand-holding-usd"></i>
                    <div>Shipment</div>
                </a>
            </li>
            <li>
                <a href="#">
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
