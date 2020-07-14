<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet" type='text/css'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pracownia Rzęs PAPI</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<div class="w-full h-auto bg-white">
    <div style="border-color: #E0E0E0;" class="flex justify-end items-center border-b py-2 pr-48">
        <div class="flex">
            <img class="pr-2" src="{{ asset('img/mobile.svg') }}" alt="mobile">
            <p style="color: #6A3332;
                      font-family: 'Montserrat', sans-serif;"
               class="text-sm leading-6 font-normal text-peek-gray-700">
                517-742-895
            </p>
        </div>
        <a href="https://www.instagram.com/pracowniarzespapi/?hl=en">
            <img class="px-4 hover:text-binar-dark-200 focus:text-binar-dark-200 focus:outline-none active:text-binar-dark-200 transition duration-150 ease-in-out" src="{{ asset('img/instagram.svg') }}" alt="instagram">
        </a>
        <a href="https://www.facebook.com/rzesypapi">
            <img class="pr-4 hover:text-binar-dark-200 focus:text-binar-dark-200 focus:outline-none active:text-binar-dark-200 transition duration-150 ease-in-out" src="{{ asset('img/facebook.svg') }}" alt="facebook">
        </a>
    </div>
    <div class="flex justify-between items-center py-2">
        <a href="#">
            <img class="pl-32" src="{{ asset('img/logo.png') }}" alt="logo">
        </a>
        <div class="flex justify-center justify-end">
            <div class="hidden lg:block">
                <div class="flex items-center">
                    <a style="color: #29343D;
                              font-family: 'Montserrat', sans-serif;"
                       href="#zabiegi"
                       class="text-sm leading-6 font-normal hover:text-red-500 focus:text-gray-500 focus:outline-none active:text-gray-500 transition duration-150 ease-in-out">
                        Zabiegi
                    </a>
                    <a style="color: #29343D;
                              font-family: 'Montserrat', sans-serif;"
                       href="#cennik" class="pl-24 text-sm leading-6 font-normal text-peek-gray-700 hover:text-binar-dark-200 focus:text-binar-dark-200 focus:outline-none active:text-binar-dark-200 transition duration-150 ease-in-out">
                        Cennik
                    </a>
                    <a style="color: #29343D;
                              font-family: 'Montserrat', sans-serif;"
                       href="#pozabiegowa" class="pl-24 text-sm leading-6 font-normal text- hover:text-binar-violet-secondary-200 focus:outline-none focus:text-binar-violet-secondary-200 active:text-binar-violet-secondary-200 transition duration-150 ease-in-out">
                        Pielęgnacja pozabiegowa
                    </a>
                    <a style="color: #29343D;
                              font-family: 'Montserrat', sans-serif;"
                       href="#kontakt" class="pl-24 pr-48 text-sm leading-6 font-normal text- hover:text-binar-violet-secondary-200 focus:outline-none focus:text-binar-violet-secondary-200 active:text-binar-violet-secondary-200 transition duration-150 ease-in-out">
                        Kontakt
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cover section -->
<div class="hidden lg:flex justify-start content-start pl-24 pt-32 pb-10 lg:w-screen lg:h-screen bg-cover flex-wrap"
     style="background-image: url('/img/papi_cover.png')" alt="papi_cover">
    <div class="w-full">
        <h1 style="font-family: 'Montserrat', sans-serif;"
            class="w-2/5 text-6xl font-light leading-none text-white mb-10">Pracownia Rzęs PAPI.</h1>
        <p style="color: #29343D;
                  font-family: 'Lato', sans-serif;"
           class="w-1/3 text-sm font-thin leading-6">
            Bądź piękna każdego dnia<br/><br/>
            Świat oszalał na punkcie Stylizacji Rzęs.<br/>
            Fantazja w tym zawodzie nie zna granic. Każdego dnia tworzymy nowe odsłony Waszego spojrzenia, dzięki któremu czujesz się piękniejsza.<br/><br/>
            Swój zawód wykonuję z pasją i ogromnym zaangażowaniem. Wciąż pogłębiam wiedzę, zdobywając nowe umiejętności i doświadczenie.<br/><br/>
            Jako Stylistka Rzęs, a także Linergistka przykładam ogromną uwagę do szczegółów. W nich tkwi cały sekret.<br/><br/>
            Moim celem i całego zespołu jest wydobyć Twoje piękno.<br/>
            Zapraszamy do zapoznania się z całą ofertą zabiegową.
        </p>
        <div class="flex justify-center items-end">
            <img class="mt-24" src="{{ asset('img/dots_slider.svg') }}" alt="dots_slider">
        </div>
    </div>
</div>

<!-- Zabiegi section -->
<div id="zabiegi" class="hidden lg:flex justify-start content-center lg:w-screen lg:h-screen bg-cover flex-wrap"
     style="background-image: url('/img/zabiegi.png')" alt="zabiegi">
    <div class="flex justify-center items-center w-full">
        <div style="background-color: #EDC9BD;" class="w-1/2 h-32">
            <h1 style="font-family: 'Montserrat', sans-serif;
                       font-size: 104px;
                       letter-spacing: 25px;"
                class="font-hairline text-center text-white -mt-4 ml-3">ZABIEGI</h1>
        </div>
    </div>
