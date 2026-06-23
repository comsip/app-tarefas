<! DOCTYPE html >
<html lang ="pt -br">

<head>
<meta charset ="UTF -8">
<title> Relatórios </title>
<style>
body {
    font-family : Arial , sans-serif ;
margin:40px ;
background-color: #f9f9f9 ;
}
.container {
background :white ;
padding : 20px ;
border - radius : 8px ;
box-shadow : 0 0 10px #ccc ;
max-width : 700px ;
margin:auto ;
}

h1 {
color:#333;
}

a{
 text-decoration : none ;
 color : #007 bff ;
 margin-right : 10px ;
}

a:hover {
text-decoration : underline ;
}

label {
display : block ;
margin-top : 10px ;
}

input {
padding :6px ;
width :100%;
margin-bottom : 10px ;
}

button {
padding :8px 15px ;
background : #007 bff ;
color : white ;
border : none ;
border-radius : 4px ;
}

ul{
    padding-left : 20px ;
}

</style>
</head>
<body>
<div class =" container ">
@yield ('content')
</div>
</body>
</html>
