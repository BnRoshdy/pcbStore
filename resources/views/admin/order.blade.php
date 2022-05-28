<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/order.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Make Order</title>
</head>
<style>
    body {
        background-color: #ebefee ;
    }
</style>
<body>

    <header> <!----------------------HEADER------------------------>
        <a href="{{route('admin.status')}}" class="logo_admin">MYPCB</a>
        </div>
    </header><!---------------------------------------------------->
    <section>
        <form action="{{route('admin.addorder')}}" method="POST" enctype="multipart/form-data">
            @csrf
                            <section class="progress-area"></section>
                            <section class="uploaded-area"></section>
                            <section class="uploaded-area"></section>
                            <section class="uploaded-area"></section>

            <div class="container">
                <div class="row">
                    <div class="col-md-15 offset-md-3">
                        <div class="card">
                            <div class="card-header" align="center">
                                File Upload
                            </div>
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="file" align="center">Upload File</label>
                                    <input type="file" class="form-control" name="file" id="file" required/>
                                    <section class="progress-area"></section>
                                    <section class="uploaded-area"></section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="checkbox"> <!--first checkbox element-->
            <label for="checkbox">Different Design in Panel:</label>
                <label class="option_item">
                    <input type="radio" name="design_num" class="checkbox" value="1" id="design_num" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">1</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="design_num" class="checkbox" value="2" id="design_num"required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">2</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="design_num" class="checkbox" value="3" id="design_num"required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">3</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="design_num" class="checkbox" value="4" id="design_num"required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">4</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="design_num" class="checkbox" value="5" id="design_num"required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">5</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="design_num" class="checkbox" value="6" id="design_num"required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">6</div>
                    </div>
                </label>
            </div>
                        <!--SIZE ELEMENT-->
            <label for="one">Size (single):</label>
            <input type="number" name ="sizex" id="size" placeholder="               x in cm" required>
            <input type="number" name ="sizey" id="size" placeholder="               y in cm"required><br>

                        <!--QUANTITY ELEMENT-->
            <label for="o">Quantity (single):</label>
            <input type="number" name ="quantity" id="quantity" required><br>

                            <!--LAYERS ELEMENT-->
            <div class="container" id="checkbox">
            <label for="checkbox">Layers:</label>
                <label class="option_item" >
                    <input type="radio" name="layers" id="layers" class="checkbox" value="1" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name"><h24>1 layer</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="2" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">2 layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="4" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">4 Layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="6" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">6 Layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="8" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">8 Layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="10" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">10 Layers</div>
                    </div>
                </label>
            </div>

            <div class="container" id="checkbox">
            <label for="checkbox">Min Track/Spacing:</label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="4/4mil" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">4/4mil</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="5/5mil" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">5/5mil</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="6/6mil" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">6/6mil</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="8/8" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">8/8</div>
                    </div>
                </label>
            </div>
            <div class="container" id="checkbox">
            <label for="checkbox">Min Hole Size:</label>
                <label class="option_item">
                    <input type="radio" name="min_hole_size" id="min_hole_size" class="checkbox" value=".2" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">0.2mm</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_hole_size" id="min_hole_size" class="checkbox" value=".25" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">0.25mm</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_hole_size" id="min_hole_size" class="checkbox" value=".3" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">0.3mm</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_hole_size" id="min_hole_size" class="checkbox" value=".8" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">0.8mm</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_hole_size" id="min_hole_size" class="checkbox" value="1" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">1.0mm</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_hole_size" id="min_hole_size" class="checkbox" value="null" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">No Drill</div>
                    </div>
                </label>
            </div>

            <div class="container" id="checkbox">
            <label for="checkbox">Solder Mask:</label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="green" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Green</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="red" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Red</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="yellow" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Yellow</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="blue" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Blue</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="white" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">White</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="black" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Black</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="purple" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Purple</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="matte black" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Matte Black</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="solder_mask" id="solder_mask" class="checkbox" value="null" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">None</div>
                    </div>
                </label>
            </div>

            <div class="container" id="checkbox">
            <label for="checkbox">Silkscreen:</label>
                <label class="option_item">
                    <input type="radio" name="silkscreen" id="silkscreen" class="checkbox" value="white" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">White</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="silkscreen" id="silkscreen" class="checkbox" value="black" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Black</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="silkscreen" id="silkscreen" class="checkbox" value="null" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">None</div>
                    </div>
                </label>
            </div>

            <div class="container" id="checkbox">
            <label for="checkbox">Stencil:</label>
                <label class="option_item">
                    <input type="radio" name="stensil" id="stensil" class="checkbox" value="yes" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">yes</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="stensil" id="stensil" class="checkbox" value="no" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">no</div>
                    </div>
                </label>
            </div>

            <button type="submit" class="btn btn-success">add</button>

        </form>
    </section>

</body>
</html>