</div>

<!-- Zabieg 1 section -->
<div class="flex">
    <div class="hidden lg:flex justify-start content-center lg:w-1/2 lg:h-screen bg-cover flex-wrap"
         style="background-image: url('/img/eye.png')" alt="eye">
    </div>
    <div style="background-color: #FBF0EC;" class="w-1/2 pt-40">
        <div class="flex flex-wrap justify-center items-center h-auto">
            <div style="border-color: #6A3332;" class="w-3/5 h-16 border mb-16">
                <h1 style="color: #6A3332;
                           font-family: 'Montserrat', sans-serif;"
                    class="text-2xl font-semibold text-center mt-4">STYLIZACJA RZĘS</h1>
            </div>
            <div class="w-3/5">
                <p style="color: #6A3332;
                          font-family: 'Lato', sans-serif;"
                   class="text center text-sm font-normal leading-6">
                    PRZEDŁUŻANIE RZĘS to sposób na stosunkowo trwałe przedłużenie i pogrubienie naturalnych rzęs, dzięki czemu na co dzień można zapomnieć o ich tuszowaniu czy doklejaniu sztucznych.<br/><br/>
                    Przedłużanie rzęs to zabieg, który może na długo i bardzo wyraźnie zmienić wygląd  i oprawę oczu. Chodzi o doklejanie  do każdej naszej naturalnej rzęsy pojedynczych włosków lub kępek.<br/><br/>
                    Zabieg Stylizacji rzęs wymaga  zachowania najwyższych standardów higienicznych, wiedzy, ogromnej ostrożności i precyzji.Stylistka rzęs manewruje metalowymi narzędziami, mocnym klejem i okolicy oczu.
                    By przedłużanie rzęs było jak najmniej inwazyjne dla oczu, stylistka każdy włosek przykleja około 1 mm od nasady naturalnych rzęs - dzięki temu ryzyko wystąpienia ewentualnego podrażnienia czy reakcji alergicznej na klej jest zminimalizowane.
                </p>
                <a href="#">
                    <p style="color: #E9BDAF;
                              font-family: 'Lato', sans-serif;"
                        class="text-sm font-medium underline mt-4">
                        Dowiedz się więcej
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Zabieg 2 section -->
<div class="flex">
    <div style="background-color: #FBF0EC;" class="flex flex-wrap justify-center items-center w-1/2">
        <div class="flex flex-wrap justify-center items-center h-auto">
            <div style="border-color: #6A3332;" class="w-3/5 h-16 border mb-16">
                <h1 style="color: #6A3332;
                           font-family: 'Montserrat', sans-serif;"
                    class="text-2xl font-semibold text-center mt-4">MAKIJAŻ PERMANENTNY</h1>
            </div>
            <div class="w-3/5">
                <p style="color: #6A3332;
                          font-family: 'Lato', sans-serif;"
                   class="text center text-sm font-normal leading-6">
                    MAKIJAŻ PERMANENTNY to specjalistyczny zabieg kosmetyczny, polegający na trwałym podkreśleniu brwi, oczu lub ust. Makijaż ten nie tylko podkreśla walory kobiecości, ale także doskonale maskuje niedoskonałości.<br/><br/>
                    Zabieg makijażu permanentnego ma za zadanie w naturalny sposób podkreślić urodę, zniwelować mankamenty, wyrównać bądź podkreślić kształt  brwi, oczu czy też ust. Pamiętajmy, że zabieg ten nie powinien zastępować tradycyjnego mocnego makijażu. Chodzi w nim bardziej o uwydatnienie i podkreślenie naturalnego piękna. Nie może być przerysowany.

                </p>
                <a href="#">
                    <p style="color: #E9BDAF;
                              font-family: 'Lato', sans-serif;"
                       class="text-sm font-medium underline mt-4">
                        Dowiedz się więcej
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="hidden lg:flex justify-start content-center lg:w-1/2 lg:h-screen bg-cover flex-wrap"
         style="background-image: url('/img/zabieg.png')" alt="zabieg">
    </div>
</div>

<!-- Pielęgnacja section -->
<div id="pozabiegowa" class="hidden lg:flex justify-start content-center lg:w-screen lg:h-screen bg-cover flex-wrap"
     style="background-image: url('/img/pielegnacja.png')" alt="pielęgnacja">
    <div class="flex justify-center items-center w-full">
        <div style="background-color: #EDC9BD;"  class="w-3/4 h-32">
            <h1 style="font-family: 'Montserrat', sans-serif;
                       font-size: 104px;
                       letter-spacing: 25px;"
                class="font-hairline text-center text-white -mt-4 ml-3">PIELĘGNACJA</h1>
        </div>
    </div>
</div>

