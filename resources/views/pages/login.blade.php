@extends('layout')
@section('container')
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ action('UsuarioController@login') }}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" onchange="buscarempresa()">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" onchange="buscarempresa()">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Empresa:</label><br>
                                <select class="form-control" id="empresa" name="empresa">
                                    <option></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-outline-info btn-md btn-block" value="Ingresar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var username=$("#username");
        var password=$("#password");
        function buscarempresa() {
            $("#empresa").html(``);
            $.ajax({type:'post',
                url:'/api/usr_emp/'+username.val(),
                success:function(r){

                    if(r.length>0){
                        for(var i = 0;i<=r.length-1;i++){
                            $("#empresa").html($("#empresa").html()+`<option value='${r[i].id}'>${r[i].razon_social}</option>`);
                        }
                    }else{
                        alert("No se reconoce a este usuario, digítelo correctamente.");
                    }

                }
            });
        }
    </script>
@endsection