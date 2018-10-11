@extends('layouts.app')
@section('content')
<br>
    <div class="container" >
            <a class="btn btn-secondary btn-md" role="button" href="/propertymgmt"><i class="fas fa-arrow-circle-left"></i>&nbspBack</a>
            <a class="btn btn-secondary btn-md" role="button" href="/maintenances/create"><i class="fas fa-plus-circle fa-1x"></i>&nbspPersonnel</a>
    </div>
   <br>
    @if(count($maintenances) > 0)
    <div class="container"  >
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Schedule</th>
                    <th>Employment Status</th>
                    <th>Mobile Number</th>
                    <th>Position</th>
                    
                </tr>
                 @foreach($maintenances as $maintenance)
                <tr>
                    <td><a href="/maintenances/{{$maintenance->id}}">{{$maintenance->name}}</a></td>
                    <td>{{$maintenance->schedule}}</td>
                    <td>{{$maintenance->employmentStatus}}</td>
                    <td>{{$maintenance->mobileNumber}}</td>
                    <td>{{$maintenance->position}}</td>
                   
                </tr>  
        @endforeach   
            </table> 
        
    @else
    <div class="alert alert-danger" role="alert"><p>No Maintenance Personnels found!</p></div>
    @endif
            </div>
@endsection

