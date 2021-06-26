
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <!-- header -->
        <header class="site_header">
            <div class="container">
                <img src="./img/logo_spoti.png" alt="">
            </div>

        </header>
        <!-- selector genres -->
        <div class="select_genre">
            <select v-model= "selectedGenre">
                <option value="">Genres</option>
                <option v-for="genre in genres" :value="genre">
                    {{ genre }}
                </option>
            </select>
        </div>
        <!-- container with discs -->
        <main class="discs_container container">
            
            <div class="discs_list" 
            v-for="disk in discs" v-if="selectedGenre == disk.genre || selectedGenre == '' " v-if="!error">
                <img :src="disk.poster" alt="">
                <h3>{{disk.title}}</h3>
                <span class="author">{{disk.author}}</span>
                <span class="year">{{disk.year}}</span>
            </div>
            

        </main>

    </div>
    <!-- VUE JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!--  CDN AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="./app.js"></script>
</body>
</html>