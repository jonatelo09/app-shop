@extends('layouts.principal')

@section('title','Bienvenido a '. config('app.name'))
@section('content')
 <div class="site-blocks-cover overlay" style="background-image: url({{asset('img/tal-fondo.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="row mb-2">
              <div class="card col-md-auto special-card">
                <h1 class="text-cursiva text-dark">Agenda tu Talacha</h1>
                <h3 class="bm-5 lead text-dark">En Talachaz.com puedes: </h3>
                <ul>
                  <li class="text-capitalize">Explorar mas de 500 servicios</li>
                  <li class="text-capitalize">Encontrar servicios de Mecánica automotriz y de motos.</li>
                  <li class="text-capitalize">Agendar Servicios express ha un bajo costo</li>
                  <li class="text-capitalize">personal capacitado para realizar tus talachaz</li>
                  <li class="text-capitalize">Calidad de atencion a clientes.</li>
                </ul>
                <!-- <p class="mb-5 lead text-dark">
                  <ul><li>hola</li></ul></p> -->
                <div class="mt-2 mb-4">
                  @guest
                  <a href="#services-section" class="btn btn-primary py-3 px-5 rounded-5 mb-lg-0 mb-2 d-block d-sm-inline-block">Agenda Ahora</a>
                  <a href="{{ route('register')}}" class="btn btn-info py-3 px-5 rounded-5 d-block d-sm-inline-block">Registrate</a>
                  @endguest
                  @if(auth()->User())
                  <a href="#services-section" class="btn btn-primary btn-block py-3 px-5 rounded-5 mb-lg-0 mb-2 d-block d-sm-inline-block">Agenda Ahora</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Nuestras Categorias</h3>
            <h2 class="section-title mb-3">Visita Nuestras Categorias</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          @foreach($categories as $categoria)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-danger {{ $categoria->icono }} "></span></div>
              <div>
                <h3><a class="text-danger" href="{{url('/categories-dos/'.$categoria->id) }}"> {{$categoria->name}}</a></h3>
                <p>{{$categoria->description}} </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Carrusel de productos -->
    <!-- <section class="carousel slide" data-ride="carousel" id="postsCarousel">
      <div class="container">
          <div class="row">
              <div class="col-12 text-right mb-4">
                  <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                  <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
              </div>
          </div>
      </div>
      <div class="container p-t-0 m-t-2 carousel-inner">
          <div class="row row-equal carousel-item active m-t-0">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-img-top card-img-top-250">
                          <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                      </div>
                      <div class="card-block p-t-2">
                          <div class="card-header"><h3>flower1</h3></div>
                          <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-img-top card-img-top-250">
                          <img class="img-fluid" src="img/35515203036_f8006072b8.jpg" alt="Carousel 1">
                      </div>
                      <div class="card-block p-t-2">
                          <div class="card-header"><h3>flower2</h3></div>
                          <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-img-top card-img-top-250">
                          <img class="img-fluid" src="img/3d75927b210409af8582828c4049fcd0.jpg" alt="Carousel 1">
                      </div>
                      <div class="card-block p-t-2">
                          <div class="card-header"><h3>flower1</h3></div>
                          <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                      </div>
                  </div>
              </div>

          </div>
          <div class="row row-equal carousel-item m-t-0">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-img-top card-img-top-250">
                          <img class="img-fluid" src="img/45590771a1ee18248a49bd399ef99bf1--posts.jpg" alt="Carousel 1">
                      </div>
                      <div class="card-block p-t-2">
                          <div class="card-header"><h3>flower1</h3></div>
                          <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                      </div>
                  </div>
              </div>
             <div class="col-md-4">
                  <div class="card">
                      <div class="card-img-top card-img-top-250">
                          <img class="img-fluid" src="img/917d7b69ebd58d0ef0e561cdcb016303--red-rose-bouquet-red-rose-flower.jpg" alt="Carousel 1">
                      </div>
                      <div class="card-block p-t-2">
                          <div class="card-header"><h3>flower1</h3></div>
                          <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                      </div>
                  </div>
              </div>
             <div class="col-md-4">
                  <div class="card">
                      <div class="card-img-top card-img-top-250">
                          <img class="img-fluid" src="img/29223655865_4b8b01989e.jpg" alt="Carousel 1">
                      </div>
                      <div class="card-block p-t-2">
                          <div class="card-header"><h3>flower1</h3></div>
                          <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium animi molestias veritatis, pariatur dolorem error non reprehenderit vero, id. Incidunt hic laudantium soluta recusandae, voluptas libero et! Ipsa, maiores, ratione.</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section> -->
    <!-- End carrusel de productos -->

    <!-- <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <form class="form-inline" method="get" action=" {{url('/search')}} ">
                <input type="text" placeholder="¿Qué producto buscas?" class="typeahead form-control" name="query" id="search">
                <button class="btn btn-danger btn-just-icon" type="submit">
                    Buscar
                </button>
            </form>
        </div>
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Servicos Populares</h3>
            <h2 class="section-title mb-3">Nuestros Servicios</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="row">
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-5">

            <div class="product-item">
              <a href="{{url('/products-dos/'.$product->id) }}">
                <figure>
                  <img src="{{$product->featured_image_url}}" alt="Image" class="img-fluid">
                </figure>
              </a>
              <div class="px-4">
                <h3><a href="#">{{ $product->name }} </a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" type="button" class="mr-2" data-toggle="modal" data-target="#exampleModalCenter"><span class="icon-star text-warning"></span></a> 5.0</span>
                </div>
                <p class="mb-4">{{ $product->description }} </p>
                <div>
                  <a href="#" class="btn btn-danger mr-1 rounded-5"><span class="icon-cart-plus text-white"></span></a>
                  <a href="details.html" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver</a>
                </div>
              </div>
            </div>

          </div>
          @endforeach
        </div>
      </div>
    </div> -->

    @if(auth()->User())
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="text-center" id="exampleModalLongTitle">¿Cómo Calificarias este Servicio?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="form-group" id="rating-ability-wrapper">
              <label class="control-label" for="rating">
              <span class="field-label-header">How would you rate your ability to use the computer and access internet?*</span><br>
              <span class="field-label-info"></span>
              <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
              </label>
              <h2 class="bold rating-header" style="">
              <span class="selected-rating">0</span><small> / 5</small>
              </h2>
              <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                  <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                  <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                  <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                  <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                  <i class="fa fa-star" aria-hidden="true"></i>
              </button>
            </div>

          </div>
          <div class="modal-footer">
            <button type="subtmit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    @endif
    <!-- <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url({{asset('selling/images/hero2.jpg')}}); background-attachment: fixed;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <form action="/subscriptions" class="col-md-7" method="post">
            @csrf
            <h2>Reciba notificaciones de las actualizaciones</h2>
            <div class="d-flex mb-4">
              <input id="email" name="email" type="text" class="form-control" placeholder="Ingresa tu direccion de correo...">
              <button type="submit" class="btn btn-danger btn-outline-white rounded-5">Suscribete</button>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p>
          </form>
        </div>

      </div>
    </div> -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Servicios Asombrosos</h3>
            <h2 class="section-title mb-3">Servicios Destacados</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="bg-white py-4 mb-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="{{asset('img/mecanica.jpg')}}" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-5 ml-auto product-title-wrap">
              <span class="number">01.</span>
              <h3 class="text-black mb-4 font-weight-bold">Acerca de este Servicio</h3>
              <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>

              <div class="mb-4">
                <h3 class="text-black font-weight-bold h5">Precio:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
              <p>
                @if(auth()->check())
                <!-- <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Ver Detalles</a> -->
                <a href="{{url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger rounded-5 d-block d-lg-inline-block"><span class="icon-cart-plus text-white"></span></a>
                @else
                <!-- <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Ver Detalles</a> -->
                <a href="{{url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger rounded-5 d-block d-lg-inline-block"><span class="icon-cart-plus text-white"></span></a>
                @endif


              </p>
            </div>
          </div>
        </div>

        <div class="bg-white py-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0 order-1 order-md-2">
              <img src="{{asset('img/moto.jpg')}}" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-5 mr-auto product-title-wrap order-2 order-md-1">
              <span class="number">02.</span>
              <h3 class="text-black mb-4 font-weight-bold">Acerca de este Servicio</h3>
              <p class="mb-4">Et tempora id nostrum saepe amet doloribus deserunt totam officiis cupiditate asperiores quasi accusantium voluptatum dolorem quae sapiente voluptatem ratione odio iure blanditiis earum fuga molestiae alias dicta perferendis inventore!</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus soluta assumenda sed optio, error at?</p>

              <div class="mb-4">
                <h3 class="text-black font-weight-bold h5">Precio:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div>
              <p>
                @if(auth()->check())
                <!-- <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Ver Detalles</a> -->
                <a href="{{url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger rounded-5 d-block d-lg-inline-block"><span class="icon-cart-plus text-white"></span></a>
                @else
                <!-- <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">Ver Detalles</a> -->
                <a href="{{url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger rounded-5 d-block d-lg-inline-block"><span class="icon-cart-plus text-white"></span></a>
                @endif
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row">
                  @foreach($products as $product)
                  <div class="col-lg-4 col-md-6 mb-5">

                    <div class="product-item">
                      <a href="{{url('/products-dos/'.$product->id) }}">
                        <figure>
                          <img src="{{ $product->featured_image_url }}" alt="Image" class="img-fluid" style="width: 250px; height: 250px;">
                        </figure>
                        </a>
                      <div class="px-2">
                        <h3><a href="{{url('/products-dos/'.$product->id) }}">{{ $product->name }} </a></h3>
                        <div class="mb-2">
                          <span class="meta-icons mr-2"><a href="#" type="button" class="mr-2" data-toggle="modal" data-target="#exampleModalCenter"><span class="icon-star text-warning"></span></a> 5.0</span>
                        </div>
                         <h3 class="mb-2">${{ $product->price }} </h3>
                        <p class="mb-2">{{ $product->description }} </p>
                        <div>
                          @if(auth()->check())
                          <a href="#" class="btn btn-danger rounded-5 d-block d-lg-inline-block" data-toggle="modal" data-target="#ModalAddCar"><span class="icon-cart-plus text-white"></span></a>
                          @else
                          <a href="{{url('/login?redirect_to='.url()->current()) }}" class="btn btn-danger rounded-5 d-block d-lg-inline-block"><span class="icon-cart-plus text-white"></span></a>
                          @endif
                            <a href="{{url('/products-dos/'.$product->id) }}" class="btn btn-black btn-outline-black ml-1 rounded-0">Ver Detalles</a>
                        </div>
                      </div>
                    </div>

                  </div>
                  @endforeach
                </div>
              </div>

            </div>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
      </div>
    </div> -->


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img src="{{asset('img/hero2.jpg')}}" class="img-fluid" alt="Image">
            <div class="experience">
              <span class="year">Empresa Confiable</span>
              <span class="caption">Más de 50 años en el mercado</span>
            </div>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="section-sub-title"></h3>
            <h2 class="section-title mb-3">Nosotros</h2>
            <p class="mb-4">Empresa dedicada a brindar servicios a domicilio, servicios que van desde lo mas básico hasta los mas avanzado, plomeria, albañilería, herrería, diligenciero, mecánica automotriz, mecánica de motos, etc.</p>
            <!-- <p><a href="#" class="btn btn-black btn-black--hover rounded-0">Learn More</a></p> -->
          </div>
        </div>
      </div>
    </div>

    <!--<div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url({{asset('selling/images/hero2.jpg')}}); background-attachment: fixed; background-position: top;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h3 class="section-sub-title">Promocion Especial</h3>
            <h3 class="section-title text-white mb-4">Ventas de Verano</h3>
            <p class="mb-5 lead">Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>

            <div id="date-countdown" class="mb-5"></div>

            <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Agenda Ahora</a></p>
          </div>
        </div>

      </div>
    </div>-->



    <div class="site-section bg-light border-bottom" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Formulario de Contacto</h3>
            <h2 class="section-title mb-3">Quieres Trabajar con Nosotros?</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">


            <form method="POST" action="{{url('/admin/aspirant')}}" class="p-5 bg-white contact-form">
              @csrf
              <h2 class="h4 text-black text-center mb-5">Escribe tus Datos</h2>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="fname">Nombre Completo</label>
                  <input type="text" id="fname" name="nameFull" class="form-control rounded-0">
                </div>
                <!--<div class="col-md-6">
                  <label class="text-black" for="lname">Apellido</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>-->
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="phone">Telefono</label>
                  <input type="tel" id="phone" name="phone" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="oficio">Oficio(s)</label>
                  <textarea id="oficio" name="oficio" cols="30" rows="7" class="form-control rounded-0" placeholder="Escribe Tus Oficios que Dominas..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Enviar" class="btn btn-primary btn-block rounded-3 py-3 px-4">
                </div>
              </div>
            </form>
          </div>

        </div>

      </div>
    </div>
    @endsection

    @section('scripts')
    <script src=" {{asset('/js/typeahead.bundle.min.js')}} "></script>
    <script >
        $(function(){
            //
            var products = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              // `states` is an array of state names defined in "The Basics"
              prefetch: {
                url: '{{ url('/products/json') }}',
                cache: false
              }
            });
            //inicializar typeahead sobre nuestro input de búsqueda
            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            },{
                name: 'products',
                source: products
            });
        });
    </script>
@endsection