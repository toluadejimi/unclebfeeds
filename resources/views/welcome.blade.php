<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.1/examples/pricing/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon.ico">

    <title>UNCLE B FARM</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/pricing/">

    <!-- Bootstrap core CSS -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link href="{{ url('') }}/css/file.css" rel="stylesheet">







    <!-- Custom styles for this template -->
    <link href="./UNCLE B FARM_files/pricing.css" rel="stylesheet">
    <style type="text/css">
        @charset "UTF-8";

        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak {
            display: none;
        }

        ng\:form {
            display: block;
        }
    </style>
    <style>
        .toast-container {
            --radius: 5px;
            --stack-gap: 20px;
            --safe-area-gap: env(safe-area-inset-bottom);
            position: fixed;
            display: block;
            max-width: 468px;
            bottom: calc(env(safe-area-inset-bottom) + 20px);
            bottom: calc(var(--safe-area-gap, 0px) + 20px);
            right: 20px;
            z-index: 5000;
            transition: all .4s ease
        }

        .toast-container .toast {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 468px;
            transition: all .4s ease;
            transform: translate3d(0, 86px, 0);
            opacity: 0
        }

        .toast-container .toast .toast-inner {
            --toast-bg: none;
            --toast-fg: #fff;
            --toast-border-color: #eaeaea;
            box-sizing: border-box;
            border-radius: var(--radius);
            border: 1px solid #eaeaea;
            border: 1px solid var(--toast-border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 24px;
            color: #fff;
            color: var(--toast-fg);
            background-color: none;
            background-color: var(--toast-bg);
            height: var(--height);
            transition: all .25s ease
        }

        .toast-container .toast .toast-inner.default {
            --toast-fg: #000;
            --toast-bg: #fff;
            box-shadow: 0 5px 10px #0000001f
        }

        .toast-container .toast .toast-inner.success {
            --toast-bg: #0076ff;
            --toast-border-color: var(--toast-bg)
        }

        .toast-container .toast .toast-inner.error {
            --toast-bg: #e00;
            --toast-border-color: var(--toast-bg)
        }

        .toast-container .toast .toast-inner.warning {
            --toast-bg: #f5a623;
            --toast-border-color: var(--toast-bg)
        }

        .toast-container .toast .toast-inner.dark {
            --toast-bg: #000;
            --toast-fg: #fff;
            --toast-border-color: #333
        }

        .toast-container .toast .toast-inner.dark .toast-button {
            --button-fg: #000;
            --button-bg: #fff;
            --button-border: #fff;
            --button-border-hover: #fff;
            --button-fg-hover: #fff
        }

        .toast-container .toast .toast-inner.dark .toast-button.cancel-button {
            --cancel-button-bg: #000;
            --cancel-button-fg: #888;
            --cancel-button-border: #333
        }

        .toast-container .toast .toast-inner.dark .toast-button.cancel-button:hover {
            color: #fff;
            border-color: var(--button-border)
        }

        .toast-container .toast .toast-text {
            width: 100%;
            height: 100%;
            font-size: 14px;
            margin-top: -1px;
            margin-right: 24px;
            transition: all .3s ease-in
        }

        .toast-container .toast .toast-button {
            --button-fg: #000;
            --button-bg: #fff;
            --button-border: #fff;
            --button-border-hover: #fff;
            --button-fg-hover: #fff;
            min-width: auto;
            height: 24px;
            line-height: 22px;
            padding: 0 10px;
            font-size: 14px;
            background-color: #fff;
            background-color: var(--button-bg);
            color: #000;
            color: var(--button-fg);
            white-space: nowrap;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            cursor: pointer;
            vertical-align: middle;
            border-radius: var(--radius);
            outline: none;
            border: 1px solid #fff;
            border: 1px solid var(--button-border);
            transition: all .2s ease
        }

        .toast-container .toast .toast-button:hover {
            border-color: var(--button-border-hover);
            background-color: transparent;
            color: var(--button-fg-hover)
        }

        .toast-container .toast .toast-button.cancel-button {
            --cancel-button-bg: #fff;
            --cancel-button-fg: #666;
            --cancel-button-border: #eaeaea;
            margin-right: 10px;
            color: #666;
            color: var(--cancel-button-fg);
            border-color: #eaeaea;
            border-color: var(--cancel-button-border);
            background-color: #fff;
            background-color: var(--cancel-button-bg)
        }

        .toast-container .toast .toast-button.cancel-button:hover {
            --cancel-button-fg: #000;
            --cancel-button-border: #000
        }

        .toast-container .toast .default .toast-button {
            --button-fg: #fff;
            --button-bg: #000;
            --button-border: #000;
            --button-border-hover: #000;
            --button-fg-hover: #000
        }

        .toast-container .toast:after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: calc(100% + 1px);
            width: 100%;
            height: 1000px;
            background: transparent
        }

        .toast-container .toast.toast-1 {
            transform: translateZ(0);
            opacity: 1
        }

        .toast-container .toast:not(:last-child) {
            --i: calc(var(--index) - 1);
            transform: translate3d(0, calc(1px - (var(--stack-gap) * calc(var(--index) - 1))), 0) scale(calc(1 - .05 * (var(--index) - 1)));
            transform: translate3d(0, calc(1px - (var(--stack-gap) * calc(var(--index) - 1))), 0) scale(calc(1 - .05 * calc(var(--index) - 1)));
            transform: translate3d(0, calc(1px - (var(--stack-gap) * var(--i))), 0) scale(calc(1 - .05 * var(--i)));
            opacity: 1
        }

        .toast-container .toast:not(:last-child) .toast-inner {
            height: var(--front-height)
        }

        .toast-container .toast:not(:last-child) .toast-inner .toast-text {
            opacity: 0
        }

        .toast-container .toast.toast-4 {
            opacity: 0
        }

        .toast-container:has(.toast-2):hover {
            bottom: 30px;
            bottom: calc(var(--safe-area-gap, 0px) + 30px)
        }

        .toast-container:hover .toast {
            transform: translate3d(0, calc(var(--hover-offset-y) - var(--stack-gap) * (var(--index) - 1)), 0)
        }

        .toast-container:hover .toast .toast-inner {
            height: var(--height)
        }

        .toast-container:hover .toast .toast-text {
            opacity: 1 !important
        }

        @media (max-width: 440px) {
            .toast-container {
                max-width: 90vw;
                right: 5vw
            }

            .toast-container .toast {
                width: 90vw
            }
        }
    </style>
    <script id="transcript-settings"
        data-css="chrome-extension://klknhfgkblobpfimidmhkclikdalnoke/react/static/css/main.css"
        data-react="chrome-extension://klknhfgkblobpfimidmhkclikdalnoke/react/static/js/main.js"
        data-aiwebm="chrome-extension://klknhfgkblobpfimidmhkclikdalnoke/images/ai.webm" data-math-ocr=""
        data-start-hidden="true" data-hideframe="" data-start-light="" data-autoanswer="" data-autoaianswer=""
        data-snapshot-keybind="shift+ctrl+1" data-search-keybind="shift+ctrl+2" data-search-ai-keybind="shift+ctrl+3"
        data-hide-ui-keybind="shift+ctrl+4" data-buttoncolor="#2563ff" data-logocolor="#ffffff" data-buttonscale="100">
    </script>
