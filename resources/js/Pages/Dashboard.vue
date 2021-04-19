<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Informacje o nas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <b><center>Technik Programista</center></b>
            <p>Dziś programista to jeden z najlepiej zarabiających i najbardziej poszukiwanych na rynku pracy zawodów.
            Dwudziestolatek często może zarobić więcej, niż lekarz z dwudziestoletnim stażem. Aby jednak tego dokonać, potrzeba kwalifikacji i umiejętności.
            Technik programista jest znakomitym wyborem drogi życiowej dla wszystkich, którzy z ciekawością patrzą na komputery, oraz nie przerażają ich przedmioty ścisłe.
            Programowanie to nie tylko pieniądze, to ciekawa pasja dająca m. in. możliwość programowania robotów, pisania gier 3D, aplikacji komórkowych i robienia wielu innowacyjnych, kreatywnych rzeczy (inteligentne ubrania, domy itp.).
            Kilkanaście godzin programowania w tygodniu przez kilka lat naprawdę może przygotować dobrze do pracy w charakterze programisty i dać wiele satysfakcji. Jesteśmy jedną z pierwszych szkół w Polsce, która w swojej ofercie proponuje ten kierunek.</p>

            <br>
            <p class="stack">Do stworzenia chatu użyliśmy:</p>
            <div class="flexik">
               <img src="https://zsnr2chatapp.herokuapp.com/images/vue.jpeg">
            <img src="https://zsnr2chatapp.herokuapp.com/images/laravel.jpg">
            <img src="https://zsnr2chatapp.herokuapp.com/images/jetstream.jpg">
             <br>

            </div>
             <div class="buttons">
            <a href="/chat" class="btn effect04" data-sm-link-text="Kliknij :D"><span>Chat</span></a>
            </div>
            <br>
            <p class="autors">Autorzy: 123456789</p>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
    }
</script>
<style scoped>
b{
    margin:20px;
    font-size:30px;
}
img{
    width:34%;
    height: auto;
}

.flexik{
    display: flex;
}
p{
    margin-left:30px;
}
.stack{
    font-size:20px;
    /* text-align:center; */
}
.autors{
    text-align: end;
}

.buttons {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  text-align: center;
}


h1 {
  text-align: left;
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
  background-color:#FF3E41;

}
.btn:hover {
  text-decoration: none;
}

/*btn_background*/
.effect04 {
  --uismLinkDisplay: var(--smLinkDisplay, inline-flex);
  display: var(--uismLinkDisplay);
  color: #000;
  outline: solid  2px #000;
  position: relative;
  transition-duration: 0.4s;
  overflow: hidden;
}

.effect04::before,
.effect04 span{
    margin: 0 auto;
	transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);
	transition-duration: 0.4s;
}

/* 文字1を上に */
.effect04:hover{

  background-color: #000;
}

/* HOVERしたら文字1を上に */
.effect04:hover span{
  -webkit-transform: translateY(-400%) scale(-0.1,20);
          transform: translateY(-400%) scale(-0.1,20);
}

/*文字2*/
.effect04::before{
  content: attr(data-sm-link-text);
	color: #FFF;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  -webkit-transform: translateY(500%) scale(-0.1,20);
          transform: translateY(500%) scale(-0.1,20);
}

/* HOVERしたら文字2を上に */
.effect04:hover::before{
  letter-spacing: 0.05em;
  -webkit-transform: translateY(0) scale(1,1);
          transform: translateY(0) scale(1,1);
}

</style>
