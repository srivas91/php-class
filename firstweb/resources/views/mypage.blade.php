<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #nav{
        grid-area:navigation;
        display:flex;
        /* padding:10px; */
        /* justify-items: center; */
        flex-wrap: wrap;
        flex-direction:row;
        justify-content: space-around;
        /* justify-content: center; */
        align-items:left;
    }
    #nav a
    {
        color:blue;
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
    
    #heading{
        grid-area: heading;
        color:purple;
        text-align:center;
        /* border:solid; */
        text-shadow: 10px 10px 10px blue;
        text-transform: uppercase;
    }

    #container
    {
        display: grid;
        grid-template-rows: auto auto auto;
        grid-template: 'heading'
                       'nav'
                       'foot';
       grid-gap:10px;
    }
   #footer{
       position:absolute;
       margin-top:200px;
       grid-area:foot;
       background-color: cyan;
   }
    </style>
</head>
<body>
    <div id="container">
    <div id="heading">
     Bhargavi University
    </div>
<div id="nav">
 <a href="#">Home</a>
 <a href="about">About Us</a>
 <a href="course">Courses Offered</a>
 <a href="contact">Contact Us</a>
 </div>
 <div id="footer">This website developed by Logeshwari &copy; corporation 2021</div>
 </div>
</body>
</html>