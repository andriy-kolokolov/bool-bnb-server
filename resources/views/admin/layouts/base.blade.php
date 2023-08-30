<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            nav {
                height: 70px;
                width: 100%;
                background-color: rgb(245, 245, 245);
                border-bottom: 1px solid rgb(220, 220, 220);
            }

                .myContainer {
                    height: 100%;
                    width: 90%;
                    margin-inline: auto;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .myContainer .image {
                    height: 55%;
                }
                    .myContainer .image img {
                        height: 100%;
                    }

                    .myContainer .image .ms-total {
                        display: inline-block;
                        width: 125px;
                    }

                    .myContainer .image .ms-small {
                        display: none;
                    }

                .search {
                    display: flex;
                    align-items: center;
                    background-color: white;
                    box-shadow: 0 5px 10px rgb(200, 200, 200);
                    border: 1px solid rgb(200, 200, 200);
                    border-radius: 100px;
                    padding-right: 10px;
                }
                    .search .myInput {
                        border: 0;
                        border-bottom-left-radius: 100px;
                        border-top-left-radius: 100px;
                        outline: none;
                        height: 40px;
                        width: 350px;
                        padding-left: 20px;
                    }
                    
                    .search .myBtn {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        border: 0;
                        border-radius: 20px;
                        color: white;
                        background-color: rgb(71, 92, 163);
                        font-size: 15px;
                        outline: none;
                        height: 30px;
                        width: 30px;
                        transition: 0.2s ease;
                    }

                    .search .myBtn:hover {
                        background-color: rgb(58, 78, 143);
                        transition: 0.2s ease;
                    }

                .routes {
                    height: 100%;
                    width: 125px;
                    display: flex;
                    align-items: center;
                    justify-content: end;
                }

                    .routes .menu-dropdown #button {
                        background-color: transparent;
                        border: none;
                        cursor: pointer;
                        height: 30px;
                        outline: none;
                        padding: 0px;
                        width: 30px;
                    }

                        .menu-dropdown #button.toggled #icon {
                            background-color: transparent;
                        }

                            .menu-dropdown #button.toggled #icon:before {
                            top: 0px;
                            transform: rotate(-45deg);
                            }

                            .menu-dropdown #button.toggled #icon:after {
                            bottom: 0px;
                            transform: rotate(45deg);
                            }

                        #button #icon {
                            background-color: rgb(71, 92, 163);
                            border-radius: 100px;
                            height: 3px;
                            position: relative;
                            transition: all 0.25s;
                            width: 30px;
                        }

                        #button #icon:before,
                        #button #icon:after {
                            background-color: rgb(71, 92, 163);
                            border-radius: 100px;
                            content: "";
                            height: 3px;
                            left: 0px;
                            position: absolute;
                            transition: all 0.25s;
                            width: 30px;
                        }

                        #button #icon:before {
                            top: -8px;
                        }

                        #button #icon:after {
                            bottom: -8px;
                        }

                    ul li .ms-menu-link a {
                        color: black;
                        text-decoration: none;
                    }

                    .menu-off {
                    display: none;
                    }

            @media only screen and (max-width: 700px) {
                .myContainer .image .ms-total {
                    display: none;
                }

                .myContainer .image .ms-small {
                    display: inline-block;
                }

                .routes {
                    width: fit-content;
                }

                .routes .menu-dropdown {
                    display: none;
                }

                .menu-off {
                    display: inline-block;
                }
                    .menu-off #btn {
                    background-color: transparent;
                    border: none;
                    cursor: pointer;
                    height: 30px;
                    outline: none;
                    padding: 0px;
                    width: 30px;
                    }

                    .menu-off #btn.toggled #icn {
                        background-color: transparent;
                    }

                        .menu-off #btn.toggled #icn:before {
                            top: 0px;
                            transform: rotate(-45deg);
                        }

                        .menu-off #btn.toggled #icn:after {
                            bottom: 0px;
                            transform: rotate(45deg);
                        }

                    .menu-off #btn #icn {
                        background-color: rgb(71, 92, 163);
                        border-radius: 100px;
                        height: 3px;
                        position: relative;
                        transition: all 0.25s;
                        width: 30px;
                    }
                        
                        .menu-off #btn #icn:before,
                        .menu-off #btn #icn:after {
                            background-color: rgb(71, 92, 163);
                            border-radius: 100px;
                            content: "";
                            height: 3px;
                            left: 0px;
                            position: absolute;
                            transition: all 0.25s;
                            width: 30px;
                        }

                        .menu-off #btn #icn:before {
                            top: -8px;
                        }

                        .menu-off #btn #icn:after {
                            bottom: -8px;
                        }

                    .menu-off #staticBackdrop .btn-position {
                        display: flex;
                        justify-content: end;
                        height: fit-content;
                    }

                    .menu-off #staticBackdrop .btn-position .btn {
                        font-size: 2em;
                        margin: 0;
                        padding: 0;
                        padding-inline: 10px;
                        height: fit-content;
                        background-color: rgb(71, 92, 163);
                        color: white;
                    }

                    .menu-off .offcanvas-body {
                        display: flex;
                        align-items: center;
                    }
                        .menu-off .offcanvas-body .ms-routes {
                            width: 100%;
                        }

                        .menu-off .offcanvas-body .ms-routes ul {
                            padding: 0;
                            margin: 0;
                            list-style: none;
                        }

                            .menu-off .offcanvas-body .ms-routes ul li {
                                height: fit-content;
                                display: flex;
                                flex-direction: column;
                                align-items: end;
                                justify-content: center;
                                padding-right: 2em;
                            }

                            .menu-off .offcanvas-body .ms-routes ul li button {
                                background-color: transparent;
                                border: 0;
                            }

                                .menu-off .offcanvas-body .ms-routes ul li button .drop-item {
                                    color: rgb(71, 92, 163);
                                    text-decoration: none;
                                    font-size: 3em;
                                }
            }

            @media only screen and (max-width: 650px) {
                .myContainer .search .myInput {
                        width: 300px;
                }
            }

            @media only screen and (max-width: 500px) {
                .myContainer .search .myInput {
                    width: 200px;
                }
            }

            @media only screen and (max-width: 350px) {
                .myContainer .search .myInput {
                    width: 150px;
                }
            }

            .footer {
                width: 100%;
                height: 50px;
                background-color: rgb(230, 230, 230);
            }

            .footer .myContainer {
                width: 80%;
                height: 100%;
                margin-inline: auto;

                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .myContainer .img {
                height: 30px;
            }

            .myContainer .img img {
                height: 110%;
            }

            .info p {
                margin: 0;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
<body>

    @include('admin.includes.header')

    <main class="main-container mb-5">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    @include('admin.includes.footer')

</body>
</html>
