<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an duy lee vue.
                    </div>
                    <div v-for="employee in employees" :value="employee.id" :key="employee.name">
                        <li>{{ employee.name }}</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["employees"],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
