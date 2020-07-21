<!DOCTYPE html>
<!-- Template by html.am -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Telemedicina</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            height: 100%;
            max-height: 100%;
            font-family: Fjalla One;
            line-height: 1.5em;
        }

        #header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            overflow: hidden;
            /* Disables scrollbars on the header frame. To enable scrollbars, change "hidden" to "scroll" */
            background: #33A2FF;
        }

        #nav {
            position: absolute;
            top: 100px;
            left: 0;
            bottom: 0;
            width: 230px;
            overflow: auto;
            /* Scrollbars will appear on this frame only when there's enough content to require scrolling. To disable scrollbars, change to "hidden", or use "scroll" to enable permanent scrollbars */
            background: #bdd4ff;
        }

        #logo {
            padding: 10px;
        }

        main {
            position: fixed;
            top: 100px;
            /* Set this to the height of the header */
            left: 230px;
            right: 0;
            bottom: 0;
            overflow: auto;
            background: #fafcfc;
        }

        .innertube {
            margin: 15px;
            /* Provides padding for the content */
        }

        p {
            color: #555;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul a {
            color: darkgreen;
            text-decoration: none;
        }

        /*IE6 fix*/
        * html body {
            padding: 100px 0 0 230px;
            /* Set the first value to the height of the header and last value to the width of the nav */
        }

        * html main {
            height: 100%;
            width: 100%;
        }
    </style>

</head>

<body>


    <header id="header">
        <div id="logo">
            <p>
                <h1>Medical Account Management</h1>
        </div>
    </header>

    <main>
        <div class="innertube">
            <h3>
                Professional Data
            </h3>
            <h3>
               NAME:  {{ Auth::user()->name }}
            </h3>
            <h3>
               EMAIL: {{ Auth::user()->email }}
            </h3>
        </div>
    </main>

    <nav id="nav">
        <div class="innertube">
            <ul>
                <p class="p-2 bg-success text-white" align="center">CONTROL PANEL</p>
                <p>
                    <li><a class="btn btn-light btn-lg btn-block" href="#">ACCOUNT <i style="font-size:24px" class="fa">&#xf0f0;</i></a></li>
                </p>
                <p>
                    <li><a class="btn btn-light btn-lg btn-block" href="#">SCHEDULING <i style='font-size:24px' class='fas'>&#xf46d;</i></a></li>
                </p>
                <p>
                    <li><a class="btn btn-light btn-lg btn-block" href="#">REPORT <i style='font-size:24px' class='fas'>&#xf47f;</i></a></li>
                </p>
                <p>
                    <li><a class="btn btn-danger btn-lg btn-block" href="#">LOGOUT </a></li>
                </p>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>