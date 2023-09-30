<section>

    <div class=" list-group mb-2">
        <a href="{{route("page.home")}}" class="list-group-item list-group-item-action"> Home</a>
    </div>
    @NotUser
    <div class=" list-group mb-1">
        <a href="{{route("auth.register")}}" class="list-group-item list-group-item-action"> Register</a>
    </div>
    <div class=" list-group">
        <a href="{{route("auth.login")}}" class="list-group-item list-group-item-action"> Login</a>
    </div>
    @endNotUser
    @user
    <p>Dashboard</p>
    <div class=" list-group mb-2">
        <a href="{{route("dashboard.home")}}" class="list-group-item list-group-item-action">Dashboard</a>
    </div>
    <p> Manage History</p>
    <div class=" list-group mb-1">
        <a href="{{route("inventory.create")}}" class="list-group-item list-group-item-action"> Create Item</a>
    </div>
    <div class=" list-group">
        <a href="{{route("inventory.index")}}" class="list-group-item list-group-item-action"> Item List</a>
    </div>
    <p> Manage Category</p>
    <div class=" list-group mb-1">
        <a href="{{route("category.create")}}" class="list-group-item list-group-item-action"> Create Catetory</a>
    </div>
    <div class=" list-group">
        <a href="{{route("category.index")}}" class="list-group-item list-group-item-action"> Category List</a>
    </div>
    <p> User Profile</p>
    <div class=" list-group mb-1">
        <a href="" class="list-group-item list-group-item-action"> My Profile</a>
    </div>
    <div class=" list-group">
        <a href="" class="list-group-item list-group-item-action"> Change Password</a>
    </div>

    <form action="{{route("auth.logout")}}" method="post">
        @csrf
        <button class="btn btn-primary w-100 mt-3">Logout</button>
    </form>

    @enduser
  


</section>