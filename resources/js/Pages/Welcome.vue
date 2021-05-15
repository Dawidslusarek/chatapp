<template>
    <app-layout>
        <div class="navbar flex justify-end lg:fixed">
            <a href="/register">
                <button
                    class="
                        bg-transparent
                        my-2
                        hover:bg-red-500
                        text-red-700
                        font-semibold
                        hover:text-white
                        py-2
                        px-4
                        border border-red-500
                        hover:border-transparent
                        rounded
                    "
                >
                    Zarejestruj się
                </button>
            </a>
            <a href="/login">
                <button
                    class="
                        bg-transparent
                        mx-3
                        my-2
                        hover:bg-red-500
                        text-red-700
                        font-semibold
                        hover:text-white
                        py-2
                        px-4
                        border border-red-500
                        hover:border-transparent
                        rounded
                    "
                >
                    Zaloguj się
                </button>
            </a>
        </div>

        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-col items-center">
                        <div><h1>Technik Programista</h1></div>
                        <div class="mx-5 grid lg:grid-cols-2 text-justify">
                            <div class="py-8">
                                Dziś programista to jeden z najlepiej
                                zarabiających i najbardziej poszukiwanych na
                                rynku pracy zawodów. Dwudziestolatek często może
                                zarobić więcej, niż lekarz z dwudziestoletnim
                                stażem. Aby jednak tego dokonać, potrzeba
                                kwalifikacji i umiejętności. Technik programista
                                jest znakomitym wyborem drogi życiowej dla
                                wszystkich, którzy z ciekawością patrzą na
                                komputery, oraz nie przerażają ich przedmioty
                                ścisłe. Programowanie to nie tylko pieniądze, to
                                ciekawa pasja dająca m. in. możliwość
                                programowania robotów, pisania gier 3D,
                                aplikacji komórkowych i robienia wielu
                                innowacyjnych, kreatywnych rzeczy (inteligentne
                                ubrania, domy itp.). Kilkanaście godzin
                                programowania w tygodniu przez kilka lat
                                naprawdę może przygotować dobrze do pracy w
                                charakterze programisty i dać wiele satysfakcji.
                                Jesteśmy jedną z pierwszych szkół w Polsce,
                                która w swojej ofercie proponuje ten kierunek.
                            </div>
                            <div>
                                <img
                                    src="https://zsnr2chatapp.herokuapp.com/images/people-jpg.jpg"
                                />
                            </div>
                        </div>
                        <div><h2>Do stworzenia chatu użyliśmy:</h2></div>
                        <div class="grid lg:grid-cols-2">
                            <img
                                src="https://zsnr2chatapp.herokuapp.com/images/vue.jpeg"
                            />
                            <div class="text-justify px-8 py-16">
                                Vue.js jest to framework, służący do budowania
                                dynamicznych interfejsów użytkownika.
                                Wykorzystywany jest do tworzenia zarówno
                                zaawansowanych aplikacji internetowych, jak i
                                aplikacji mobilnych. Razem z React i Angular
                                należy do najczęściej używanych frameworków, ale
                                w przeciwieństwie do dwóch innych Vue był
                                stworzony przez programistę i byłego pracownika
                                Google Evana You.
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-2">
                            <div class="text-justify px-3 py-16">
                                Laravel to stworzony przez Taylora Otwella w
                                2011 roku framework PHP, który działa zgodnie ze
                                strukturą MVC (Model View Controller). Jego
                                sporą zaletą jest licencja Open Source, o którą
                                framework jest oparty. Zapewnia to stały rozwój,
                                dobre wsparcie oraz wszechstronność
                                zastosowania. Dodatkowo poprzez dokumentację
                                prowadzoną na wysokim poziomie jego nauka nie
                                sprawia trudności, a próg wejścia do grona
                                programistów Laravela jest stosunkowo niski.
                            </div>
                            <div class="px-8">
                                <img
                                    src="https://zsnr2chatapp.herokuapp.com/images/laravel.jpg"
                                />
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-2">
                            <div>
                                <img
                                    src="https://zsnr2chatapp.herokuapp.com/images/jetstream.jpg"
                                />
                            </div>
                            <div class="text-justify px-3 py-16">
                                Wersja 8 wprowadziła Laravel Jetstream -
                                szkielet aplikacji dla frameworka ze stylowym
                                pulpitem nawigacyjnym użytkownika. Jetstream
                                obsługuje wszystko, od logowania, rejestracji i
                                weryfikacji adresu e-mail, po zarządzanie
                                sesjami i opcjonalne zarządzanie zespołem.
                                Został zaprojektowany z wysoce konfigurowalnym
                                frameworkiem CSS, Tailwind i oferuje wybór
                                między Livewire i Inertia .
                            </div>
                        </div>
                        <div class="chat">
                            <h3>Kliknij, aby przejść do chatu</h3>
                            <a href="/chat" data-sm-link-text="Kliknij :D">
                                <div
                                    class="
                                        self-center
                                        text-center
                                        bg-transparent
                                        my-2
                                        hover:bg-red-500
                                        text-red-700
                                        font-semibold
                                        hover:text-white
                                        py-2
                                        px-4
                                        border border-red-500
                                        hover:border-transparent
                                        rounded
                                    "
                                >
                                    <span>Chat</span>
                                </div>
                            </a>
                        </div>
                        <div class="authors my-8">
                            <h2>Autorzy aplikacji:</h2>
                            <ul class="text-center">
                                <li>Łukasz Rybarz</li>
                                <li>Józef Witek</li>
                                <li>Dawid Ślusarek</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import Welcome from "@/Jetstream/Welcome";

