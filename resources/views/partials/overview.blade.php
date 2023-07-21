<div class="col-12 mt-4 pb-4 border-bottom">
    <div class="row">
        <div class="col-md-8 col-sm-12 d-flex">
            <h3 class="text-red font-weight-bold my-auto">BAKUL ANIES</h3>
        </div>
        <div class="col-md-4 col-sm-12">
            <a href="{{ url('/account') }}" class="text-decoration-none">
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/profile.png"
                             class="rounded-circle" width="60px"
                             height="60px" alt="avatar">
                    </div>
                    <div class="col-md-9">
                        <p class="text-title1 text-blue mb-1 text-truncate font-weight-bold">{{ auth()->user()->name }}</p>
                        <span class="text-body1 text-blue text-red">Admin</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
