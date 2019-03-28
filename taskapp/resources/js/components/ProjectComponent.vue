<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="table-responsive">
                <table class="table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nombre Proyecto</th>
                            <th>Precio Proyecto</th>
                            <th>Ver Sprints</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="project in projects" :key="project.id">
                           <td>{{project.name}}</td>
                           <td>{{project.price}}</td>
                           <td><button class="btn btn-success" @click="redirectSprints(project.id)">Ir</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'projects',
        data(){
           return {
               projects:[]
           }
        },

        methods:{
                getProjects(){
                        axios.get('/api/projects/all').then(response => (
                            this.projects = response.data
                            
                    ))
                },

                redirectSprints(id){
                    // console.log("SI",id)
                    // axios.get(`/api/projects/${id}/sprints`).then(response => (
                    //         console.log(response)
                            
                    // ))
                    //this.$router.push(`proyect/${id}/sprints`);
                    window.location.href = `proyect/${id}/sprints`;
                    //router.go(`/project/${id}/sprints`)
                }
        },
        
        

        mounted() {
            this.getProjects()
            console.log('Component mounted.')
        }
    }
</script>