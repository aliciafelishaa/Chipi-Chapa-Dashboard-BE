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
                                    <label for="" class="form-label-title">Name</label>
                                    <input type="text" name="" id="" placeholder="Celine Dion">
                                </div>
                                <div class="form-material">
                                    <label for="" class="form-label-title">Address</label>
                                    <textarea name="" id="" cols="30" rows="5" placeholder="Street Beverly No.19"></textarea>
                                </div>
                                <div class="form-material">
                                    <label for="" class="form-label-title">Age</label>
                                    <input type="number" name="" id="" placeholder="25">
                                </div>
                                <div class="form-material">
                                    <label for="" class="form-label-title">Phone Number</label>
                                    <input type="number" name="" id="" placeholder="09885148181">
                                </div>
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

