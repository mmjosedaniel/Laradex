<template>
    <div class="row">

        <spinner v-show="loading"></spinner>
    
    <div  class="col-sm" v-for="pokemon in pokemons" :key="pokemon.id">
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
            <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" 
            class="card-img-top rounded-circle mx-auto d-block" v-bind:src="pokemon.picture"  alt="">
            
            <div class="card-body">
                <h5 class="card-title">{{ pokemon.name }}</h5>
                <p class="card-text">PokemonDescription</p>
            <a href="/trainers/" class="btn btn-primary">Show me more!</a>
            </div>
        </div>
    </div>
    
</div>
</template>

<script>
import EventBus from '../event-bus';

export default {
    data(){
        return {
            pokemons: [],
            loading: true
        }
    },
    created() {
        EventBus.$on('pokemon-added', data => {
            this.pokemons.push(data)
        })
    },
    mounted() {
        axios
            .get('http://pokemon.test/pokemons')
            .then((res) => {
                this.pokemons = res.data
                this.loading = false
            })
    }
}
</script>