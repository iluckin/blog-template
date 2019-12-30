@extends('layouts.app')

@section('main')
    <div class="row">
        <div class="col-8">
            <div class="search my-4">
                <div class="input-group shadow-sm main-search">
                    <input type="text" class="form-control border-0" placeholder="Search what you want to search" autofocus aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary border-0 px-4" type="button" id="button-addon2">
                            <i data-feather="search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="article-list">
                @for($i = 0; $i < 6; $i++)
                    <div class="card mb-3 border-0 shadow-sm blog-item">
                        <div class="card-body">
                            <div class="position position--genuine featured-sign">
                                <div class="d-flex">
                                    <div class="article-cover flex-coludmn text-center mr-2">
                                        <img src="{{ asset('images/logo.svg') }}" alt="Logo of Factorial GmbH">
                                    </div>
                                    <div class="position__info w-100 ml-3">
                                        <div class="article-title">
                                            <a href="" class="font-weight-bold">前端开发人员（JavaScript）</a>
                                            <div class="position__location text-muted small">
                                                at
                                                <a class="font-weight-bold">Factorial GmbH</a>
                                                – <span class="text-capitalize">Hamburg, Germany</span></div>
                                            <div class="tags">
                                                <a href=""class="font-weight-bold">Lumen</a>
                                            </div>
                                            <div class="small mt-2">关于我们
                                                Factorial是位于汉堡的开发工作室。我们创造进步
                                                国际品牌的数字解决方案。我们感谢与众不同
                                                我们团队的背景...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="pagination text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="col-4 border-1">
            <div class="the-bears-designs text-white text-center">
                <img src="{{ asset('images/thebear-white@3x.png') }}" height="42" class="mt-2">
                <h6 class="mt-3 font-weight-light">设计 & 课程</h6>
            </div>
        </div>
    </div>
@endsection
