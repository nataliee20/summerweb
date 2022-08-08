<div class="jumbotron jumbotron-fluid">
            <div class="container">

            </div>
        </div>


        <style>
            html {
                background: #bbc3c6;
                font: 62.5%/1.5em "Trebuchet Ms", helvetica;
            }

            * {
                box-sizing: border-box;
                -webkit-font-smoothing: antialiased;
                font-smoothing: antialiased;
            }

            @font-face {
                font-family: 'Shopper';
                src: url('http://www.shopperfont.com/font/Shopper-Std.ttf');
            }

            .shopper {
                text-transform: lowercase;
                font: 2em 'Shopper', sans-serif;
                line-height: 0.5em;
                display: inline-block;
                text-align: center;
            }


            h1 {
                text-transform: uppercase;
                font-weight: bold;
                font-size: 2em;
            }

            p {
                font-size: 1em;
                color: #8a8a8a;
            }

            input {
                border: 0.3em solid #bbc3c6;
                padding: 0.5em 0.3em;
                font-size: 1.4em;
                color: #8a8a8a;
                text-align: center;
            }

            img {
                max-width: 100%;
                overflow: hidden;
                margin-right: 1em;
            }

            a {
                text-decoration: none;
            }

            .container {
                width: 95%;
                margin: 10px auto;
                overflow: hidden;
                position: relative;

                border-radius: 0.6em;
                background: #ecf0f1;
                box-shadow: 0 0.5em 0 rgba(138, 148, 152, 0.2);
            }

            .heading {
                padding: 1em;
                position: relative;
                z-index: 1;
                color: #000000;
                background: #b0edab;
                text-align: center
            }

            .cart {
                margin: 1em;
                overflow: hidden;
            }

            .cart.is-closed {
                height: 0;
                margin-top: -2.5em;
            }

            .table {
                background: #ffffff;
                border-radius: 0.6em;
                overflow: hidden;
                clear: both;
                margin-bottom: 1.8em;
            }


            .layout-inline > * {
                display: inline-block;
            }

            .align-center {
                text-align: center;
            }

            .th {
                background: #b0edab;
                color: #fff;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 1.5em;
            }

            .tf {
                background: #b0edab;
                text-transform: uppercase;
                text-align: right;
                font-size: 1.2em;
            }

            .tf p {
                color: #fff;
                font-weight: bold;
            }

            .col {
                padding: 0.5em;
                width: 12%;
            }

            .col-pro {
                width: 44%;
                font-size: 1.2em;
                font-weight: 700;
            }

            .col-pro > * {
                vertical-align: middle;
            }

            .col-qty {
                text-align: center;
                width: 17%;
            }

            .col-numeric p {
                font: bold 1.2em helvetica;
            }

            .col-total p {
                color: #12c8b1;
            }

            .tf .col {
                width: 20%;
            }

            .row > div {
                vertical-align: middle;
            }

            .row-bg2 {
                background: #f7f7f7;
            }

            .visibility-cart {
                position: absolute;
                color: #fff;
                top: 0.5em;
                right: 0.5em;
                font: bold 2em arial;
                border: 0.16em solid #fff;
                border-radius: 2.5em;
                padding: 0 0.22em 0 0.25em;
            }

            .col-qty > * {
                vertical-align: middle;
            }

            .col-qty > input {
                max-width: 2.6em;
            }


            a.qty {
                width: 1em;
                line-height: 1em;
                border-radius: 2em;
                font-size: 2.5em;
                font-weight: bold;
                text-align: center;
                background: #43ace3;
                color: #fff;
            }

            a.qty:hover {
                background: #3b9ac6;
            }

            .btn {
                padding: 5px 10px;
                border-radius: 0.3em;
                font-size: 1.4em;
                font-weight: bold;
                background: #000000;
                color: #fff;
                /* box-shadow: 0 3px 0 rgba(59,154,198, 1) */
            }

            .btn:hover {
                box-shadow: 0 3px 0 rgba(59, 154, 198, 0)
            }

            .btn-update {
                float: right;
                margin: 0 0 1.5em 0;
            }

            .transition {
                transition: all 0.3s ease-in-out;
            }

            @media screen and ( max-width: 755px) {
                .container {
                    width: 98%;
                }

                .col-pro {
                    width: 35%;
                }

                .col-qty {
                    width: 22%;
                }

                img {
                    max-width: 100%;
                    margin-bottom: 1em;
                }
            }

            @media screen and ( max-width: 591px) {

            }
        </style>

          <div class="container">
        <div class="heading">
            <h1>
                <span class="shopper"></span> Shopping Cart
            </h1>


        </div>

        <div class="cart transition is-open">
              <div class="table">

            <div class="layout-inline row th">
                <div class="col col-pro">Product</div>
                <div class="col col-qty align-center">QTY</div>
                <div class="col col-price align-center "> Price</div>
                <div class="col col-price align-center "> Action</div>