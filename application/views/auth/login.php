<body class="bg-default">

    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <h1>Log in</h1>
                        </div>
                        <form action="<?php echo base_url('auth/post_login') ?>" method="post" accept-charset="utf-8">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input name="correoU" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input name="contraU" class="form-control" placeholder="Password" type="password">
                                </div>
                            </div>
                           
                            <div class="text-center">
                                <button  type="submit" class="btn btn-primary my-4">Iniciar sesión</button>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo base_url('auth/register') ?>" type="submit" class="btn btn-primary my-4">Registrarme</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>