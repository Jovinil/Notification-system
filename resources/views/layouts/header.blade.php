<header>
    <nav>
        <div class="row d-flex align-items-center">
            <div class="col-7 fs-4 fw-bold">Notification-System</div>
            <div class="col-5 d-flex align-items-center justify-content-end">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn ">Log out</submit>
                </form>
                <a href="#" class="btn rounded-circle border border-dark" style="width: 60px; height: 60px; background-image: url( {{ asset('images/images.jpeg') }} );  background-position: center; background-size: contain;   background-repeat: no-repeat;"></a>
            </div>
        </div>
    </nav>
</header>
<style>
    a{




    }
</style>