<!-- Pielęgnacja pozabiegowa section -->
<div class="flex">
    <div class="hidden lg:flex justify-start content-center lg:w-1/2 lg:h-screen bg-cover flex-wrap"
         style="background-image: url('/img/zabiegi.png')" alt="zabiegi">
    </div>
    <div style="background-color: #FBF0EC;" class="flex flex-wrap justify-center items-center w-1/2">
        <div class="flex flex-wrap justify-center items-center h-auto">
            <div style="border-color: #6A3332;" class="w-3/5 h-16 border mb-16">
                <h1 style="color: #6A3332;
                           font-family: 'Montserrat', sans-serif;"
                    class="text-2xl font-semibold text-center mt-3">PIELĘGNACJA POZABIEGOWA</h1>
            </div>
            <div class="w-3/5">
                <p style="color: #6A3332;
                          font-family: 'Lato', sans-serif;"
                   class="text center text-sm font-normal leading-6">
                    Zastosowanie się do zaleceń po-zabiegowych jest bardzo istotnym elementem zabiegu. Jeżeli chcesz, aby efekt po wygojeniu był satysfakcjonujący dbaj o miejsce zabiegowe tak jak prosi linergistka, w przeciwnym razie po makijażu może nie być śladu.
                    Kolor brwi, ust czy kresek jest intensywny przez pierwsze dni po zabiegu. Nie panikuj! Wraz z biegiem czasu miejsce zabiegowe będzie się łuszczyć. Musisz uzbroić się w cierpliwość. Po wyłuszczeniu kolor będzie się jeszcze stabilizował. Daj mu chwilę.<br/><br/>
                    WAŻNE! Nie drap! Drapanie może spowodować osłabienie intensywności pigmentu oraz powstanie blizn.
                    Na pełną regenerację skóra potrzebuje minimum 1 miesiąca.
                    Finalny efekt pigmentacji można ocenić po min. 4 tygodniach od pierwszego zabiegu. Na „korekcie” ,która jest kontynuacją zabiegu podejmujemy decyzje o intensywności.<br/><br/>
                    Makijaż permanentny ma prawo się odbarwiać i nie ma to nic wspólnego z niską jakością zabiegu czy niską jakością produktów. Pigment zmienia się pod wpływem wielu czynników zewnętrznych jak i pod wpływem naszego stanu zdrowia, dlatego też zalecana jest korekta po upływie ok.1-2 roku od pierwszej pigmentacji.
                </p>
                <a href="#">
                    <p style="color: #E9BDAF;
                              font-family: 'Lato', sans-serif;"
                       class="text-sm font-medium underline mt-4">
                        Dowiedz się więcej
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Kontakt section -->
<div id="kontakt" class="flex">
    <div style="background-color: #FBF0EC;" class="flex flex-wrap justify-center items-center w-1/2">
        <div class="flex flex-wrap justify-center items-center h-auto">
            <div style="border-color: #6A3332;" class="w-3/5 h-16 border mb-16">
                <h1 style="color: #6A3332;
                           font-family: 'Montserrat', sans-serif;"
                    class="text-2xl font-semibold text-center px-24 mt-3">KONTAKT</h1>
            </div>
            <div class="grid grid-cols-2 grid-rows-4 w-1/2 h-full pr-16">

                <h2 style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                   class="text-left text-base font-semibold leading-6 mb-6">
                    nr telefonu:
                </h2>
                <p style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                    class="text-left text-base font-medium">517-742-895</p>

                <h2 style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                    class="text-left text-base font-semibold leading-6">
                    e-mail:
                </h2>
                <p style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                    class="text-left text-base font-medium">
                    pracowniarzes@gmail.com
                </p>

                <h2 style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                    class="text-left text-base font-semibold leading-6">
                    facebook:
                </h2>
                <a href="https://www.facebook.com/rzesypapi">
                    <p style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                       class="text-left text-base font-medium">
                        Pracownia Rzęs PaPi
                    </p>
                </a>

                <h2 style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                    class="text-left text-base font-semibold leading-6">
                    instagram:
                </h2>
                <a href="https://www.instagram.com/pracowniarzespapi/?hl=en">
                    <p style="color: #29343D;
                          font-family: 'Montserrat', sans-serif;"
                       class="text-left text-base font-medium">
                        @pracowniarzespapi
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="hidden lg:flex justify-start content-center lg:w-1/2 lg:h-screen bg-cover flex-wrap"
         style="background-image: url('/img/kontakt.png')" alt="kontakt">
    </div>
</div>

<!-- Footer section -->
<div style="background-color: #6A3332;" class="sticky flex justify-between items-center w-full h-full px-12 py-6 bg-black">
    <p style="font-family: 'Montserrat', sans-serif;"
       class="text-xs font-normal leading-6 text-white">Copyright C 2020 Pracownia Rzęs PAPI</p>
    <div class="flex justify-end">
        <p style="color: #E9BDAF;
                  font-family: 'Montserrat', sans-serif;"
           class="text-sm font-normal leading-6 text-white">Z miłośći do pięknych rzęs</p>
        <img class="pl-2" src="{{ asset('img/lashes.svg') }}" alt="lashes">
    </div>

</div>

</body>
</html>
