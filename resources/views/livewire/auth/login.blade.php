<div>
    <main class="bg-dark">
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo-login d-flex align-items-center w-auto">
                                    <img src="{{ secure_asset('assets/img/kasulampualogo.svg') }}" alt="" class="img-fluid">
                                </a>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login Website</h5>
                                    </div>

                                    <form class="pb-2 row g-3" wire:submit="login">
                                        <div class="col-12">
                                            <label for="email" class="form-label text-dark fw-semibold">Email</label>
                                            <input type="text" wire:model="form.email" class="form-control text-dark" id="email">
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label text-dark fw-semibold">Password</label>
                                            <input type="password" wire:model="form.password" class="form-control text-dark" id="password">
                                        </div>

                                        <div class="mt-4 col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="credits">
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</div>
