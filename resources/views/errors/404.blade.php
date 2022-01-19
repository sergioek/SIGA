<style>
    body{
        background-color: beige;
    }
    div{
        margin-top: 5%;
       text-align: center;
    }
    h1{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color: crimson;
        font-size: 4em;
    }
    h3{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: coral;
        font-size: 2em;
    }

    button{
        width: 200px;
        height: 50px;
        background-color: rgb(32, 144, 178);
        font-size: 1em;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        border-radius: 10px;
    }
</style>

<div >
    <img src="{{url('storage/img/logo-removebg.png')}}" alt="" width="300" height="280">
   <h1>ERROR 404</h1>
    <h3 >Página no encontrada</h3>
    <a href="{{url('/dashboard')}}"><button>Home</button></a> 
</div>

