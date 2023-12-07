@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-lg">
                    <div class="card-header text-white" style="background: #1C8A5F">
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                ➤ Catalogo de Objetos de Aprendizaje
                            </div>
                            <div class="col-md-6 d-flex flex-row-reverse">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Buscar OVA"
                                        aria-label="Search">
                                    <button class="btn btn-light text-black" type="submit">Buscar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="card" style="width: 20rem; background: #1C8A5F">
                                    <img src="https://mailrelay.com/wp-content/uploads/2016/09/video-marketing.png"
                                        class="card-img-top" alt="..." height="200px" >
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Videos</h5>
                                        <p class="card-text">Crea videos en base a una descripción.</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-light text-dark">Empezar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 20rem; background: #1C8A5F">
                                    <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2018/03/294849-como-hacer-examenes-tipo-test-word.jpg?tf=1200x"
                                        class="card-img-top" alt="..." height="200px" >
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Examenes</h5>
                                        <p class="card-text">Crea examenes con variedad de preguntas.</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-light text-dark">Empezar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 20rem; background: #1C8A5F">
                                    <img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2019/01/aprendizajes-electronicos-978x652.jpg.webp" height="200px"
                                        class="card-img-top" alt="...">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Actividades</h5>
                                        <p class="card-text">Crea actividades a partir de documentos.</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-light text-dark">Empezar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <div class="card" style="width: 20rem; background: #1C8A5F">
                                    <img src="https://mailrelay.com/wp-content/uploads/2016/09/video-marketing.png"
                                        class="card-img-top" alt="..." height="200px" >
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Videos</h5>
                                        <p class="card-text">Crea videos en base a una descripción.</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-light text-dark">Empezar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 20rem; background: #1C8A5F">
                                    <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2018/03/294849-como-hacer-examenes-tipo-test-word.jpg?tf=1200x"
                                        class="card-img-top" alt="..." height="200px" >
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Examenes</h5>
                                        <p class="card-text">Crea examenes con variedad de preguntas.</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-light text-dark">Empezar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 20rem; background: #1C8A5F">
                                    <img src="https://www.educaciontrespuntocero.com/wp-content/uploads/2019/01/aprendizajes-electronicos-978x652.jpg.webp" height="200px"
                                        class="card-img-top" alt="...">
                                    <div class="card-body text-white">
                                        <h5 class="card-title">Actividades</h5>
                                        <p class="card-text">Crea actividades a partir de documentos.</p>
                                        <div class="d-grid gap-2">
                                            <a href="#" class="btn btn-light text-dark">Empezar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
