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

    <section class="create-employee-section">
            <div class="title-section">
                <p>Add New Employee</p>
            </div>
                    <div class="layout-add-emplo">
                        <div class="form-new-employee">
                            <form action="{{route('employee.store')}}" method="POST">
                                @csrf
                                <div class="form-material">
                                    <div>
                                        <label for="" class="form-label-title">Name</label>
                                        <label for="" class="form-label-title-red">*</label>
                                    </div>
                                    <input type="text" name="employee_name" id="" placeholder="Celine Dion" value="{{old('employee_name')}}">
                                </div>
                                @error('employee_name')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror

                                <div class="form-material">
                                    <div>
                                        <label for="" class="form-label-title">Address</label>
                                        <label for="" class="form-label-title-red">*</label>
                                    </div>
                                    <input type="text" name="employee_address" id="" placeholder="Street Beverly No.19" value="{{old('employee_address')}}">
                                </div>
                                @error('employee_address')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror

                                <div class="form-material">
                                    <div>
                                        <label for="" class="form-label-title">Age</label>
                                        <label for="" class="form-label-title-red">*</label>
                                    </div>
                                    <input type="number" name="employee_age" id="" placeholder="25" value="{{old('employee_age')}}">
                                </div>
                                @error('employee_age')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror

                                <div class="form-material">
                                    <div>
                                        <label for="" class="form-label-title">Phone Number</label>
                                        <label for="" class="form-label-title-red">*</label>
                                    </div>
                                    <input type="number" name="employee_phonenumber" id="" placeholder="089851481811" value="{{old('employee_phonenumber')}}">
                                </div>
                                @error('employee_phonenumber')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror

                                <button class="btn-submit">Submit</button>
                            </form>
                        </div>
                        <div class="chipi-chapa-ctr">
                            <span class="ch-ch-gr">Chipi</span>
                            <span class="ch-ch-gr">Chapa</span>
                            <span class="ch-ch-gr">Group</span>
                    </div>
                    </div>
            </div>
    </section>

