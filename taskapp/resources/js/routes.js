import Projects from  './components/ProjectComponent.vue';
import Sprints from  './components/SprintsComponent.vue';


export default [
    {path: '/proyectos', component: Projects, name:'projects'},
    {path: '/proyectos/:id/sprints', component: Sprints, name:'sprints'}
];