</head>

<body style="">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal" href="/welcome" >Uncle B Farm Feeds |  <small class="text-muted"> Welcome {{ Auth::user()->fullname ?? "User"  }}</small> </h5>
        <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Home</a>
            @if($user == 1 )
            <a class="p-2 text-dark" href="/item">Stocks</a>
            <a class="p-2 text-dark" href="/history">History</a>
            <a class="p-2 text-dark" href="/formula">Formular</a>
            <a class="p-2 text-dark" href="/adjust-stock">Adjust Stock</a>

            @endif
        </nav>


        @if($user == null)
        <button type="button" data-toggle="modal" data-target="#login"
        class="btn btn-outline-primary">Login</button>
        <button type="button" data-toggle="modal" data-target="#register" class="btn btn-dark">
            <ion-icon name="person-add-outline"></ion-icon> Register
        </button>
        @else
        <li> <a href="/log-out" class="btn btn-dark">
            <ion-icon name="log-out-outline"></ion-icon> Log Out
        </a></li>
        @endif



    </div>



    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <h2>Login</h2>
                    <form action="/login" method="POST">
                        @csrf

                        <div class="my-2">
                            <label>Username</label>
                            <input class="form-control" name="email" required type="text" autofocus
                                placeholder="Enter your Email">
                        </div>

                        <div class="my-2">
                            <label>Password</label>
                            <input class="form-control" name="password" required type="password" autofocus
                                placeholder="Enter your password">
                        </div>



                        <a href="/forgot-password" class="mt-3 mb-3 text-dark">Forgot password</a>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Login</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>


                    </form>



                </div>

            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <h5>Register</h5>

                    <form action="/register" method="POST">
                        @csrf

                        <div class="my-2">
                            <label>Full Name</label>
                            <input class="form-control" name="fullname" required type="text" autofocus
                                placeholder="Enter your Fullname">
                        </div>

                        <div class="my-2">
                            <label>Email</label>
                            <input class="form-control" name="email" required type="text" autofocus
                                placeholder="Enter your Email Address">
                        </div>

                        <div class="my-2">
                            <label>Password</label>
                            <input class="form-control" name="password" required type="text" autofocus
                                placeholder="Enter your Password">
                        </div>

                        <div class="my-2">
                            <label>Confirm Password</label>
                            <input class="form-control" name="password_confirmation" required type="text" autofocus
                                placeholder="Confirm your Password">
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Register</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>


                    </form>


                </div>

            </div>
        </div>
    </div>




    <div class="container">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif






        @foreach($output->chunk(3) as $items)
        <div class="row center">
            @foreach($items as $item)
            <div class="card col-md-4  mb-3 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">{{ $item->sn }}</h4>
                </div>
                <div class="card-body">
                    <h2 class="card-title pricing-card-title"><small class="">{{ $item->name }}</small></h2>
                    <h1 class="card-title pricing-card-title"><small class=""></small>{{number_format($item->qty, 1) }}
                        Bags</h1>
                </div>



                    {{-- @if($item->qty == 0) --}}

