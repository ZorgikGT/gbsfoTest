<template>
    <div>
        <div class="form-group">
            <router-link to="/" class="btn btn-default">Back</router-link>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Edit new user</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">User name</label>
                            <input type="text" v-model="user.name" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">User email</label>
                            <input type="text" v-model="user.email" class="form-control">
                        </div>
                    </div>
                    <!--<div class="row">-->
                        <!--<div class="col-xs-12 form-group">-->
                            <!--<label class="control-label">User password</label>-->
                            <!--<input type="password" v-model="user.password" class="form-control">-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            let app = this;
            let id = app.$route.params.id;
            app.userId = id;

            axios.get('/api/user' + id)
                .then(function (resp) {
                    app.user = resp.data;
                })
                .catch(function () {
                    alert("Could not load user")
                });
        },
        data: function () {
            return {
                userId: null,
                user: {
                    name: '',
                    email: '',
                }
            }
        },
        methods: {
            saveForm(event) {
                event.preventDefault();
                let app = this;
                let newUser = app.user;

                axios.put('/api/user/' + app.userId, newUser)
                    .then(function (resp) {
                        // app.$router.replace('/');
                        // app.$router.push({path: '/'});
                    })
                    .catch(function (resp) {
                        // console.log(resp);
                        alert("Could not edit user");
                    });
            }
        }
    }
</script>