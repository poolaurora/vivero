<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vivere Imóveis</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- TailwindCSS CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased bg-white text-gray-700">
        <!-- Navbar -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-16 w-16" src="/images/logo-vivere.webp" alt="Vivere Imóveis Logo">
                        </div>
                        <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">
                            <a href="#" class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                            <a href="#about" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Sobre Nós</a>
                            <a href="#services" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Serviços</a>
                            <a href="#contact" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="bg-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex items-center lg:justify-between">
                <div class="max-w-xl">
                    <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Bem-vindo à Vivere Imóveis</h1>
                    <p class="mt-4 text-lg text-gray-500">Sua satisfação é nossa prioridade. Encontre o imóvel dos seus sonhos conosco.</p>
                    <a href="#contact" class="mt-6 inline-block bg-green-500 border border-transparent rounded-md py-3 px-8 text-base font-medium text-white hover:bg-green-700">Entre em Contato</a>
                </div>
                <div class="mt-10 lg:mt-0 lg:ml-8">
                    <img class="h-56 w-1/2 object-cover sm:h-56 md:h-96 lg:w-1/2 lg:h-full" src="/images/logo-vivere.webp" alt="Real Estate Image">
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Sobre Nós</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Experiência e Confiança desde 1997</p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">A Vivere Imóveis é referência no mercado imobiliário, oferecendo serviços de qualidade e atendimento personalizado.</p>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Serviços</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Nossos Serviços</p>
        </div>
        <div class="mt-10">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900">Móveis Sob Medida</h3>
                        <p class="mt-4 text-gray-500">Projetamos e fabricamos móveis sob medida, adaptados perfeitamente ao seu espaço e necessidades.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900">Restauro de Móveis</h3>
                        <p class="mt-4 text-gray-500">Serviço de restauração e renovação de móveis antigos, preservando seu valor e beleza original.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900">Consultoria de Design</h3>
                        <p class="mt-4 text-gray-500">Consultoria especializada para ajudar na escolha e combinação de móveis, cores e estilos para o seu ambiente.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900">Montagem de Móveis</h3>
                        <p class="mt-4 text-gray-500">Serviço de montagem profissional de móveis, garantindo um resultado perfeito e sem complicações.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="p-6 bg-white shadow-lg rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900">Venda de Móveis Prontos</h3>
                        <p class="mt-4 text-gray-500">Venda de uma ampla variedade de móveis prontos para uso, com designs modernos e clássicos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Contact Section -->
        <section id="contact" class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-green-600 font-semibold tracking-wide uppercase">Contato</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Entre em Contato Conosco</p>
                </div>
                <div class="mt-10">
                    <form action="{{ url('/contact') }}" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                     @csrf       
                    <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" requigreen class="block w-full shadow-sm sm:text-sm p-2 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" requigreen class="block w-full shadow-sm sm:text-sm p-2 border-gray-300 rounded-md">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm font-medium text-gray-700">Mensagem</label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" requigreen class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <button type="submit" class="w-full inline-flex justify-center py-3 px-8 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800">
            <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
                    <div class="px-5 py-2">
                        <a href="#" class="text-base text-gray-400 hover:text-gray-300">Home</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#about" class="text-base text-gray-400 hover:text-gray-300">Sobre Nós</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#services" class="text-base text-gray-400 hover:text-gray-300">Serviços</a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#contact" class="text-base text-gray-400 hover:text-gray-300">Contato</a>
                    </div>
                </nav>
                <p class="mt-8 text-center text-base text-gray-400">&copy; 2024 Vivere Imóveis. Todos os direitos reservados. CNPJ: <span class="underline hover:text-gray-300">02.086.622/0001-00</span></p>
            </div>
        </footer>
    </body>
</html>
