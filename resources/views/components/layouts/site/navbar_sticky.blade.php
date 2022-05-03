@inject('ofertAc', 'App\Models\AcademicOfert')
@inject('inst', 'App\Models\Institution')
@inject('form', 'App\Models\InstegralFormation')
@inject('serv', 'App\Models\UnoversityService')

<div class="container-fluid sticky-top fs-5" style="background-color: #151930; color: white;">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="" style="width: 80px" src="{{asset('img/icons/logo-white.png')}}"></a>
        <button style="filter: invert(1.1);" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            
            <x-layouts.site.nb_dropdown title="Oferta Academica" :list="$ofertAc->all()"/>
            <x-layouts.site.nb_dropdown title="Institucion" :list="$inst->all()"/>
            <x-layouts.site.nb_dropdown title="Formacion Integral" :list="$form->all()"/>
            <x-layouts.site.nb_dropdown title="Servicios Universitarios" :list="$serv->all()"/>
          </ul>
        </div>
      </div>
    </nav>
</div>
