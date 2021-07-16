<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #nav{
        display:flex;
        /* padding:10px; */
        /* justify-items: center; */
        flex-wrap: wrap;
        flex-direction:row-reverse;
        justify-content: space-between;
        /* justify-content: center; */
        align-items:center;
    }
    #nav a
    {
        color:yellow;
        text-decoration: none;
    }
    #nav a:hover{
        text-decoration: underline;
    }
    @media (max-width:300px)
    {
        body
        {
           background-color: yellow;
        }
        #nav
        {
            display:flex;
            flex-direction:column;
        }
    }
    body{
        background: radial-gradient(blue,red);
    }
    </style>
</head>
<body>
<div id="nav">
 <a href="#">Home</a>
 <a href="about">About Us</a>
 <a href="course">Courses Offered</a>
 <a href="contact">Contact Us</a>
 </div>
</body>
</html>