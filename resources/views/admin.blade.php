@extends('layouts.app')

@section('content')
<div>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="pl-4">
		  		
	        <ul class="list-unstyled components mb-5">
	      
	          <li>
	              <a class="btn btn-info" role="button" href="{{route('product.stock')}}" role="button" class="text-decoration-none">Gas Cylinder Stock</a>
	          </li>
	          <li>
         
	          <li>
              <a href="{{route('distributor.create')}}" class="text-decoration-none">Gas Cylinder Distribution</a>
	          </li>
	          <li>
              <a href="{{route('company.create')}}" class="text-decoration-none">Add New Company</a>
	          </li>

              <li>
              <a href="{{route('admin.register')}}" class="text-decoration-none">Register New Admin</a>
	          </li>

			  <li>
              <a href="{{route('register')}}" class="text-decoration-none">Register New USER</a>
	          </li>

			  <li>
              <a href="{{route('approve.status')}}" class="text-decoration-none">Request Check</a>
	          </li>

			  <li>
              <a href="{{route('total.stock.quantity')}}" class="text-decoration-none">Total Get Stock Quantity</a>
	          </li>

			  <li>
              <a href="{{route('user.history.list')}}" class="text-decoration-none">User List</a>
	          </li>

	        </ul>

	    

	      </div>
    	</nav>

    </div>
		</div>
</div>
@endsection
