<?php
$data = \Illuminate\Support\Facades\DB::table('opcion_usuarios')->where('usuario_id', Session::get("usuario", "")->id)->get();
?>
<ul>
    @foreach($data as $d)
        <li>{{$d->submenu_id}}</li>
    @endforeach
</ul>