export default {
    components: {
        Welcome,
    },
};
</script>
<style scoped>
.header {
    height: 100px;
    width: 60%;
    margin-left: 20%;
    margin-top: 2%;
}
img {
    width: 100%;
    height: 100%;
}
.navbar {
    height: 85px;
    width: 100%;
}
b {
    margin: 20px;
    font-size: 30px;
}
.flexik {
    display: flex;
}
p {
    margin-left: 30px;
}
.autors {
    text-align: end;
}
* {
    font-family: "Noto Sans JP", sans-serif;
    font-weight: 400;
}

.buttons {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    text-align: center;
}

h1 {
    text-align: center;
    color: #444;
    letter-spacing: 0.05em;
    margin: 0 0 0.4em;
    font-size: 2em;
}
h2 {
    text-align: center;
    color: #444;
    letter-spacing: 0.05em;
    margin: 0 0 0.4em;
    font-size: 1.5em;
}
h3 {
    text-align: center;
    color: #444;
    letter-spacing: 0.05em;
    margin: 0 0 0.4em;
    font-size: 1em;
}

.btn {
    letter-spacing: 0.1em;
    cursor: pointer;
    font-size: 14px;
    font-weight: 400;
    line-height: 45px;
    max-width: 160px;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    width: 100%;
    background-color: #ff3e41;
}
.btn:hover {
    text-decoration: none;
}

/*btn_background*/
.effect04 {
    --uismLinkDisplay: var(--smLinkDisplay, inline-flex);
    display: var(--uismLinkDisplay);
    color: #000;
    outline: solid 2px #000;
    position: relative;
    transition-duration: 0.4s;
    overflow: hidden;
}

.effect04::before,
.effect04 span {
    margin: 0 auto;
    transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
    transition-duration: 0.4s;
}

/* 文字1を上に */
.effect04:hover {
    background-color: #000;
}

/* HOVERしたら文字1を上に */
.effect04:hover span {
    -webkit-transform: translateY(-400%) scale(-0.1, 20);
    transform: translateY(-400%) scale(-0.1, 20);
}

/*文字2*/
.effect04::before {
    content: attr(data-sm-link-text);
    color: #fff;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    -webkit-transform: translateY(500%) scale(-0.1, 20);
    transform: translateY(500%) scale(-0.1, 20);
}

/* HOVERしたら文字2を上に */
.effect04:hover::before {
    letter-spacing: 0.05em;
    -webkit-transform: translateY(0) scale(1, 1);
    transform: translateY(0) scale(1, 1);
}
</style>
