<div class="container my-3 py-1">
    <div class="row row-col-lg-2 row-col-md-2 row-col-sm-1 row-col-xs-1">
        <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1>Perfil de Ingreso</h1>
            <hr>
            <div class="nav flex-column nav-tabs">
                <a class="nav-link text-reset text-decoration-none" data-bs-toggle="collapse" href="#conocimientos" role="button" aria-expanded="false" aria-controls="conocimientos"><h3>Conocimientos</h3></a>
                <div class="collapse" id="conocimientos">
                    <ul>
                        @foreach(Str::of($pi->conocimientos)->explode('#') as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="nav flex-column nav-tabs">
                <a class="nav-link text-reset text-decoration-none" data-bs-toggle="collapse" href="#habilidades" role="button" aria-expanded="false" aria-controls="habilidades"><h3>Habilidades</h3></a>
                <div class="collapse" id="habilidades">
                    <ul>
                        @foreach(Str::of($pi->habilidades)->explode('#') as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="nav flex-column nav-tabs">
                <a class="nav-link text-reset text-decoration-none" data-bs-toggle="collapse" href="#aptitudes" role="button" aria-expanded="false" aria-controls="aptitudes"><h3>Aptitudes</h3></a>
                <div class="collapse" id="aptitudes">
                    <ul>
                        @foreach(Str::of($pi->aptitudes)->explode('#') as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h1>Perfil de egreso</h1>
            <hr>
            <div>
                <div>
                    <h3>Perfil de egreso</h3>
                    <p>
                        Es un profesionista capaz de formular soluciones de dise??o, desarrollo, mantenimiento e implantaci??n de sistemas, productos y procesos mecatr??nicos, mediante la integraci??n sin??rgica de elementos mec??nicos, electr??nicos y de control, que permitan la automatizaci??n de equipos y procesos, el control de sistemas flexibles de manufactura y el desarrollo de nuevos dispositivos con el fin de innovar, mejorar e impulsar tecnol??gicamente en su ??rea laboral.
                    </p>

                    <h3>Las principales funciones que se desarrollan por un ingeniero mecatr??nico son:</h3>
                    <ul>
                        <li>Dise??ar sistemas, productos o procesos mecatr??nicos, mediante la integraci??n de tecnolog??as electr??nicas, mec??nicas y de control, para el desarrollo de los sectores social, p??blico y privados.</li>

                        <li>Integrar elementos computacionales, electr??nicos, mec??nicos y de control, para mejorar el desempe??o de sistemas o procesos mediante la automatizaci??n.</li>

                        <li>Administrar proyectos mecatr??nicos, para la optimizaci??n de recursos o procesos mediante las metodolog??as y herramientas necesarias.</li>

                        <li>Proponer modelos o prototipos mecatr??nicos, para innovar sistemas, mediante el desarrollo tecnol??gico e investigaci??n aplicada.</li>

                        <li>Dise??ar planes y programas de mantenimiento, para la prevenci??n y correcci??n de fallas en sistemas mecatr??nicos mediante las herramientas y normatividad aplicable.</li>

                        <li>Administrar el servicio de mantenimiento a sistemas mecatr??nicos, para hacer eficientes los procesos de producci??n mediante la aplicaci??n de los planes y programas de mantenimiento.</li>

                        <li>Construir elementos mec??nicos y electr??nicos, para su manufactura e integraci??n en sistemas mecatr??nicos, mediante herramientas computacionales y m??quinas - herramientas.</li>

                        <li>Integrar robots, para su operaci??n en sistemas de producci??n mediante su selecci??n, instalaci??n y programaci??n.</li>
                    </ul>

                    <h3>Prop??sito general:</h3>
                    <p>
                        La o el ingeniero mecatr??nico es una persona ??tica capaz de generar soluciones de acuerdo a las necesidades de la industria a trav??s de desarrollar, adaptar, innovar y aplicar conocimientos y o t??cnicas de dise??o, automatizaci??n, calidad y productividad para satisfacer las necesidades de la industria.La o el ingeniero mecatr??nico es una persona ??tica capaz de generar soluciones de acuerdo a las necesidades de la industria a trav??s de desarrollar, adaptar, innovar y aplicar conocimientos y/o t??cnicas de dise??o, automatizaci??n, calidad y productividad para satisfacer las necesidades de la industria.
                    </p>

                    <h3>Campo laboral: </h3>
                    <ul>
                        <li>Programador de robots industriales</li>
                        <li>Integrador de celdas de manufactura rob??ticas</li>
                        <li>Instrumentista de procesos industriales</li>
                        <li>Supervisor y gerente de mantenimiento</li>
                        <li>Ingeniero de manufactura y producci??n</li>
                        <li>Ingeniero de mantenimiento industrial</li>
                        <li>Ingeniero de sistemas mecatr??nicos y rob??ticos</li>
                        <li>L??der de proyectos</li>
                        <li>Ingeniero de soporte t??cnico</li>
                        <li>Investigador y desarrollador tecnol??gico</li>
                        <li>Ingeniero de automatizaci??n e integraci??n</li>
                        <li>Emprendedor tecnol??gico</li>
                        <li>Ingeniero de control de procesos industriales</li>
                    </ul>
                </div>
                
            </div>

        </div>
    </div>
</div>