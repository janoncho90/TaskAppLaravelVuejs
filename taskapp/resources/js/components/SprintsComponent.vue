<template>
   <h1>Sprints del Proyecto</h1>
</template>

<script>
    export default {
        name: 'sprints',
        props: ['sprintsData'],

        data(){
           return {
               sprints:[]
           }
        },

        methods:{
                getSprints(){
                        axios.get('/api/projects/all').then(response => (
                            this.sprints = response.data
                            
                    ))
                },
        },
        
        

        mounted() {
            this.sprints = this.sprintsData;
            console.log('Component mounted.')
        }
    }
</script>