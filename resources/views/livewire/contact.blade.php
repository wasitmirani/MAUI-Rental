<div>
    <section class="main-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <h2 class="heading-three">Write Us Now </h2>
                            <h2 class="heading-two">Contact Form </h2>
                            <p>We're here to help! Send any questions you have over to us.<br>
                            We look forward to hearing from you.</p>
                        </div>
                    </div>
                    <form action="{{route('send.message')}}" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-lg-12">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" id="" class="form-control" cols="" rows="" placeholder="Messages"></textarea>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-business">Submit Now <i class="fas fa-arrow-right ml-3"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>