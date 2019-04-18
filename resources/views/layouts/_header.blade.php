<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark px-5">
        <a class="navbar-brand" href="#">
            <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Laravel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        登录
                    </a>
                    <div class="dropdown-menu mr-5" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('signup')}}">登录</a>
                        <a class="dropdown-item" href="{{ route('signup')}}">注册</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">找回密码</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">帮助<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
