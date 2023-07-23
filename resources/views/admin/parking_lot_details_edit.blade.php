@extends('layouts.app')

@section('content')

<div class="container">
    <div>
	    <h3>EDIT PARKING LOT DETAILS</h3>
		
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><center>Parking Lot ID</center></th>
                        <th><center>Parking Lot Name</center></th>
                        <th><center>Price</center></th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>

                    </tr>
                </thead>
            </table>
        </div>
  
        <div class="tbl-content">
        
        </div>
	</div>

    <div>
		<div class="box box-blue">
			<p><strong>EDIT PARKING LOT DETAILS</strong> !</p>
		</div>

		<form action="/parkinglot/{{$parkinglots->id}}" method="post">
            @csrf
			
			<div class="form-control">
				<input  type="text" name="parkinglotname" placeholder="Enter the parking lot name" value = "{{$parkinglots->parking_lot_name}}" required/>
				<img src="./images/icon-error.svg" alt="error-icon" />
			</div>

			<div class="form-control">
				<input type="text" name="price" placeholder="Enter the price" value ="{{$parkinglots->price}}" required>
				<img src="./images/icon-error.svg" alt="error-icon" />
			
            </div>

			<button type="submit"> Submit</button> 
        </form>
	</div>
</div>

@endsection