@include('layout.header')
<body>
<nav>
        <div>
            <a href="{{ route('employee.landing') }}">
                <img src="{{ asset('img/logo-white.svg') }}" class="img-logo" alt="Logo">
            </a>
        </div>
        <div class="txt-nav-employee">
                <span class="light-nav-txt"><a href="{{route('employee.page')}}">View Employee</a></span>
                <span class="bold-nav-txt"><a href="{{route('employee.page')}}">Employee Dashboard</a></span>
                <span class="light-nav-txt"><a href="{{route('employee.createPage')}}">Add Employee</a></span>
        </div>
</nav>

<section>
    <div class="title-section">
        <p>ChipiChapa Employee List</p>
    </div>
    <div class="employ-list">
        @forelse ($employeeList as $e)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$e->employee_name}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Age: {{$e->employee_age}}</h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Phone Number: {{$e->employee_phonenumber}}</h6>
              <p class="card-text">Address: {{$e->employee_address}}</p>
              <a href="#" class="card-link">Edit</a>
              <a href="#" class="card-link">Delete</a>
            </div>
          </div>
        @empty
        <p class="alert alert-danger">There's No Employee Data. Create An Employee</p>

        @endforelse
    </div>
</section>
</body>
</html>