{{-- 
                    <div class="my-3">
                    <button type="button"
                            class="btn btn-danger btn-md mt-2">Low Stock
                    </button>

                    <button type="button" data-toggle="modal" data-target="#restock{{ $item->id }}"
                        class="btn btn-secondary btn-md mt-2">Restock
                    </button>
                    </div> --}}


                @else




                <div class="my-3">



                    @if($user == null)

                    <button type="button" data-toggle="modal" data-target="#login"
                    class="btn btn-outline-primary">Please Login to continue</button>

                    @elseif($user == 2)
                    <button type="submit" data-toggle="modal" data-target="#issue{{ $item->id }}"
                        class="btn btn-primary btn-md mt-2">Receive Stock
                    </button>
                    @elseif($user == 3)
                    <button type="button" data-toggle="modal" data-target="#restock{{ $item->id }}"
                        class="btn btn-secondary btn-md mt-2">Produce Stock
                    </button>

                    @elseif($user == 1)
                    <button type="submit" data-toggle="modal" data-target="#issue{{ $item->id }}"
                        class="btn btn-primary btn-md mt-2">Receive Stock
                    </button>

                    <button type="button" data-toggle="modal" data-target="#restock{{ $item->id }}"
                        class="btn btn-secondary btn-md mt-2">Produce Stock
                    </button>
                    @else

                    <button type="button" data-toggle="modal" data-target="#login"
                    class="btn btn-outline-primary">Please Login to continue</button>


                    @endif

                </div>
                @endif


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Issue Out Items</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/issue-now" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Select Item</label>
                                        <select class="form-control" name="item" required>
                                            <option>Select Item</option>
                                            @foreach ($output as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }} - {{ $item->qty }} Bags
                                            </option>
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="my-4">

                                        <label>Quantity</label>
                                        <input type="number" step="any" required name="qty" class="form-control">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Issue Out</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="issue1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Issue Out Items</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/issue-now" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Item</label>
                                        <h3>{{ "Chick's Mash" }} - {{ $cmesh }} Bags</h3>
                                        <input type="number" hidden name="item" value="1" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Enter Quantity</label>
                                        <input type="number" min="0" max="{{ $cmesh }}" step="00.1" required name="qty" class="form-control">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Issue Out</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="issue2" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Issue Out Items</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/issue-now" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Item</label>
                                        <h3>{{ "Grower's Mash" }} - {{ $gmesh }} Bags</h3>
                                        <input type="number" hidden name="item" value="2" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Enter Quantity</label>
                                        <input type="number" min="0" max="{{ $gmesh }}" step="00.1" required name="qty" class="form-control">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Issue Out</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="issue3" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Issue Out Items</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/issue-now" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Item</label>
                                        <h3>{{ "Layer's Mash" }} - {{ $lmesh }} Bags</h3>
                                        <input type="number"  hidden name="item" value="3" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Enter Quantity</label>
                                        <input type="number" min="0" max="{{ $lmesh }}" step="00.1" required name="qty" class="form-control">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Issue Out</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="issue4" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Issue Out Items</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/issue-now" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Item</label>
                                        <h3>{{ "Broiler's Stater" }} - {{ $bs }} Bags</h3>
                                        <input type="number" hidden name="item" value="4" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Enter Quantity</label>
                                        <input type="number" min="0" max="{{ $bs }}" step="00.1" required name="qty" class="form-control">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Issue Out</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="issue5" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Issue Out Items</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/issue-now" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Item</label>
                                        <h3>{{ "Broiler's Finisher" }} - {{ $bf }} Bags</h3>
                                        <input type="number" hidden name="item" value="5" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Enter Quantity</label>
                                        <input type="number" min="0" max="{{ $bf }}" step="00.1" required name="qty" class="form-control">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Issue Out</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="issue6" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Issue Out Items</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/issue-now" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Item</label>
                                        <h3>{{ "Pre Layer's Mesh" }} - {{ $pl }} Bags</h3>
                                        <input type="number" hidden name="item" value="6" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Enter Quantity</label>
                                        <input type="number" required name="qty" class="form-control">

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Issue Out</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>


                            </div>

                        </div>
                    </div>
                </div>



                <!-- Modal Restock-->
                <div class="modal fade" id="restock1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Restock</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="/ton-produce" method="POST">
                                    @csrf

                                    <div class="my-4">

                                        <label>Item</label>
                                        <h3>{{ "Chick's Mash" }} - {{ $cmesh }} Bags</h3>
                                        <input type="number" hidden name="item" value="1" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Choose Quantity in Bags</label>
                                        <select name="tons" required class="form-control">
                                            <option>Select Bags</option>
                                            <option value="1">40 Bags</option>
                                            <option value="2">65 Bags</option>
                                            <option value="3">80 Bags</option>


                                        </select>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>






                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="restock2" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Restock</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="/ton-produce" method="POST">
                                    @csrf

                                    <div class="my-4">
                                        <label>Item</label>
                                        <h3>{{ "Grower's Mash" }} - {{ $gmesh }} Bags</h3>
                                        <input type="number" hidden name="item" value="2" class="form-control">


                                    </div>


                                    <div class="my-4">

                                        <label>Choose Quantity in Bags</label>
                                        <select name="tons" required class="form-control">
                                            <option>Select Bags</option>
                                            <option value="1">40 Bag</option>
                                            <option value="2">65 Bags</option>
                                            <option value="3">80 Bags</option>


                                        </select>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>






                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="restock3" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Restock</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="/ton-produce" method="POST">
                                    @csrf

                                    <div class="my-4">
                                        <label>Item</label>
                                        <h3>{{ "Layer's Mash" }} - {{ $lmesh }} Bags</h3>
                                        <input type="number" hidden name="item" value="3" class="form-control">
                                    </div>


                                    <div class="my-4">

                                        <label>Choose Quantity in Bags</label>
                                        <select name="tons" required class="form-control">
                                            <option>Select Bags</option>
                                            <option value="1">40 Bag</option>
                                            <option value="2">65 Bags</option>
                                            <option value="3">80 Bags</option>


                                        </select>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>






                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="restock4" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Restock</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="/ton-produce" method="POST">
                                    @csrf

                                    <div class="my-4">
                                        <label>Item</label>
                                        <h3>{{ "Broiler's Stater" }} - {{ $bs }} Bags</h3>
                                        <input type="number" hidden name="item" value="4" class="form-control">
                                    </div>


                                    <div class="my-4">

                                        <label>Choose Quantity in Bags</label>
                                        <select name="tons" required class="form-control">
                                            <option>Select Bags</option>
                                            <option value="1">40 Bags</option>
                                            <option value="2">65 Bags</option>
                                            <option value="3">80 Bags</option>


                                        </select>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>






                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="restock5" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Restock</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="/ton-produce" method="POST">
                                    @csrf

                                    <div class="my-4">
                                        <label>Item</label>
                                        <h3>{{ "Broiler's Finisher" }} - {{ $bf }} Bags</h3>
                                        <input type="number" hidden name="item" value="5" class="form-control">
                                    </div>


                                    <div class="my-4">

                                        <label>Choose Quantity in Bags</label>
                                        <select name="tons" required class="form-control">
                                            <option>Select Bags</option>
                                            <option value="1">40 Bag<s/option>
                                            <option value="2">65 Bags</option>
                                            <option value="3">2 Bags</option>


                                        </select>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>






                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="restock6" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Restock</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form action="/ton-produce" method="POST">
                                    @csrf

                                    <div class="my-4">
                                        <label>Item</label>
                                        <h3>{{ "Pre Layer's Mesh" }} - {{ $pl }} Bags</h3>
                                        <input type="number" hidden name="item" value="6" class="form-control">

                                    </div>


                                    <div class="my-4">

                                        <label>Choose Quantity in Bags</label>
                                        <select name="tons" required class="form-control">
                                            <option>Select Bags</option>
                                            <option value="1">40 Bag</option>
                                            <option value="2">65 Bags</option>
                                            <option value="3">80 Bags</option>


                                        </select>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Continue</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>


                                </form>






                            </div>

                        </div>
                    </div>
                </div>















            </div>
            @endforeach
        </div>
        @endforeach






        {{-- <footer class="pt-4 my-md-5 pt-md-5 border-top">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>




        </footer> --}}
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ url('') }}/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="{{ url('') }}/popper.min.js"></script>
    <script src="{{ url('') }}/bootstrap.min.js"></script>
    <script src="{{ url('') }}/holder.min.js"></script>
    <script>
        Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>


</body>

</html>
