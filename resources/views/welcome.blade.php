<x-layouts.app
    title="Home"
    meta-description="Home meta description"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>
    <div class="flex flex-wrap items-center flex-col text-center w-full">
        <h3>Hola!👋</h3>
        <p class="pl-14 pr-14">
            Quiero darte una presentación y orientación de en qué se basa esta página. <br>
            En la barra de navegación en la parte derecha, podrás registrarte y, luego de loguearte, podrás <br> tener acceso al apartado blog para que puedas interactuar con la interfaz, creando cartas con <br>descripciones, borrando cartas y editando tus cartas ya creadas.
          <br>
          <br>
            Te invito también a revisar el apartado de "About" para que puedas ver con qué tecnologías se ha <br>creado esta página, el tiempo de creación de esta página y muchas cosas más que pueden ser de tu interés.
          </p>
          
<br>
<br>
    <button class="bg-blue-700 p-2 text-white rounded-md" > <a href="{{ route('about') }}">Vamos→</a></button>
    </div>
    @auth
        <div class="text-white">
            Authenticated User: {{ Auth::user()->name }}
        </div>
    @endauth
</x-layouts.app>