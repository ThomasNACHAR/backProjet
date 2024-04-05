<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes petits plaisirs</title>
</head>
<body>
<header class="hidden sm:block">
    <nav class=" bg-blue-900 flex items-center xl:justify-between px-8 py-4 justify-around">
        <div class="logo">
        <a href="/"><img src="{{ asset('images/logoTransparent.png') }}" alt="logo" class="w-32"></a>
        </div>
        <div class="navlinks navlinks h-24 text-white flex items-center gap-8">
            <ul class="flex items-center gap-4">
                <li>
                <details class="relative inline-block text-left">
                <summary class="w-full bg-blue-900 border border-transparent rounded-md shadow-sm py-4 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 ">
                    Produits
                </summary>
                <div class="absolute left-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-blue-500 shadow-lg ring-1 ring-white ring-opacity-5 hover:bg-blue-600 focus:outline-none">
                <ul class="list-none p-2 flex flex-col  justify-center">
                <li><a class="block p-4 text-blue-900 hover:bg-blue-600 hover:text-white" href="">Bougies</a></li>
                <li><a class="block p-4 text-blue-900 hover:bg-blue-600 hover:text-white" href="">Bijoux</a></li>
                <li><a class="block p-4 text-blue-900 hover:bg-blue-600 hover:text-white" href="">Papeterie</a></li>
                </ul>
                </div>
                </details>
                </li>
                <li ><a class="w-full bg-blue-900 border border-transparent rounded-md shadow-sm py-4 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 " href="/personaliser">Personnaliser</a></li>
                <li><a class="w-full bg-blue-900 border border-transparent rounded-md shadow-sm py-4 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 " href="/a_propos">A propos</a></li>
                <li><a class="w-full bg-blue-900 border border-transparent rounded-md shadow-sm py-4 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 " href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="buttons flex gap-4">
            <div class="rounded-lg border border-gray-300 bg-white shadow-md p-4 flex flex-col">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQNJREFUSEvNlbEVwjAMRH96FmELGAM2oIAGemAAGuhYgDFgCxahh4gX5SmJEwuH8HCVF9t3ujvZzhh4ZAPj81OCp1Gzz79331BnFVgCwZ4Ct74kIYsmwLUAF5Jeoy0DVdNbRRuBKBAlqaPMsI1AbUolkH1v7K42VRWf2CSdt81xowqEPCVsza4sPHbQPgm7UX3MIplXm+Q8xFo2icCG7VVbWRfbZFV0hR2s3mORDdvTso07zKNAgLXCLpJgTl6CMXAHRsCjxqL/dE1l2ktwBJbABZgbBAE/AzPgBKzqEr0E9iqv7+mac71oUqVksA5UKbYsCnWH3L5NqgJPBwXXeC36X4IXzvoyGb3oUXcAAAAASUVORK5CYII="/>
            </div>
            <details class="rounded-lg border border-gray-300 bg-white shadow-md p-4 flex flex-col">
                <summary class="flex items-center gap-2 cursor-pointer">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAATxJREFUSEu1VVsSwiAMpCdTT6aeTD2Zdjsss4QNrR/li2mTfSQQlnLyWk7GL0cIrqWUexWCPda7lPKp+8dM5IyAwASd4TzXn5YoI0AwVQMYAFBN9QSLMQOJI1BwgN52+qTxg5NIkAXHckUgzYMguh2a/K1qIwC/RzMK9lqBIaRzrQ5UhfuupIyNJaSQRrwHBMVMiuV03wdiTaLFrDxHCFAi4DRnmpQpdcRUGsWQAM43bEfQnYLaOJC45Y55J9SVKBIQON4PvXwxxpYo6wGSOS50bACknXeZS7jdrXTqYGhQTSKxK1F2ICwBAKILBdcJiljOIZbD3qPYJD0FSGRJsr6woRrbudobdpyk2cxXQTb233HNptIZysS9fRNmD46b+a7RIHVHdos98mSS6CJq6SQFppIjBDvvzfz36QQ/Wk1mGaOBMWUAAAAASUVORK5CYII="/>
                </summary>
                <div class="absolute right-0 z-10 mt-6 w-32 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-white ring-opacity-5 hover:bg-white focus:outline-none">
                <ul class="list-none p-2 flex flex-col  justify-center">
                <li><a class="block p-4 text-gray-800 hover:bg-gray-50 hover:text-black" href="">S'inscrire</a></li>
                <li><a class="block p-4 text-gray-800 hover:bg-gray-50 hover:text-black" href="">Se connecter</a></li>
                </ul>
                </div>
            </details>
        </div>      
    </nav>
</header>
 
    <main>
    @yield('content')
    </main>

    
    <footer class=" bottom-0 left-0 w-full bg-blue-900 text-white p-4 ">&copy; CCI18 Bourges</footer>
</body>
</html>