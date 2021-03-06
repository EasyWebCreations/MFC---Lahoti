<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mycss.css">
    <!-- <link rel="stylesheet" href="background.css"> -->

    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
    <style>
    body {
        background-image: url('body.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    table {
        background-color: azure;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: cyan">Finance Calculator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-link active" aria-current="page" href="#" style="color: #fff">Mututal Fund</a>
                    <a class="nav-link active" aria-current="page" href="#" style="color: #fff">SIP</a>


                </div>
            </div>
        </div>
    </nav>

    <section id="cal1">
        <div style="display:flex">
            <h1 style="margin-left :15%;margin-top:5%;margin-right: 2%;color:white">Where to invest? Insurance Policy or
                Mutual Funds?</h1>
            <img src="question.png" style="width:150px;height:130px;margin-top:2%">
        </div>

        <div id="box1" style="background-color: #f3efe7;padding-top:3%;border:5px solid black;margin-top:4%">
            <div class="input-group mb-3  w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Premium</span>
                <input id="premium" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">PPT</span>
                <input id="ppt" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <!-- <div  class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Surrender Year No</span>
                <input id="surrender_year" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Exit year Number">
              </div> -->
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Returns after maturity</span>
                <input onfocusout="myFunction(this)" id="returns_after_maturity_01" type="text"
                    class="form-control returns_after_maturity" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Rate Of Intrest</span>
                <span id="xirr" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default"></span>
            </div>
            <!-- <div  class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Returns if surrendered</span>
                <input  type="text" id="returns_if_surrendered" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Returns if surrendered">
              </div> -->

            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- <button class="btn btn-primary" type="button">Button</button> -->
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter"
                    onclick="function1()">Calculate</button>
            </div>

            <div class="output">
                <div class="row">
                    <div class="col-md-3">
                        <p id="totalsum"> </p>
                    </div>
                    <div class="col-md-3">
                        <p id="totalbenifit"></p>
                    </div>
                    <div class="col-md-3">
                        <p id="surrendersum"> </p>
                    </div>
                    <div class="col-md-3">
                        <p id="surrenderbenefit"></p>
                    </div>
                </div>




            </div>


    </section>
    <div id='container' style="margin-top:5%"></div>
    <!-- <div class="output">
          <span>Total Amount</span>
          <span>Total Gain</span>
          <span>Total Amount After Surrender</span>
          <span>Amount benefited at Surrender Years</span>
      </div> -->
    </div>

    <section id="section1">
        <h1></h1>
        <div id="box2" style="background-color: #f3efe7;padding-top:3%;border:5px solid black">
            <div class="input-group mb-3  w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Premium</span>
                <input id="premium_b" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">PPT</span>
                <input id="ppt_b" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Returns after maturity</span>
                <input id="returns_after_maturity_b" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Surrender Year No</span>
                <input id="surrender_year_b" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <!-- <div  class="input-group mb-3 w-75">
              <span class="input-group-text" id="inputGroup-sizing-default">Rate Of Intrest</span>
              <input id="roi_b" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Rate of Interest">
            </div> -->
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Returns if surrendered</span>
                <input type="text" id="returns_if_surrendered_b" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- <button class="btn btn-primary" type="button">Button</button> -->
                <button id="btn1" class="btn btn-primary" type="button" onclick="function3()">Calculate </button>
            </div>

            <div class="output">
                <div class="row">
                    <div class="col-md-3">
                        <p id="totalsum"> </p>
                    </div>
                    <div class="col-md-3">
                        <p id="totalbenifit"></p>
                    </div>
                    <div class="col-md-3">
                        <p id="surrendersum"> </p>
                    </div>
                    <div class="col-md-3">
                        <p id="surrenderbenefit"></p>
                    </div>
                </div>




            </div>


    </section>

    <div id='container3' style="margin-top:5%;"></div>
    <!-- <div class="output">
                <span>Total Amount</span>
                <span>Total Gain</span>
                <span>Total Amount After Surrender</span>
                <span>Amount benefited at Surrender Years</span>
            </div> -->

    </div>


    <img id="next" src="bai2.png" style="display: none;margin-left:82%;margin-top:-20%">
    </div>
    <section id="MF">
        <h1 style="margin-left :40%;color:white">Mutual Funds Calculator</h1>
        <div id="box3" style="background-color: #f3efe7;padding-top:3%;border:5px solid black">
            <div class="input-group mb-3  w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Investment Value</span>
                <input id="returns_if_surrendered01" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Investment Period</span>
                <input id="ip" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Rate of Interest</span>
                <input id="rate_of_interest" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- <button class="btn btn-primary" type="button">Button</button> -->
                <button class="btn btn-primary" type="button" onclick="function2()" style="margin-bottom:5%">Calculate
                </button>
            </div>
        </div>
        <div class="output">
            <div id="output1">

            </div>

        </div>
        <div class="row" id="comparison" style="margin-top:-5%">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Your Previous Returns</h5>
                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                        <div id="Previous_returns"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Your Mutual Funds Returns</h5>
                        <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                        <div id="Current_returns"></div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section id="sip">
        <h1 id="sip01" style="margin-left :40%;margin-top:2%;color:white">SIP Calculator</h1>
        <div id="box4" style="padding-bottom:3%;background-color: #f3efe7;padding-top:3%;border:5px solid black">
            <div class="input-group mb-3  w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Monthly SIP amount</span>
                <input id="sip_a" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3 w-75">
                <span class="input-group-text" id="inputGroup-sizing-default">Investment Period</span>
                <input id="invp_a" type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <!-- <button class="btn btn-primary" type="button">Button</button> -->
                <button class="btn btn-primary" type="button" onclick="futureValue2()">Calculate</button>
            </div>
        </div>
        <div class="output">
            <p id="output2"></p>

        </div>


    </section>




    <!-- particles.js container -->
    <!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Your returns are</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="display:flex">
                        <div class="col"><img style="margin-left: 45%;width:70px;height:70px" src="happy.png"></div>
                        <div class="col"><img style="width:70px;height:70px" src="question.png"></div>
                    </div>
                </div>
                <div class="modal-footerr" style="margin-bottom:20px">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="margin-left: 25%;margin-right:10%">Happy</button>
                    <!-- <a href="#section1"><button type="button" class="btn btn-primary" data-dismiss="modal">Want More</button></a> -->
                    <a href="#section1"><button type="button" class="btn btn-primary">Want More</button></a>
                </div>
            </div>
        </div>
    </div>



    <!-- 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
<script src="myscript.js"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>