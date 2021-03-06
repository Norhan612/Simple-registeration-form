<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','Registeration Form')</title>
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <style>
            body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
        pre, form, fieldset, input, textarea, p, blockquote, th, td { 
        padding:0;
        margin:0;}
        fieldset, img {border:0}
        ol, ul, li {list-style:none}
        :focus {outline:none}
        body,
        input,
        textarea,
        select {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        color: #4c4c4c;
        }
        p {
        font-size: 15px;
        width: 343px; 
        height: 50px;
        margin: 15px 28vw;
        text-align: center;
        }
        
        .alert-success{
            color: #f5f0f0;
            background-color: #189e5f;
            border-color: #badbcc;
            border-radius: 8px; 
            margin: 20px auto;
            
        }

        .alert-danger{
            color: #f5f0f0;
            background-color: #d41948;
            border-color: #badbcc;
            border-radius: 8px; 
            margin: 20px auto;
            width: 375px;
            
        }
        
        h1{
        font-size: 32px;
        font-weight: 300;
        color: #4c4c4c;
        text-align: center;
        padding-top: 10px;
        margin-bottom: 10px;
        }
        h2 {
        font-size: 32px;
        font-weight: bold;
        color: #f00;
        text-align: center;
        padding-top: 10px;
        margin-bottom: 10px;
        }
        html{
        background-color: #ffffff;
        }
        .container-field
        {
          background-image: url("../images/xx.jpg");
          background-position: center center;
          -webkit-background-size: cover;
           background-size: cover;
           padding-top: 20px;
           height: 100vh;
        }
        .testbox {
            background-image: url("../images/xx.jpg");
        margin: 20px auto;
        width: 343px; 
        height: 464px; 
        -webkit-border-radius: 8px/7px; 
        -moz-border-radius: 8px/7px; 
        border-radius: 8px/7px; 
        background-color: #ebebeb; 
        -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
        -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
        box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
        border: solid 1px #cbc9c9;
        }
      
        form{
        margin: 0 30px;
        }
       
        hr{
        color: #a9a9a9;
        opacity: 0.3;
        }
        input[type=text],input[type=password],input[type=email]{
        width: 200px; 
        height: 39px; 
        -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
        -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px; 
        border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
        background-color: #fff; 
        -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        border: solid 1px #cbc9c9;
        margin-left: -5px;
        margin-top: 13px; 
        padding-left: 10px;
        }
        input[type=password]{
        margin-bottom: 25px;
        }
        #icon {
        display: inline-block;
        width: 30px;
        background-color: #3a57af;
        padding: 8px 0px 8px 15px;
        margin-left: 15px;
        -webkit-border-radius: 4px 0px 0px 4px; 
        -moz-border-radius: 4px 0px 0px 4px; 
        border-radius: 4px 0px 0px 4px;
        color: white;
        -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
        -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
        border: solid 0px #cbc9c9;
        }
        .gender {
        margin-left: 30px;
        margin-bottom: 30px;
        }
        .accounttype{
        margin-left: 8px;
        margin-top: 20px;
        }
        a.button {
        font-size: 14px;
        font-weight: 600;
        color: white;
        padding: 6px 25px 0px 20px;
        margin: 10px 8px 20px 0px;
        display: inline-block;
        float: right;
        text-decoration: none;
        width: 50px; height: 27px; 
        -webkit-border-radius: 5px; 
        -moz-border-radius: 5px; 
        border-radius: 5px; 
        background-color: #3a57af; 
        -webkit-box-shadow: 0 3px rgba(58,87,175,.75); 
        -moz-box-shadow: 0 3px rgba(58,87,175,.75); 
        box-shadow: 0 3px rgba(58,87,175,.75);
        transition: all 0.1s linear 0s; 
        top: 0px;
        position: relative;
        }
        a.button:hover {
        top: 3px;
        background-color:#2e458b;
        -webkit-box-shadow: none; 
        -moz-box-shadow: none; 
        box-shadow: none;
        
        }

        .main-table
        {
        -webkit-box-shadow:  0 3px 10px #CCC;
        box-shadow:  0 3px 10px #CCC;
        margin-top: 25px;
        }
        .main-table td
        {
        background-color: #FFF;
        vertical-align: middle;
        }

        .main-table th
        {
        background-color: #333;
        color: #FFF;
        }
        </style>

    </head>
<body>
   {{-- @include('layout.navbar') --}} 

    @yield('content')

    {{-- @include('layout.sidebar') --}}
    
       
</body>
</html>