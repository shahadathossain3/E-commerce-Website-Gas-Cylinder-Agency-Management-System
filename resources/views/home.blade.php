@extends('layouts.app')

@section('content')
<div>
<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="pl-4">
		  		
	        <ul class="list-unstyled components mb-5">
	      
	          <li>
	              <a href="{{route('extra.cylinder')}}" class="text-decoration-none">Apply For Extra Cylinder</a>
	          </li>

			  <li>
	              <a href="{{route('payment.get')}}" class="text-decoration-none">Payment</a>
	          </li>


			  <li>
	              <a href="{{route('user.historyy')}}" class="text-decoration-none">User History</a>
	          </li>
	          
         
	         

	        </ul>

	    

	      </div>
    	</nav>

    </div>
		</div>
</div>
@endsection
