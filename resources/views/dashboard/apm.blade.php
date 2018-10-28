@extends('home')

@section('my-content')
<div class='display-4 text-center'>Application Manager</div>
<br/><br/>
<div class='row'>
    <div class="col-md-6">
        <div class="card">
            <div class='card-header text-center align-middle' style='width:100%;font-size:1.5rem'>Super User 
                <a href="../register/su"> 
                    <i class="large material-icons btn btn-outline-secondary btn-lg float-right" style='padding:0px;border:none;font-size:1.5rem'>add</i>
                </a>
            </div>
            <div class='card-body'>
                <ul class='list-group'>
                    <li class='list-group-item'>1st user</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class='card-header text-center align-middle' style='width:100%;font-size:1.5rem'>Sub User 
                <a href="../register/sbu"> 
                    <i class="large material-icons btn btn-outline-secondary btn-lg float-right" style='padding:0px;border:none;font-size:1.5rem'>add</i>
                </a>
            </div>
            <div class='card-body'>
                <ul class='list-group'>
                    <li class='list-group-item'>1st user</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection